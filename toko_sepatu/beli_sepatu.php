<!DOCTYPE html>
<html>

<head>
    <title>Media Sosial Admin</title>
    <!-- Load Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-nUj0uYaAeeA/aLgGcOa+1yfnG1zzKUVV2oO9ZDdJR7jxWTxR4l7RY4y4wy4+m2qB3O5f5FzvZS5OZ7KDW/4R4A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .card {
        width: 300px;
        margin: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        border-radius: 5px;
        background-color: #fff;
        padding: 20px;
        text-align: center;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    p {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .icon {
        font-size: 32px;
        margin-right: 10px;
        vertical-align: middle;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Pesan Melalui Kontak Berikut
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <li><a href="https://wa.me/1234567890"><i class="fab fa-whatsapp icon"></i> WhatsApp</a></li>
                    <li><a href="https://www.instagram.com/"><i class="fab fa-instagram icon"></i> Instagram</a></li>
                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook icon"></i> Facebook</a></li>
                    <li><a href="https://twitter.com/"><i class="fab fa-twitter icon"></i> Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
