<?php

require "../koneksi.php";

$Nama = $_POST['Nama'];
$TTL = $_POST['TTL'];
$Email = $_POST['Email'];
$Umur = $_POST['Umur'];
$pengalamanKerja = $_POST['pengalamanKerja'];
$Agama = $_POST['Agama'];
$Alamat = $_POST['Alamat'];
$JK = $_POST['JK'];

$suratLamaran = $_FILES['suratLamaran'];
$CV = $_FILES['CV'];
$Portofolio = $_FILES['Portofolio'];
$FotokopiIjazah = $_FILES['FotokopiIjazah'];
$FotokopiKTP = $_FILES['FotokopiKTP'];
$FotokopiKK = $_FILES['FotokopiKK'];
$pasFoto = $_FILES['pasFoto'];
$Sertifikat = $_FILES['Sertifikat'];
$SKCK = $_FILES['SKCK'];
$FSPK = $_FILES['FSPK'];
$SKS = $_FILES['SKS'];

$cekEmail = mysqli_query($conn, "SELECT email FROM formulir WHERE email = '$Email'");

if (mysqli_num_rows($cekEmail)) {
    echo json_encode("Email Sudah Terdaftar");
    die;
}

for ($index = 1; $index <= 11; $index++) {
    $Variabel;
    $NamaFile;
    $Type;

    if ($index == 1) {
        $Variabel = $suratLamaran['size'];
        $Type = $suratLamaran['type'];
        $NamaFile = "Surat Lamaran";
    } else if ($index == 2) {
        $Variabel = $CV['size'];
        $Type = $CV['type'];
        $NamaFile = "CV";
    } else if ($index == 3) {
        $Variabel = $Portofolio['size'];
        $Type = $Portofolio['type'];
        $NamaFile = "Portofolio";
    } else if ($index == 4) {
        $Variabel = $FotokopiIjazah['size'];
        $Type = $FotokopiIjazah['type'];
        $NamaFile = "Fotokopi Ijazah";
    } else if ($index == 5) {
        $Variabel = $FotokopiKTP['size'];
        $Type = $FotokopiKTP['type'];
        $NamaFile = "Fotokopi KTP";
    } else if ($index == 6) {
        $Variabel = $FotokopiKK['size'];
        $Type = $FotokopiKK['type'];
        $NamaFile = "Fotokopi KK";
    } else if ($index == 7) {
        $Variabel = $pasFoto['size'];
        $Type = $pasFoto['type'];
        $NamaFile = "Pas Foto";
    } else if ($index == 8) {
        $Variabel = $Sertifikat['size'];
        $Type = $Sertifikat['type'];
        $NamaFile = "Sertifikat";
    } else if ($index == 9) {
        $Variabel = $SKCK['size'];
        $Type = $SKCK['type'];
        $NamaFile = "SKCK";
    } else if ($index == 10) {
        $Variabel = $FSPK['size'];
        $Type = $FSPK['type'];
        $NamaFile = "FSPK";
    } else if ($index == 11) {
        $Variabel = $SKS['size'];
        $Type = $SKS['type'];
        $NamaFile = "SKS";
    }

    $FormatSuratLamaran = explode('/', $Type);

    if ($Variabel > 3000000) {
        echo json_encode("Ukuran Gambar $NamaFile Terlalu Besar Tidak Boleh Lebih Dari 3MB");
        die;
    }
}

$KodeFormulir = "";

$KodeHash = ['I', '8', 'a', 's', 'L', '12', 'g', '7', 'k', 'Q', '4', 'P', '10', 'f', 'v', 'Z', '6'];

for ($index = 0; $index <= 16; $index++) {
    $NilaiAcak = rand(0, 16);
    $KodeFormulir .= $KodeHash[$NilaiAcak];
}

mysqli_query($conn, "INSERT INTO formulir VALUES('', '$KodeFormulir', '$Nama', '$Email', '$TTL', '$Alamat', '$pengalamanKerja', '$Umur', '$JK', '$Agama')");

