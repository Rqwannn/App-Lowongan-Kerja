<?php

require "../koneksi.php";

$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = md5($_POST['Password']);

$CekUsername = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$Username'");
$CekEmail = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$Email'");

if (mysqli_num_rows($CekUsername)) {
    echo json_encode("Maaf Username Sudah Terdaftar");
} else if (mysqli_num_rows($CekEmail)) {
    echo json_encode("Maaf Email Sudah Terdaftar");
} else {
    mysqli_query($conn, "INSERT INTO admin VALUES('', '$Username', '$Email', '$Password')");
    echo json_encode("Selamat Data Anda Telah Di Daftarkan");
}
