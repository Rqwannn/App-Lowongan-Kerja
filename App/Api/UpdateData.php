<?php

require "../koneksi.php";

$ID = $_POST['ID'];
$Nama = $_POST['Nama'];
$TTL = $_POST['TTL'];
$Email = $_POST['Email'];
$Umur = $_POST['Umur'];
$pengalamanKerja = $_POST['pengalamanKerja'];
$Agama = $_POST['Agama'];
$Alamat = $_POST['Alamat'];
$JK = $_POST['JK'];

$SuratLamaranLama = $_POST['SuratLamaranLama'];
$CvLama = $_POST['CvLama'];
$PortofolioLama = $_POST['PortofolioLama'];
$FotokopiIjazahLama = $_POST['FotokopiIjazahLama'];
$FotokopiKtpLama = $_POST['FotokopiKtpLama'];
$FotokopiKkLama = $_POST['FotokopiKkLama'];
$PasFotoLama = $_POST['PasFotoLama'];
$SertifikatLama = $_POST['SertifikatLama'];
$SKCKLama = $_POST['SkckLama'];
$FSPKLama = $_POST['FotokopiSuratPengalamanKerjaLama'];
$SKSLama = $_POST['SuratKeteranganSehatLama'];

$allowFormat = ['png', 'jpg', 'jpeg'];

$FileSuratLamaran;
$FileCV;
$FilePortofolio;
$FileFotokopiIjazah;
$FileFotokopiKTP;
$FileFotokopiKK;
$FilePasFoto;
$FileSertifikat;
$FileSKCK;
$FileFSPK;
$FileSKS;

