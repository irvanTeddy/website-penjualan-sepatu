<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "webshoes";
$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];

// periksa apakah password dan konfirmasi password cocok
if ($password !== $password_confirmation) {
    header("Location: registrasi_admin.php?error=1");
    exit();
}

// hash password sebelum disimpan ke database
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// simpan informasi akun baru ke dalam database
$query = "INSERT INTO users (username, password, role) VALUES ('$username', '$hashed_password', 'admin')";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: login.php");
} else {
    header("Location: registrasi_admin.php?error=2");
}

mysqli_close($conn);
