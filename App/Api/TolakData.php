<?php

require '../koneksi.php';

$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM surat_lamaran WHERE id = '$id'");

echo json_encode('Data Telah Di Tolak');
