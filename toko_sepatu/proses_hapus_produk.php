<?php
// Menghubungkan ke database
// Koneksi ke database
$host = "localhost"; // Sesuaikan dengan nama host Anda
$user = "root"; // Sesuaikan dengan username Anda
$password = ""; // Sesuaikan dengan password Anda
$database = "webshoes"; // Sesuaikan dengan nama database Anda

$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
// Mendapatkan id produk dari form
$id = $_POST['id'];

// Query untuk menghapus produk berdasarkan id_produk
$query = "DELETE FROM produk WHERE id = $id";
$result = mysqli_query($conn, $query);

// Redirect ke halaman dashboard jika berhasil menghapus produk
if ($result) {
    header('Location: hapus_produk.php');
    exit();
} else {
    echo "Gagal menghapus produk";
}
