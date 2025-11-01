<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $upload_dir = 'uploads/';
    
    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        
        $file_ext_parts = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext_parts));
        
        $extensions = array("jpeg", "jpg", "png", "gif");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPEG, JPG, PNG, atau GIF.<br>";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB<br>';
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, $upload_dir . $file_name);
            echo "File $file_name berhasil diunggah.<br>";
        } else {
            echo implode(" ", $errors);
        }
    }
}
?>