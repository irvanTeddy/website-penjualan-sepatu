<style>
.table-wrapper {
    max-width: 100%;
    overflow-x: auto;
    padding: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
}

thead {
    background-color: #f2f2f2;
    font-weight: bold;
}

th,
td {
    text-align: left;
    padding: 12px;
    border: 1px solid #ddd;
}

th {
    background-color: #e8e8e8;
}

td img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    object-position: center;
}

td button {
    background-color: #dc3545;
    border: none;
    color: #fff;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
}

td button:hover {
    background-color: #c82333;
}
</style>
<?php
// Koneksi ke database
$host = "localhost"; // Sesuaikan dengan nama host Anda
$user = "root"; // Sesuaikan dengan username Anda
$password = ""; // Sesuaikan dengan password Anda
$database = "webshoes"; // Sesuaikan dengan nama database Anda

$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
<table>
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Gambar</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
// Query untuk mengambil data produk dari database
$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?php echo $row['nama_produk']; ?></td>
            <td><img src="<?php echo $row['gambar']; ?>" alt="Gambar Produk"></td>
            <td><?php echo $row['keterangan']; ?></td>
            <td>Rp. <?php echo number_format($row['harga'], 0, ",", "."); ?></td>
            <td>
                <form method="post" action="proses_hapus_produk.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        <?php
}
?>
    </tbody>
</table>