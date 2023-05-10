<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Tambah Produk
                    </div>
                    <div class="card-body">
                        <form action="proses_tambah_produk.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama_produk">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_produk" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea name="keterangan" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="harga_produk">Harga</label>
                                <input type="number" class="form-control" name="harga" required>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" class="form-control-file" name="gambar" accept="images/*" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Produk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
