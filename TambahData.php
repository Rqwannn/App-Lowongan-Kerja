<?php

session_start();

if (isset($_SESSION['submit'])) {
    header('Location: Admin/index.php');
    exit;
}

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
    <link rel="stylesheet" href="CSS/jquery-ui.css">
    <link rel="stylesheet" href="CSS/admin.css">
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="headerEmploye">
                    <h5>Tambah Data Pekerja</h5>
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
                                    <input type="text" name="nama" id="nama" class="form-control mt-2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="ttl" class="text-secondary">TTL</label>
                                    <input type="text" name="ttl" id="ttl" class="form-control mt-2">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="email" class="text-secondary">Email</label>
                                    <input type="email" name="email" id="email" class="form-control mt-2">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="umur" class="text-secondary">Umur</label>
                                    <input type="text" name="umur" id="umur" class="form-control mt-2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="pengalamanKerja" class="text-secondary">Pengalaman Kerja</label>
                                    <input type="text" name="pengalamanKerja" id="pengalamanKerja" class="form-control mt-2">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="umur" class="text-secondary">Agama</label>
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
                                    <textarea type="text" name="alamat" id="alamat" class="form-control mt-2"></textarea>
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
                                        <input type="file" id="suratLamaran" accept="image/*" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="cv" class="text-secondary" style="margin-bottom: 10px;">CV</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="cv" accept="image/*" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="portofolio" class="text-secondary" style="margin-bottom: 10px;">Portofolio</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="portofolio" accept="image/*" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="fotokopiIjazah" class="text-secondary" style="margin-bottom: 10px;">Fotokopi Ijazah</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="fotokopiIjazah" accept="image/*" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="fotokopiKTP" class="text-secondary" style="margin-bottom: 10px;">Fotokopi KTP</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="fotokopiKTP" accept="image/*" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="fotokopiKK" class="text-secondary" style="margin-bottom: 10px;">Fotokopi KK</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="fotokopiKK" accept="image/*" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="pasFoto" class="text-secondary" style="margin-bottom: 10px;">Pas Foto</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="pasFoto" accept="image/*" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="Sertifikat" class="text-secondary" style="margin-bottom: 10px;">Sertifikat</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="Sertifikat" accept="image/*" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="skck" class="text-secondary" style="margin-bottom: 10px;">SKCK</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="skck" accept="image/*" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="fotokopiSuratPengalamanKerja" class="text-secondary" style="margin-bottom: 10px;">Fotokopi Surat Pengalaman Kerja</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="fotokopiSuratPengalamanKerja" accept="image/*" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputAdmin d-flex flex-column">
                                    <label for="suratKeteranganSehat" class="text-secondary" style="margin-bottom: 10px;">Surat Keterangan Sehat</label>
                                    <div class="input-group mb-3">
                                        <input type="file" id="suratKeteranganSehat" accept="image/*" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="btnContent-profile d-flex mt-4">
                            <button type="submit" onclick="TambahDataKerja()" class="btn btnUpdate-Profile mb-3">Tambah Data</button>
                            <button type="submit" onclick="BackToMain()" style="margin-left: 10px;" class="btn btnUpdate-Profile mb-3">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="JS/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="JS/admin.js"></script>
</body>

</html>