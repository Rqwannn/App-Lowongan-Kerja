<?php

require "../koneksi.php";

$id = $_POST['id'];

$getQuery = mysqli_query($conn, "SELECT formulir.*, surat_lamaran.* FROM surat_lamaran INNER JOIN formulir ON formulir.id_formulir = surat_lamaran.formulir_dari_perusahaan WHERE id = '$id'");
$Result = mysqli_fetch_assoc($getQuery);

mysqli_query($conn, "DELETE formulir.*, surat_lamaran.* FROM surat_lamaran
INNER JOIN formulir ON formulir.id_formulir = surat_lamaran.formulir_dari_perusahaan WHERE id = '$id'");

for ($i = 1; $i <= 11; $i++) {

    if ($i == 1) {
        $NamaGambar = $Result['surat_lamaran'];
        $path = "../../Img/Surat_Lamaran/$NamaGambar";

        if (is_file($path)) {
            unlink("../../Img/Surat_Lamaran/$NamaGambar");
            continue;
        }
    } else if ($i == 2) {
        $NamaGambar = $Result['cv'];
        $path = "../../Img/CV/$NamaGambar";

        if (is_file($path)) {
            unlink("../../Img/CV/$NamaGambar");
            continue;
        }
    } else if ($i == 3) {
        $NamaGambar = $Result['portofolio'];
        $path = "../../Img/Portofolio/$NamaGambar";

        if (is_file($path)) {
            unlink("../../Img/Portofolio/$NamaGambar");
            continue;
        }
    } else if ($i == 4) {
        $NamaGambar = $Result['fotokopi_ijazah'];
        $path = "../../Img/Fotokopi_Ijazah/$NamaGambar";

        if (is_file($path)) {
            unlink("../../Img/Fotokopi_Ijazah/$NamaGambar");
            continue;
        }
    } else if ($i == 5) {
        $NamaGambar = $Result['fotokopi_ktp'];
        $path = "../../Img/Fotokopi_KTP/$NamaGambar";

        if (is_file($path)) {
            unlink("../../Img/Fotokopi_KTP/$NamaGambar");
            continue;
        }
    } else if ($i == 6) {
        $NamaGambar = $Result['fotokopi_kk'];
        $path = "../../Img/Fotokopi_KK/$NamaGambar";

        if (is_file($path)) {
            unlink("../../Img/Fotokopi_KK/$NamaGambar");
            continue;
        }
    } else if ($i == 7) {
        $NamaGambar = $Result['pas_foto'];
        $path = "../../Img/Pas_Foto/$NamaGambar";

        if (is_file($path)) {
            unlink("../../Img/Pas_Foto/$NamaGambar");
            continue;
        }
    } else if ($i == 8) {
        $NamaGambar = $Result['sertifikat'];
        $path = "../../Img/Sertifikat/$NamaGambar";

        if (is_file($path)) {
            unlink("../../Img/Sertifikat/$NamaGambar");
            continue;
        }
    } else if ($i == 9) {
        $NamaGambar = $Result['skck'];
        $path = "../../Img/SKCK/$NamaGambar";

        if (is_file($path)) {
            unlink("../../Img/SKCK/$NamaGambar");
            continue;
        }
    } else if ($i == 10) {
        $NamaGambar = $Result['fotokopi_surat_pengalaman_kerja'];
        $path = "../../Img/FSPK/$NamaGambar";

        if (is_file($path)) {
            unlink("../../Img/FSPK/$NamaGambar");
            continue;
        }
    } else if ($i == 11) {
        $NamaGambar = $Result['surat_keterangan_sehat'];
        $path = "../../Img/SKS/$NamaGambar";

        if (is_file($path)) {
            unlink("../../Img/SKS/$NamaGambar");
            continue;
        }
    }
}

echo json_encode('Data Berhasil Di Hapus');
