<?php
header('Content-Type: application/json');

$response = array('success' => false, 'errors' => array());

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($nama)) {
        $response['errors']['nama'] = "Nama harus diisi.";
    }

    if (empty($email)) {
        $response['errors']['email'] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['errors']['email'] = "Format email tidak valid.";
    }

    if (empty($password)) {
        $response['errors']['password'] = "Password harus diisi.";
    } elseif (strlen($password) < 8) {
        $response['errors']['password'] = "Password harus memiliki minimal 8 karakter.";
    }

    if (empty($response['errors'])) {
        $response['success'] = true;
        $response['message'] = "Data berhasil dikirim!";
    }
}

echo json_encode($response);
?>