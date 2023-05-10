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

$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // jika username cocok, verifikasi password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        // jika password cocok, buat session dan redirect ke halaman dashboard
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $row['role'];
        header("Location: dashboard.php");
    } else {
        // jika password salah, kembali ke halaman login dengan pesan error
        header("Location: login.php?error=1");
    }
} else {
    // jika username tidak ditemukan, kembali ke halaman login dengan pesan error
    header("Location: login.php?error=1");
}

mysqli_close($conn);
