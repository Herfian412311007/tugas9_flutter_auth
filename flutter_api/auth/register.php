<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Content-Type: application/json");

include "../config/koneksi.php";
include "../helper/response.php";

$username = $_POST['username'] ?? '';
$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($username) || empty($email) || empty($password)) {
    response(false, "Semua field wajib diisi");
    exit;
}

$check = $conn->query("SELECT * FROM users WHERE email='$email'");
if ($check->num_rows > 0) {
    response(false, "Email sudah digunakan");
    exit;
}

$hashPassword = password_hash($password, PASSWORD_BCRYPT);
$sql = "INSERT INTO users(username,email,password) VALUES('$username','$email','$hashPassword')";
if ($conn->query($sql)) {
    response(true, "Register berhasil");
} else {
    response(false, "Register gagal: " . $conn->error);
}