for ($index = 1; $index <= 11; $index++) {

    if ($index == 1) {
        if (isset($_FILES['suratLamaran'])) {
            $suratLamaran = $_FILES['suratLamaran'];

            $Variabel = $suratLamaran['size'];
            $Type = $suratLamaran['type'];
            $NamaFile = "Surat Lamaran";

            $FormatSuratLamaran = explode('/', $Type);

            if ($Variabel > 3000000) {
                echo json_encode("Ukuran Gambar $NamaFile Terlalu Besar Tidak Boleh Lebih Dari 3MB");
                die;
            } else if (!in_array($FormatSuratLamaran[1], $allowFormat)) {
                echo json_encode("Format File $NamaFile Tidak Di Dukung, Hanya PNG, JPG dan JPEG");
                die;
            }

            $NamaGambar = explode('.', $suratLamaran['name']);
            $Tempat = $suratLamaran['tmp_name'];

            $FileSuratLamaran = uniqid();
            $FileSuratLamaran .= ".";
            $FileSuratLamaran .= end($NamaGambar);

            $path = "../../Img/Surat_Lamaran/$SuratLamaranLama";

            if (is_file($path)) {
                unlink("../../Img/Surat_Lamaran/$SuratLamaranLama");
            }

            move_uploaded_file($Tempat, "../../Img/Surat_Lamaran/$FileSuratLamaran");
            continue;
        } else {
            $FileSuratLamaran = $SuratLamaranLama;
        }
    } else if ($index == 2) {
        if (isset($_FILES['CV'])) {
            $CV = $_FILES['CV'];

            $Variabel = $CV['size'];
            $Type = $CV['type'];
            $NamaFile = "CV";

            $FormatSuratLamaran = explode('/', $Type);

            if ($Variabel > 3000000) {
                echo json_encode("Ukuran Gambar $NamaFile Terlalu Besar Tidak Boleh Lebih Dari 3MB");
                die;
            } else if (!in_array($FormatSuratLamaran[1], $allowFormat)) {
                echo json_encode("Format File $NamaFile Tidak Di Dukung, Hanya PNG, JPG dan JPEG");
                die;
            }

            $NamaGambar = explode('.', $CV['name']);
            $Tempat = $CV['tmp_name'];

            $FileCV = uniqid();
            $FileCV .= ".";
            $FileCV .= end($NamaGambar);

            $path = "../../Img/CV/$CvLama";

            if (is_file($path)) {
                unlink("../../Img/CV/$CvLama");
            }

            move_uploaded_file($Tempat, "../../Img/CV/$FileCV");
            continue;
        } else {
            $FileCV = $CvLama;
        }
    } else if ($index == 3) {
        if (isset($_FILES['Portofolio'])) {
            $Portofolio = $_FILES['Portofolio'];

            $Variabel = $Portofolio['size'];
            $Type = $Portofolio['type'];
            $NamaFile = "Portofolio";

            $FormatSuratLamaran = explode('/', $Type);

            if ($Variabel > 3000000) {
                echo json_encode("Ukuran Gambar $NamaFile Terlalu Besar Tidak Boleh Lebih Dari 3MB");
                die;
            } else if (!in_array($FormatSuratLamaran[1], $allowFormat)) {
                echo json_encode("Format File $NamaFile Tidak Di Dukung, Hanya PNG, JPG dan JPEG");
                die;
            }

            $NamaGambar = explode('.', $Portofolio['name']);
            $Tempat = $Portofolio['tmp_name'];

            $FilePortofolio = uniqid();
            $FilePortofolio .= ".";
            $FilePortofolio .= end($NamaGambar);

            $path = "../../Img/Portofolio/$PortofolioLama";

            if (is_file($path)) {
                unlink("../../Img/Portofolio/$PortofolioLama");
            }

            move_uploaded_file($Tempat, "../../Img/Portofolio/$FilePortofolio");
            continue;
        } else {
            $FilePortofolio = $PortofolioLama;
        }
    } else if ($index == 4) {
        if (isset($_FILES['FotokopiIjazah'])) {
            $FotokopiIjazah = $_FILES['FotokopiIjazah'];

            $Variabel = $FotokopiIjazah['size'];
            $Type = $FotokopiIjazah['type'];
            $NamaFile = "Fotokopi Ijazah";

            $FormatSuratLamaran = explode('/', $Type);

            if ($Variabel > 3000000) {
                echo json_encode("Ukuran Gambar $NamaFile Terlalu Besar Tidak Boleh Lebih Dari 3MB");
                die;
            } else if (!in_array($FormatSuratLamaran[1], $allowFormat)) {
                echo json_encode("Format File $NamaFile Tidak Di Dukung, Hanya PNG, JPG dan JPEG");
                die;
            }

            $NamaGambar = explode('.', $FotokopiIjazah['name']);
            $Tempat = $FotokopiIjazah['tmp_name'];

            $FileFotokopiIjazah = uniqid();
            $FileFotokopiIjazah .= ".";
            $FileFotokopiIjazah .= end($NamaGambar);

            $path = "../../Img/Fotokopi_Ijazah/$FotokopiIjazahLama";

            if (is_file($path)) {
                unlink("../../Img/Fotokopi_Ijazah/$FotokopiIjazahLama");
            }

            move_uploaded_file($Tempat, "../../Img/Fotokopi_Ijazah/$FileFotokopiIjazah");
            continue;
        } else {
            $FileFotokopiIjazah = $FotokopiIjazahLama;
        }
    } else if ($index == 5) {
        if (isset($_FILES['FotokopiKTP'])) {
            $FotokopiKTP = $_FILES['FotokopiKTP'];

            $Variabel = $FotokopiKTP['size'];
            $Type = $FotokopiKTP['type'];
            $NamaFile = "Fotokopi KTP";

            $FormatSuratLamaran = explode('/', $Type);

            if ($Variabel > 3000000) {
                echo json_encode("Ukuran Gambar $NamaFile Terlalu Besar Tidak Boleh Lebih Dari 3MB");
                die;
            } else if (!in_array($FormatSuratLamaran[1], $allowFormat)) {
                echo json_encode("Format File $NamaFile Tidak Di Dukung, Hanya PNG, JPG dan JPEG");
                die;
            }

            $NamaGambar = explode('.', $FotokopiKTP['name']);
            $Tempat = $FotokopiKTP['tmp_name'];

            $FileFotokopiKTP = uniqid();
            $FileFotokopiKTP .= ".";
            $FileFotokopiKTP .= end($NamaGambar);

            $path = "../../Img/Fotokopi_KTP/$FotokopiKtpLama";

            if (is_file($path)) {
                unlink("../../Img/Fotokopi_KTP/$FotokopiKtpLama");
            }

            move_uploaded_file($Tempat, "../../Img/Fotokopi_KTP/$FileFotokopiKTP");
            continue;
        } else {
            $FileFotokopiKTP = $FotokopiKtpLama;
        }
    } else if ($index == 6) {
        if (isset($_FILES['FotokopiKK'])) {
            $FotokopiKK = $_FILES['FotokopiKK'];

            $Variabel = $FotokopiKK['size'];
            $Type = $FotokopiKK['type'];
            $NamaFile = "Fotokopi KK";

            $FormatSuratLamaran = explode('/', $Type);

            if ($Variabel > 3000000) {
                echo json_encode("Ukuran Gambar $NamaFile Terlalu Besar Tidak Boleh Lebih Dari 3MB");
                die;
            } else if (!in_array($FormatSuratLamaran[1], $allowFormat)) {
                echo json_encode("Format File $NamaFile Tidak Di Dukung, Hanya PNG, JPG dan JPEG");
                die;
            }

            $NamaGambar = explode('.', $FotokopiKK['name']);
            $Tempat = $FotokopiKK['tmp_name'];

            $FileFotokopiKK = uniqid();
            $FileFotokopiKK .= ".";
            $FileFotokopiKK .= end($NamaGambar);

            $path = "../../Img/Fotokopi_KK/$FotokopiKkLama";

            if (is_file($path)) {
                unlink("../../Img/Fotokopi_KK/$FotokopiKkLama");
            }

            move_uploaded_file($Tempat, "../../Img/Fotokopi_KK/$FileFotokopiKK");
            continue;
        } else {
            $FileFotokopiKK = $FotokopiKkLama;
        }
    } else if ($index == 7) {
        if (isset($_FILES['pasFoto'])) {
            $pasFoto = $_FILES['pasFoto'];

            $Variabel = $pasFoto['size'];
            $Type = $pasFoto['type'];
            $NamaFile = "Pas Foto";

            $FormatSuratLamaran = explode('/', $Type);

            if ($Variabel > 3000000) {
                echo json_encode("Ukuran Gambar $NamaFile Terlalu Besar Tidak Boleh Lebih Dari 3MB");
                die;
            } else if (!in_array($FormatSuratLamaran[1], $allowFormat)) {
                echo json_encode("Format File $NamaFile Tidak Di Dukung, Hanya PNG, JPG dan JPEG");
                die;
            }

            $NamaGambar = explode('.', $pasFoto['name']);
            $Tempat = $pasFoto['tmp_name'];

            $FilePasFoto = uniqid();
            $FilePasFoto .= ".";
            $FilePasFoto .= end($NamaGambar);

            $path = "../../Img/Pas_Foto/$PasFotoLama";

            if (is_file($path)) {
                unlink("../../Img/Pas_Foto/$PasFotoLama");
            }

            move_uploaded_file($Tempat, "../../Img/Pas_Foto/$FilePasFoto");
            continue;
        } else {
            $FilePasFoto = $PasFotoLama;
        }
    } else if ($index == 8) {
        if (isset($_FILES['Sertifikat'])) {
            $Sertifikat = $_FILES['Sertifikat'];

            $Variabel = $Sertifikat['size'];
            $Type = $Sertifikat['type'];
            $NamaFile = "Sertifikat";

            $FormatSuratLamaran = explode('/', $Type);

            if ($Variabel > 3000000) {
                echo json_encode("Ukuran Gambar $NamaFile Terlalu Besar Tidak Boleh Lebih Dari 3MB");
                die;
            } else if (!in_array($FormatSuratLamaran[1], $allowFormat)) {
                echo json_encode("Format File $NamaFile Tidak Di Dukung, Hanya PNG, JPG dan JPEG");
                die;
            }

            $NamaGambar = explode('.', $Sertifikat['name']);
            $Tempat = $Sertifikat['tmp_name'];

            $FileSertifikat = uniqid();
            $FileSertifikat .= ".";
            $FileSertifikat .= end($NamaGambar);

            $path = "../../Img/Sertifikat/$SertifikatLama";

            if (is_file($path)) {
                unlink("../../Img/Sertifikat/$SertifikatLama");
            }

            move_uploaded_file($Tempat, "../../Img/Sertifikat/$FileSertifikat");
            continue;
        } else {
            $FileSertifikat = $SertifikatLama;
        }
    } else if ($index == 9) {
        if (isset($_FILES['SKCK'])) {
            $SKCK = $_FILES['SKCK'];

            $Variabel = $SKCK['size'];
            $Type = $SKCK['type'];
            $NamaFile = "SKCK";

            $FormatSuratLamaran = explode('/', $Type);

            if ($Variabel > 3000000) {
                echo json_encode("Ukuran Gambar $NamaFile Terlalu Besar Tidak Boleh Lebih Dari 3MB");
                die;
            } else if (!in_array($FormatSuratLamaran[1], $allowFormat)) {
                echo json_encode("Format File $NamaFile Tidak Di Dukung, Hanya PNG, JPG dan JPEG");
                die;
            }

            $NamaGambar = explode('.', $SKCK['name']);
            $Tempat = $SKCK['tmp_name'];

            $FileSKCK = uniqid();
            $FileSKCK .= ".";
            $FileSKCK .= end($NamaGambar);

            $path = "../../Img/SKCK/$SKCKLama";

            if (is_file($path)) {
                unlink("../../Img/SKCK/$SKCKLama");
            }

            move_uploaded_file($Tempat, "../../Img/SKCK/$FileSKCK");
            continue;
        } else {
            $FileSKCK = $SKCKLama;
        }
    } else if ($index == 10) {
        if (isset($_FILES['FSPK'])) {
            $FSPK = $_FILES['FSPK'];

            $Variabel = $FSPK['size'];
            $Type = $FSPK['type'];
            $NamaFile = "FSPK";

            $FormatSuratLamaran = explode('/', $Type);

            if ($Variabel > 3000000) {
                echo json_encode("Ukuran Gambar $NamaFile Terlalu Besar Tidak Boleh Lebih Dari 3MB");
                die;
            } else if (!in_array($FormatSuratLamaran[1], $allowFormat)) {
                echo json_encode("Format File $NamaFile Tidak Di Dukung, Hanya PNG, JPG dan JPEG");
                die;
            }

            $NamaGambar = explode('.', $FSPK['name']);
            $Tempat = $FSPK['tmp_name'];

            $FileFSPK = uniqid();
            $FileFSPK .= ".";
            $FileFSPK .= end($NamaGambar);

            $path = "../../Img/FSPK/$FSPKLama";

            if (is_file($path)) {
                unlink("../../Img/FSPK/$FSPKLama");
            }

            move_uploaded_file($Tempat, "../../Img/FSPK/$FileFSPK");
            continue;
        } else {
            $FileFSPK = $FSPKLama;
        }
    } else if ($index == 11) {
        if (isset($_FILES['SKS'])) {
            $SKS = $_FILES['SKS'];

            $Variabel = $SKS['size'];
            $Type = $SKS['type'];
            $NamaFile = "SKS";

            $FormatSuratLamaran = explode('/', $Type);

            if ($Variabel > 3000000) {
                echo json_encode("Ukuran Gambar $NamaFile Terlalu Besar Tidak Boleh Lebih Dari 3MB");
                die;
            } else if (!in_array($FormatSuratLamaran[1], $allowFormat)) {
                echo json_encode("Format File $NamaFile Tidak Di Dukung, Hanya PNG, JPG dan JPEG");
                die;
            }

            $NamaGambar = explode('.', $SKS['name']);
            $Tempat = $SKS['tmp_name'];

            $FileSKS = uniqid();
            $FileSKS .= ".";
            $FileSKS .= end($NamaGambar);

            $path = "../../Img/SKS/$SKSLama";

            if (is_file($path)) {
                unlink("../../Img/SKS/$SKSLama");
            }

            move_uploaded_file($Tempat, "../../Img/SKS/$FileSKS");
            continue;
        } else {
            $FileSKS = $SKSLama;
        }
    }
}

$getQuery = mysqli_query($conn, "SELECT * FROM surat_lamaran WHERE id = '$ID'");
$getId = mysqli_fetch_assoc($getQuery)['formulir_dari_perusahaan'];


mysqli_query($conn, "UPDATE formulir SET nama = '$Nama', email = '$Email', ttl = '$TTL', alamat = '$Alamat', pengalaman_kerja = '$pengalamanKerja', umur = '$Umur', jk = '$JK', agama = '$Agama' WHERE id_formulir = '$getId'");
mysqli_query($conn, "UPDATE surat_lamaran SET surat_lamaran = '$FileSuratLamaran', cv = '$FileCV', portofolio = '$FilePortofolio', fotokopi_ijazah = '$FileFotokopiIjazah', fotokopi_ktp = '$FileFotokopiKTP', fotokopi_kk = '$FileFotokopiKK', pas_foto = '$FilePasFoto', skck = '$FileSKCK', fotokopi_surat_pengalaman_kerja = '$FileFSPK', surat_keterangan_sehat = '$FileSKS' WHERE id = '$ID' ");

echo json_encode("Data Berhasil Di Update");
