<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Table/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../CSS/Table/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../CSS/Table/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../CSS/admin.css">
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="HeaderCard d-flex justify-content-between">
                    <div class="LeftSide">
                        <h3 class="fw-bold">Total Lamaran</h3>
                    </div>
                    <div class="RightSide d-flex">
                        <button class="btn btn-danger" onclick="Logout()" style="margin-left: 15px;">Logout</button>
                    </div>
                </div>
                <div class="contentTable mt-5">
                    <table id="TableLowongan" border="0" class="table table-hover table-striped table-resposive mt-4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>TTL</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Umur</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="TbodyLowongan">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="HeaderCard d-flex justify-content-between">
                    <div class="LeftSide">
                        <h3 class="fw-bold">Total Data Diterima</h3>
                    </div>
                </div>
                <div class="contentTable mt-5">
                    <table id="TableLowongan2" border="0" class="table table-hover table-striped table-resposive mt-4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>TTL</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Umur</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="TbodyLowongan3">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="../JS/jquery.min.js"></script>

    <script src="../JS/Table/jquery.dataTables.min.js"></script>
    <script src="../JS/Table/dataTables.bootstrap4.min.js"></script>
    <script src="../JS/Table/dataTables.responsive.min.js"></script>
    <script src="../JS/Table/dataTables.buttons.min.js"></script>
    <script src="../JS/Table/responsive.bootstrap4.min.js"></script>
    <script src="../JS/Table/buttons.print.min.js"></script>
    <script src="../JS/Table/buttons.html5.min.js"></script>

    <script src="../JS/admin.js"></script>
</body>

</html>