$getQuery = mysqli_query($conn, "SELECT * FROM formulir WHERE kode_formulir = '$KodeFormulir'");
$getId = mysqli_fetch_assoc($getQuery)['id_formulir'];

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

    $Tempat;
    $NamaFolder;
    $NamaFile;

    if ($index == 1) {
        $NamaGambar = explode('.', $suratLamaran['name']);
        $Tempat = $suratLamaran['tmp_name'];
        $NamaFolder = "Surat_Lamaran";

        $FileSuratLamaran = uniqid();
        $FileSuratLamaran .= ".";
        $FileSuratLamaran .= end($NamaGambar);

        $NamaFile = $FileSuratLamaran;
    } else if ($index == 2) {
        $NamaGambar = explode('.', $CV['name']);
        $Tempat = $CV['tmp_name'];
        $NamaFolder = "CV";

        $FileCV = uniqid();
        $FileCV .= ".";
        $FileCV .= end($NamaGambar);

        $NamaFile = $FileCV;
    } else if ($index == 3) {
        $NamaGambar = explode('.', $Portofolio['name']);
        $Tempat = $Portofolio['tmp_name'];
        $NamaFolder = "Portofolio";

        $FilePortofolio = uniqid();
        $FilePortofolio .= ".";
        $FilePortofolio .= end($NamaGambar);

        $NamaFile = $FilePortofolio;
    } else if ($index == 4) {
        $NamaGambar = explode('.', $FotokopiIjazah['name']);
        $Tempat = $FotokopiIjazah['tmp_name'];
        $NamaFolder = "Fotokopi_Ijazah";

        $FileFotokopiIjazah = uniqid();
        $FileFotokopiIjazah .= ".";
        $FileFotokopiIjazah .= end($NamaGambar);

        $NamaFile = $FileFotokopiIjazah;
    } else if ($index == 5) {
        $NamaGambar = explode('.', $FotokopiKTP['name']);
        $Tempat = $FotokopiKTP['tmp_name'];
        $NamaFolder = "Fotokopi_KTP";

        $FileFotokopiKTP = uniqid();
        $FileFotokopiKTP .= ".";
        $FileFotokopiKTP .= end($NamaGambar);

        $NamaFile = $FileFotokopiKTP;
    } else if ($index == 6) {
        $NamaGambar = explode('.', $FotokopiKK['name']);
        $Tempat = $FotokopiKK['tmp_name'];
        $NamaFolder = "Fotokopi_KK";

        $FileFotokopiKK = uniqid();
        $FileFotokopiKK .= ".";
        $FileFotokopiKK .= end($NamaGambar);

        $NamaFile = $FileFotokopiKK;
    } else if ($index == 7) {
        $NamaGambar = explode('.', $pasFoto['name']);
        $Tempat = $pasFoto['tmp_name'];
        $NamaFolder = "Pas_Foto";

        $FilePasFoto = uniqid();
        $FilePasFoto .= ".";
        $FilePasFoto .= end($NamaGambar);

        $NamaFile = $FilePasFoto;
    } else if ($index == 8) {
        $NamaGambar = explode('.', $Sertifikat['name']);
        $Tempat = $Sertifikat['tmp_name'];
        $NamaFolder = "Sertifikat";

        $FileSertifikat = uniqid();
        $FileSertifikat .= ".";
        $FileSertifikat .= end($NamaGambar);

        $NamaFile = $FileSertifikat;
    } else if ($index == 9) {
        $NamaGambar = explode('.', $SKCK['name']);
        $Tempat = $SKCK['tmp_name'];
        $NamaFolder = "SKCK";

        $FileSKCK = uniqid();
        $FileSKCK .= ".";
        $FileSKCK .= end($NamaGambar);

        $NamaFile = $FileSKCK;
    } else if ($index == 10) {
        $NamaGambar = explode('.', $FSPK['name']);
        $Tempat = $FSPK['tmp_name'];
        $NamaFolder = "FSPK";

        $FileFSPK = uniqid();
        $FileFSPK .= ".";
        $FileFSPK .= end($NamaGambar);

        $NamaFile = $FileFSPK;
    } else if ($index == 11) {
        $NamaGambar = explode('.', $SKS['name']);
        $Tempat = $SKS['tmp_name'];
        $NamaFolder = "SKS";

        $FileSKS = uniqid();
        $FileSKS .= ".";
        $FileSKS .= end($NamaGambar);

        $NamaFile = $FileSKS;
    }

    move_uploaded_file($Tempat, "../../Img/$NamaFolder/$NamaFile");
}

mysqli_query($conn, "INSERT INTO surat_lamaran VALUES('','$FileSuratLamaran','$FileCV', '$FilePortofolio', '$FileFotokopiIjazah', '$FileFotokopiKTP', '$FileFotokopiKK', '$FilePasFoto', '$FileSertifikat', '$FileSKCK', '$FileFSPK', '$FileSKS', '$getId', '3')");
echo json_encode("Data Berhasil Ditambahkan");
