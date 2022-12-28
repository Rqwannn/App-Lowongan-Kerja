function Logout() {
  document.location.href = "../Auth/logout.php";
}

function TambahData() {
  document.location.href = "TambahData.php";
}

const contentTable = document.querySelector(".contentTable");

if (contentTable != null) {
  $.ajax({
    url: "http://localhost/AppLowonganKerja/App/Api/getLowongan.php",
    type: "GET",
    dataType: "JSON",
    success: (result) => {
      const TbodyLowongan = document.getElementById("TbodyLowongan");
      const TbodyLowongan2 = document.getElementById("TbodyLowongan2");
      const TbodyLowongan3 = document.getElementById("TbodyLowongan3");

      let card = "";
      let card2 = "";

      let Number = 1;
      let Number2 = 1;

      if (TbodyLowongan != null) {
        result.forEach((item) => {
          if (item.status != 1 && item.status != 2) {
            card += `<tr>
                      <td>${Number}</td>
                      <td>${item.nama}</td>
                      <td>${item.ttl}</td>
                      <td>${item.alamat}</td>
                      <td>
                          ${item.email}
                      </td>
                      <td>
                          ${item.umur}
                      </td>
                      <td style="color:blue;">
                          Menunggu
                      </td>
  
                      <td class="d-flex" style="flex-direction: column;">
                          <button class="btn btn-success" onclick="TerimaData(${item.id})">Terima</button>
                          <button class="btn btn-danger" onclick="TolakData(${item.id})" style="margin-top: 5px;">Tolak</button>
                          <button class="btn btn-primary" onclick="DetailData(${item.id})" style="margin-top: 5px;">Detail</button>
                      </td>
                  </tr>`;
            Number++;
          }
        });

        TbodyLowongan.innerHTML = card;
      } else if (TbodyLowongan2 != null) {
        result.forEach((item) => {
          let cekStatus = "Menunggu";
          let getColor = "blue";
          if (item.status == 1) {
            cekStatus = "Diterima";
            getColor = "green";
          } else if (item.status == 2) {
            cekStatus = "Ditolak";
            getColor = "red";
          }

          card += `<tr>
                    <td>${Number}</td>
                    <td>${item.nama}</td>
                    <td>${item.ttl}</td>
                    <td>${item.alamat}</td>
                    <td>
                        ${item.email}
                    </td>
                    <td> 
                        ${item.agama}
                    </td>
                    <td>
                        ${item.umur}
                    </td>
                    <td>
                      ${cekStatus == 'Diterima' ? 'tempatmagangdepok@gmail.com' : 'Harap Nunggu' }
                    </td>
                    <td style="color:${getColor};">
                        ${cekStatus}
                    </td>
                </tr>`;
          Number++;
        });
        TbodyLowongan2.innerHTML = card;
      }
      if (TbodyLowongan3 != null) {
        result.forEach((item) => {
          if (item.status == 1 || item.status == 2) {
            let cekStatus = "Diterima";
            let getColor = "green";

            if (item.status == 2) {
              cekStatus = "Ditolak";
              getColor = "red";
            }

            card2 += `<tr>
                      <td>${Number}</td>
                      <td>${item.nama}</td>
                      <td>${item.ttl}</td>
                      <td>${item.alamat}</td>
                      <td>
                          ${item.email}
                      </td>
                      <td> 
                          ${item.umur}
                      </td>
                      <td style="color:${getColor};">
                          ${cekStatus}
                      </td>
                      <td>
                          <button class="btn btn-primary" onclick="DetailData(${item.id})">Detail</button>
                      </td>
                  </tr>`;
            Number2++;
          }
        });
        TbodyLowongan3.innerHTML = card2;
      }

      $(document).ready(function () {
        $("#TableLowongan").DataTable({
          paging: true,
          lengthChange: false,
          searching: true,
          ordering: true,
          info: true,
          autoWidth: true,
          responsive: false,
          language: {
            search: "",
          },
          dom: "Bfrtip",
          buttons: ["pdf", "excel"],
        });
        $("#TableLowongan2").DataTable({
          paging: true,
          lengthChange: false,
          searching: true,
          ordering: true,
          info: true,
          autoWidth: true,
          responsive: false,
          language: {
            search: "",
          },
          dom: "Bfrtip",
          buttons: ["pdf", "excel"],
        });
      });
    },
    error: (e) => {
      console.log(e);
    },
  });
}

$(function () {
  $("#ttl").datepicker({
    maxDate: new Date(),
    dateFormat: "yy-mm-dd",
  });
});

function BackToMain() {
  document.location.href = "index.php";
}

const nama = document.getElementById("nama");
const ttl = document.getElementById("ttl");
const email = document.getElementById("email");
const umur = document.getElementById("umur");
const pengalamanKerja = document.getElementById("pengalamanKerja");
const agama = document.getElementById("agama");
const alamat = document.getElementById("alamat");
const jk = document.getElementById("jk");

