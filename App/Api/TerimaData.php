<?php

require '../koneksi.php';

$id = $_POST['id'];

mysqli_query($conn, "UPDATE surat_lamaran SET status = 1 WHERE id = '$id'");
echo json_encode('Data Telah Di Terima');
