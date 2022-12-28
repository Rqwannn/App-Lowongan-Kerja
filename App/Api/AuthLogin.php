<?php

session_start();
require "../koneksi.php";

$Username = $_POST['Username'];
$Password = md5($_POST['Password']);

$cekAkun = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$Username'");

if (mysqli_num_rows($cekAkun)) {
    $getSingle = mysqli_fetch_assoc($cekAkun);
    if ($Password == $getSingle['password']) {
        $_SESSION['username'] = $getSingle['username'];
        $_SESSION['email'] = $getSingle['email'];
        $_SESSION['id'] = $getSingle['id_admin'];
        $_SESSION['submit'] = true;
        echo json_encode('Selamat Anda Berhasil Login');
    } else {
        echo json_encode('Password Salah');
    }
} else {
    echo json_encode('Username Salah');
}
