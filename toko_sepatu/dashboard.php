<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .navbar {
        background-color: #343a40;
        color: #fff;
    }

    .navbar-brand {
        font-weight: bold;
    }

    .card {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        margin-bottom: 1.5rem;
    }

    .card-header {
        background-color: #f8f9fa;
        border-bottom: none;
        font-weight: bold;
        font-size: 1.5rem;
    }

    .card-body {
        padding: 1.5rem;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    .card-text {
        font-size: 1rem;
        margin-bottom: 0.5rem;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="tambah_produk.php">Tambah Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hapus_produk.php"> hapus Products</a>
                </li>

            </ul>
        </div>
    </nav>
    <?php

session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: index.php");
}
?>
    <p></p>
    <p>Selamat datang, <?php echo $_SESSION['username']; ?></p>
    <a href="logout.php" class="btn btn-danger">Logout</a>
    <style>
    .logout-btn {
        background-color: #ff0000;
        color: #ffffff;
        padding: 10px;
        text-decoration: none;
        border-radius: 5px;
    }

    .logout-btn:hover {
        background-color: #cc0000;
    }
    </style>