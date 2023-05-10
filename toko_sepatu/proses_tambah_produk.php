<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "webshoes";
$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];

$gambar = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];
$folder = "images/" . $gambar;

move_uploaded_file($tmp_name, $folder);

$query = "INSERT INTO produk (nama_produk, keterangan, harga, gambar) VALUES ('$nama_produk', '$keterangan', '$harga', '$gambar')";

if (mysqli_query($conn, $query)) {
    echo "Produk berhasil ditambahkan";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