function TambahDataKerja() {
  const suratLamaran = document.getElementById("suratLamaran").files[0];
  const cv = document.getElementById("cv").files[0];
  const portofolio = document.getElementById("portofolio").files[0];
  const fotokopiIjazah = document.getElementById("fotokopiIjazah").files[0];
  const fotokopiKTP = document.getElementById("fotokopiKTP").files[0];
  const fotokopiKK = document.getElementById("fotokopiKK").files[0];
  const pasFoto = document.getElementById("pasFoto").files[0];
  const Sertifikat = document.getElementById("Sertifikat").files[0];
  const skck = document.getElementById("skck").files[0];
  const fotokopiSuratPengalamanKerja = document.getElementById(
    "fotokopiSuratPengalamanKerja"
  ).files[0];
  const suratKeteranganSehat = document.getElementById("suratKeteranganSehat")
    .files[0];

  let BaseData = new FormData();

  if (
    nama.value.length == 0 ||
    ttl.value.length == 0 ||
    email.value.length == 0 ||
    umur.value.length == 0 ||
    pengalamanKerja.value.length == 0 ||
    agama.value.length == 0 ||
    alamat.value.length == 0 ||
    jk.value.length == 0 ||
    !suratLamaran ||
    !cv ||
    !portofolio ||
    !fotokopiIjazah ||
    !fotokopiKTP ||
    !fotokopiKK ||
    !pasFoto ||
    !Sertifikat ||
    !skck ||
    !fotokopiSuratPengalamanKerja ||
    !suratKeteranganSehat
  ) {
    alert("Tidak Ada Boleh Field Yang Kosong");
  } else {
    BaseData.append("Nama", nama.value);
    BaseData.append("TTL", ttl.value);
    BaseData.append("Email", email.value);
    BaseData.append("Umur", umur.value);
    BaseData.append("pengalamanKerja", pengalamanKerja.value);
    BaseData.append("Agama", agama.value);
    BaseData.append("Alamat", alamat.value);
    BaseData.append("JK", jk.value);

    BaseData.append("suratLamaran", suratLamaran);
    BaseData.append("CV", cv);
    BaseData.append("Portofolio", portofolio);
    BaseData.append("FotokopiIjazah", fotokopiIjazah);
    BaseData.append("FotokopiKTP", fotokopiKTP);
    BaseData.append("FotokopiKK", fotokopiKK);
    BaseData.append("pasFoto", pasFoto);
    BaseData.append("Sertifikat", Sertifikat);
    BaseData.append("SKCK", skck);
    BaseData.append("FSPK", fotokopiSuratPengalamanKerja);
    BaseData.append("SKS", suratKeteranganSehat);

    $.ajax({
      url: "http://localhost/AppLowonganKerja/App/Api/TambahData.php",
      type: "POST",
      dataType: "JSON",
      cache: false,
      contentType: false,
      processData: false,
      data: BaseData,
      success: (result) => {
        if (result == "Data Berhasil Ditambahkan") {
          alert(`${result}`);
          document.location.href = "index.php";
        } else {
          alert(`${result}`);
        }
      },
      error: (e) => {
        console.log(e);
      },
    });
  }
}

function DetailData(data) {
  document.location.href = `DetailData.php?ID=${data}`;
}

const agamaHidden = document.querySelector(".agamaHidden");
const jkHidden = document.querySelector(".jkHidden");

const Agama = document.querySelector("#agama");
const JK = document.querySelector("#jk");

if (agamaHidden != null && jkHidden != null) {
  Agama.value = agamaHidden.value;
  JK.value = jkHidden.value;
}

function TerimaData(data) {
  $.ajax({
    url: "http://localhost/AppLowonganKerja/App/Api/TerimaData.php",
    type: "POST",
    dataType: "JSON",
    data: {
      id: data,
    },
    success: function (result) {
      alert(`${result}`);
      window.location.reload();
    },
    error: function (e) {
      console.log(e);
    },
  });
}

function TolakData(data) {
  $.ajax({
    url: "http://localhost/AppLowonganKerja/App/Api/TolakData.php",
    type: "POST",
    dataType: "JSON",
    data: {
      id: data,
    },
    success: function (result) {
      alert(`${result}`);
      window.location.reload();
    },
    error: function (e) {
      console.log(e);
    },
  });
}

function ClickIMG(data) {
  const GambarTujuan = document.querySelector(".GambarTujuan");
  const detailGambar = document.querySelector(".detailGambar");

  if (
    data.target.classList == "detailGambar" ||
    data.target.classList == "GambarTujuan"
  ) {
    detailGambar.style.transform = "scale(0)";
    setTimeout(() => {
      detailGambar.style.display = "none";
    }, 700);
  } else {
    GambarTujuan.src = data.target.src;
    detailGambar.style.display = "block";
    setTimeout(() => {
      detailGambar.style.transform = "scale(1)";
    }, 100);
  }
}
