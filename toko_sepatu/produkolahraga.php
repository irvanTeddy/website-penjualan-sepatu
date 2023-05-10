<?php include 'navbar.php';?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Daftar Tersedia</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        margin-bottom: 20px;
        /* tambahkan margin-bottom di sini */
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card-img-top {
        border-radius: 10px 10px 0 0;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        margin-bottom: 10px;
        font-size: 1.2rem;
        font-weight: bold;
    }

    .card-text {
        margin-bottom: 10px;
        font-size: 1rem;
        color: #666;
    }

    .btn-success {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-success:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

    body {
        font-family: "Open Sans", sans-serif;
    }
    </style>
</head>

<body>

    <body style="background-color: #F4F4FE;">

        <div class="container">
            <p></p>
            <h2 class="text-center my-4">Daftar produk sepatu </h2>

            <p></p>
            <div class="row">
                <?php
//koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "webshoes";
$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//query untuk menampilkan produk tersedia
$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="col-md-4">';
        echo '<div class="card">';
        echo "<img src='images/" . $row['gambar'] . "' class='card-img-top'>";
        echo '<div class="card-body">';
        echo "<h5 class='card-title'>" . $row['nama_produk'] . "</h5>";
        echo "<p class='card-text'>" . $row['keterangan'] . "</p>";
        echo "<p class='card-text'>Harga: " . $row['harga'] . "</p>";
        echo '<a href="beli_sepatu.php" class="btn btn-success">Beli</a>';
        echo "</div>";
        echo "</div>";
        echo '</div>';
    }
}

mysqli_close($conn);
?>
            </div>
        </div>
    </body>

</html>
<p></p>
<?php include 'footer.php';?>