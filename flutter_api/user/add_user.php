<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
include "../config/koneksi.php";

$username = $_POST['username'] ?? '';
$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($username) || empty($email) || empty($password)) {
    echo json_encode([
        "status" => false,
        "message" => "Semua field wajib diisi"
    ]);
    exit;
}

$hash = password_hash($password, PASSWORD_DEFAULT);
$query = mysqli_query($conn, "INSERT INTO users(username,email,password) VALUES('$username','$email','$hash')");

if ($query) {
    echo json_encode([
        "status" => true,
        "message" => "Data berhasil ditambahkan"
    ]);
} else {
    echo json_encode([
        "status" => false,
        "message" => "Data gagal ditambahkan"
    ]);
}
