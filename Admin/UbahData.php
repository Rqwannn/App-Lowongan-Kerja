<?php

require "../App/koneksi.php";

$ID = $_GET['ID'];

$getQuery = mysqli_query($conn, "SELECT formulir.*, surat_lamaran.* FROM surat_lamaran INNER JOIN formulir ON formulir.id_formulir = surat_lamaran.formulir_dari_perusahaan WHERE id = '$ID'");
$result = mysqli_fetch_assoc($getQuery);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/jquery-ui.css">
    <link rel="stylesheet" href="../CSS/admin.css">
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="headerEmploye">
                    <h5>Ubah Data Pekerja</h5>
                </div>
                <div class="container">
                    <div class="titleContent">
                        <p class="mb-5">Informasi Pelamar</p>
                        <div class="lineTitleAdmin"></div>
                    </div>
                </div>
                <div class="contentProfileAdmin">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="nama" class="text-secondary">Nama Lengkap</label>
                                    <input type="text" name="nama" value="<?php echo $result['nama'] ?>" id="nama" class="form-control mt-2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="ttl" class="text-secondary">TTL</label>
                                    <input type="text" name="ttl" value="<?php echo $result['ttl'] ?>" id="ttl" class="form-control mt-2">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="email" class="text-secondary">Email</label>
                                    <input type="email" name="email" value="<?php echo $result['email'] ?>" id="email" class="form-control mt-2">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="umur" class="text-secondary">Umur</label>
                                    <input type="text" name="umur" id="umur" value="<?php echo $result['umur'] ?>" class="form-control mt-2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="pengalamanKerja" class="text-secondary">Pengalaman Kerja</label>
                                    <input type="text" name="pengalamanKerja" value="<?php echo $result['pengalaman_kerja'] ?>" id="pengalamanKerja" class="form-control mt-2">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="umur" class="text-secondary">Agama</label>
                                    <input type="hidden" class="agamaHidden" value="<?php echo $result['agama'] ?>">
                                    <select name="agama" id="agama" class="form-control mt-2">
                                        <option selected>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Kongucu">Kongucu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="umur" class="text-secondary">JK</label>
                                    <input type="hidden" class="jkHidden" value="<?php echo $result['jk'] ?>">
                                    <select name="jk" id="jk" class="form-control mt-2">
                                        <option selected>Pilih JK</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="alamat" class="text-secondary">Alamat</label>
                                    <textarea type="text" name="alamat" value="<?php echo $result['alamat'] ?>" id="alamat" class="form-control mt-2"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="titleContent">
                        <p class="my-5">Persyaratan</p>
                        <div class="lineTitleAdmin"></div>
                    </div>
                </div>
                <div class="contentProfileAdmin">
                    <div class="container">
                        <div class="row WrapperGambar">

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="suratLamaran" class="text-secondary" style="margin-bottom: 10px;">Surat Lamaran</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="suratLamaran" class="form-control">
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img src="../Img/Surat_Lamaran/<?php echo $result['surat_lamaran'] ?>" width="65">
                                        <div class="d-flex" style="margin-left: 10px; flex-direction: column;">
                                            <p>Nama File Lama</p>
                                            <p id="suratLamaranLama"><?php echo $result['surat_lamaran'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="cv" class="text-secondary" style="margin-bottom: 10px;">CV</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="cv" class="form-control">
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img src="../Img/CV/<?php echo $result['cv'] ?>" width="65">
                                        <div class="d-flex" style="margin-left: 10px; flex-direction: column;">
                                            <p>Nama File Lama</p>
                                            <p id="cvLama"><?php echo $result['cv'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="portofolio" class="text-secondary" style="margin-bottom: 10px;">Portofolio</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="portofolio" class="form-control">
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img src="../Img/Portofolio/<?php echo $result['portofolio'] ?>" width="65">
                                        <div class="d-flex" style="margin-left: 10px; flex-direction: column;">
                                            <p>Nama File Lama</p>
                                            <p id="portofolioLama"><?php echo $result['portofolio'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="fotokopiIjazah" class="text-secondary" style="margin-bottom: 10px;">Fotokopi Ijazah</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="fotokopiIjazah" class="form-control">
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img src="../Img/Fotokopi_Ijazah/<?php echo $result['fotokopi_ijazah'] ?>" width="65">
                                        <div class="d-flex" style="margin-left: 10px; flex-direction: column;">
                                            <p>Nama File Lama</p>
                                            <p id="fotokopiIjazahLama"><?php echo $result['fotokopi_ijazah'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="fotokopiKTP" class="text-secondary" style="margin-bottom: 10px;">Fotokopi KTP</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="fotokopiKTP" class="form-control">
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img src="../Img/Fotokopi_KTP/<?php echo $result['fotokopi_ktp'] ?>" width="65">
                                        <div class="d-flex" style="margin-left: 10px; flex-direction: column;">
                                            <p>Nama File Lama</p>
                                            <p id="fotokopiKtpLama"><?php echo $result['fotokopi_ktp'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="fotokopiKK" class="text-secondary" style="margin-bottom: 10px;">Fotokopi KK</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="fotokopiKK" class="form-control">
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img src="../Img/Fotokopi_KK/<?php echo $result['fotokopi_kk'] ?>" width="65">
                                        <div class="d-flex" style="margin-left: 10px; flex-direction: column;">
                                            <p>Nama File Lama</p>
                                            <p id="fotokopiKkLama"><?php echo $result['fotokopi_kk'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="pasFoto" class="text-secondary" style="margin-bottom: 10px;">Pas Foto</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="pasFoto" class="form-control">
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img src="../Img/Pas_Foto/<?php echo $result['pas_foto'] ?>" width="65">
                                        <div class="d-flex" style="margin-left: 10px; flex-direction: column;">
                                            <p>Nama File Lama</p>
                                            <p id="pasFotoLama"><?php echo $result['pas_foto'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="Sertifikat" class="text-secondary" style="margin-bottom: 10px;">Sertifikat</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="Sertifikat" class="form-control">
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img src="../Img/Sertifikat/<?php echo $result['sertifikat'] ?>" width="65">
                                        <div class="d-flex" style="margin-left: 10px; flex-direction: column;">
                                            <p>Nama File Lama</p>
                                            <p id="SertifikatLama"><?php echo $result['sertifikat'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="skck" class="text-secondary" style="margin-bottom: 10px;">SKCK</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="skck" class="form-control">
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img src="../Img/SKCK/<?php echo $result['skck'] ?>" width="65">
                                        <div class="d-flex" style="margin-left: 10px; flex-direction: column;">
                                            <p>Nama File Lama</p>
                                            <p id="skckLama"><?php echo $result['skck'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="fotokopiSuratPengalamanKerja" class="text-secondary" style="margin-bottom: 10px;">Fotokopi Surat Pengalaman Kerja</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="fotokopiSuratPengalamanKerja" class="form-control">
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img src="../Img/FSPK/<?php echo $result['fotokopi_surat_pengalaman_kerja'] ?>" width="65">
                                        <div class="d-flex" style="margin-left: 10px; flex-direction: column;">
                                            <p>Nama File Lama</p>
                                            <p id="fotokopiSuratPengalamanKerjaLama"><?php echo $result['fotokopi_surat_pengalaman_kerja'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="suratKeteranganSehat" class="text-secondary" style="margin-bottom: 10px;">Surat Keterangan Sehat</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="suratKeteranganSehat" class="form-control">
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img src="../Img/SKS/<?php echo $result['surat_keterangan_sehat'] ?>" width="65">
                                        <div class="d-flex" style="margin-left: 10px; flex-direction: column;">
                                            <p>Nama File Lama</p>
                                            <p id="suratKeteranganSehatLama"><?php echo $result['surat_keterangan_sehat'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="btnContent-profile d-flex mt-4">
                            <button type="submit" onclick="UbahDataKerja(<?php echo $result['id']; ?>)" class="btn btnUpdate-Profile mb-3">Tambah Data</button>
                            <button type="submit" onclick="BackToMain()" style="margin-left: 10px;" class="btn btnUpdate-Profile mb-3">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="../JS/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../JS/admin.js"></script>
</body>

</html>