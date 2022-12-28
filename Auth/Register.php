<?php

session_start();

if (isset($_SESSION['submit'])) {
    header('Location: ../Admin/index.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/login.css">
</head>

<body>

    <div class="wrapper">
        <h3 class="text-white text-center mb-3">Login</h3>
        <div class="group mb-2">
            <input type="text" name="username" id="username" required class="form-control w-100 fw-bold">
            <label for="username">Username</label>
        </div>
        <div class="group mb-2">
            <input type="email" name="email" id="email" required class="form-control w-100 fw-bold" autocomplete="off">
            <label for="email">Email</label>
        </div>
        <div class="group mb-2">
            <input type="password" name="password" id="password" required class="form-control w-100 fw-bold" autocomplete="off">
            <label for="password">Password</label>
            <i class="far fa-eye" onclick="showPassword(event)"></i>
            <i class="far fa-eye-slash" style="display: none;" onclick="showPassword(event)"></i>
        </div>
        <div class="group mb-5">
            <input type="password" name="confirmPassword" id="confirmPassword" required class="form-control w-100 fw-bold" autocomplete="off">
            <label for="password">Confirm Password</label>
            <i class="far fa-eye" onclick="showPassword(event)"></i>
            <i class="far fa-eye-slash" style="display: none;" onclick="showPassword(event)"></i>
        </div>
        <div class="button-group d-flex" style="flex-direction: column;">
            <button type="submit" onclick="addAdmin()" name="submit" class="btn btn-light w-100 mb-2 fw-bold">Submit</button>
            <button type="submit" onclick="ToLogin()" class="btn btn-light w-100 mb-5 fw-bold">Ke Halaman Login</button>
        </div>
        <p class="text-white text-center">@adenabila</p>
    </div>

    <script src="../JS/jquery.min.js"></script>
    <script src="../JS/auth.js"></script>
</body>

</html>