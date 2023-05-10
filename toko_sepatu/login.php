</html>
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
                        ADMIN LOGIN
                    </div>
                    <div class="card-body">
                        <form method="post" action="proses_login.php">
                            <div class="form-group">
                                <label for="username">username</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                        </form>
                        <p>Belum punya akun admin? <a href="registrasi_admin.php">Daftar sekarang!</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
