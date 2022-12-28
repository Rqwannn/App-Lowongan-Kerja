<?php

require "../koneksi.php";

$getQuery = mysqli_query($conn, 'SELECT formulir.*, surat_lamaran.* FROM surat_lamaran INNER JOIN formulir ON formulir.id_formulir = surat_lamaran.formulir_dari_perusahaan');

$Result = [];

while ($row = mysqli_fetch_assoc($getQuery)) {
    $Result[] = $row;
}

echo json_encode($Result);
