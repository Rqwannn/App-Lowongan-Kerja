<?php

session_start();

if (isset($_SESSION['submit'])) {
    header('Location: Admin/index.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/home.css">
    <title>Home</title>
</head>

<body>

    <div class="nav d-flex justify-content-around">
        <div class="Logo">
            <h3>PT.TOP LIGHT</h3>
        </div>
        <div class="nav-links">
            <ul class="d-flex">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="data.php">Data</a>
                </li>
                <li>
                    <a href="TambahData.php">Daftar Kerja</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="content">
        <h1 class="text-white">Selamat Datang</h1>
        <p class="text-white">Masuk sebagai admin agar bisa berinteraksi dengan sistem</p>
        <button onclick="Login()" class="btn btn-light fw-bold">Login</button>
    </div>

    <div class="footer">
        <p class="text-white">@adenabila</p>
    </div>
    <script src="JS/jquery.min.js"></script>
    <script src="JS/home.js"></script>
</body>

</html>