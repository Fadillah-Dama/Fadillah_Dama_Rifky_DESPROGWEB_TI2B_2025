<?php
header('Content-Type: application/json');

$response = array('success' => false, 'errors' => array());

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    if (empty($nama)) {
        $response['errors']['nama'] = "Nama harus diisi.";
    }

    if (empty($email)) {
        $response['errors']['email'] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['errors']['email'] = "Format email tidak valid.";
    }

    if (empty($response['errors'])) {
        $response['success'] = true;
        $response['message'] = "Data berhasil dikirim: Nama = $nama, Email = $email";
    }
}

echo json_encode($response);
?>