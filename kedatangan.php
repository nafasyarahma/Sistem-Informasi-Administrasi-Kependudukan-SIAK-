<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Surat Keterangan Kedatangan</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">SIAK</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

            </form>
        </nav>

         <!-- Side Nav-->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <!-- MENU-->
                            <div class="sb-sidenav-menu-heading">Menu</div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsData" aria-expanded="false" aria-controls="collapseLayoutsData">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-database"></i></div>
                                Kelola Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsData" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="penduduk.php">Penduduk</a>
                                    <a class="nav-link" href="kk.php">Kartu Keluarga</a>
                                    <a class="nav-link" href="ktp.php">Permohonan KTP</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsSK" aria-expanded="false" aria-controls="collapseLayoutsSK">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-file-lines"></i></div>
                                Cetak Surat Keterangan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsSK" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="kelahiran.php">Kelahiran</a>
                                    <a class="nav-link" href="kematian.php">Kematian</a>
                                    <a class="nav-link" href="kedatangan.php">Kedatangan</a>
                                    <a class="nav-link" href="perpindahan.php">Perpindahan</a>
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsLaporan" aria-expanded="false" aria-controls="collapseLayoutsLaporan">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-print"></i></div>
                                Cetak Laporan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsLaporan" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="laporan_penduduk.php">Penduduk</a>
                                    <a class="nav-link" href="laporan_kk.php">Kartu Keluarga</a>
                                    <a class="nav-link" href="laporan_ktp.php">Permohonan KTP</a>
                                    <a class="nav-link" href="laporan_kelahiran.php">Kelahiran</a>
                                    <a class="nav-link" href="laporan_kematian.php">Kematian</a>
                                    <a class="nav-link" href="laporan_kedatangan.php">Kedatangan</a>
                                    <a class="nav-link" href="laporan_perpindahan.php">Perpindahan</a>
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                    <!-- End Sidenav-->               
                </nav>
                
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Surat Keterangan Kedatangan</h1>
                        <div class="card mb-4">
                            <div class="card-header">                              
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Tambah SK
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tanggal Kedatangan</th>
                                                <th>Domisili Asal</th>
                                                <th>Alasan Datang</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                            include ('koneksi.php');
                                            $ambildatakedatangan = mysqli_query($koneksi,"select * from data_kedatangan");
                                            while($data=mysqli_fetch_array($ambildatakedatangan)){
                                                $idKedatangan=$data['idKedatangan'];
                                                $tanggalcetak=$data['tanggalCetak'];
                                                $nik=$data['nik'];
                                                $nama=$data['nama'];
                                                $jenisKelamin=$data['jenisKelamin'];
                                                $tanggalDatang=$data['tanggalDatang'];
                                                $domisiliAsal=$data['domisiliAsal'];
                                                $alasan=$data['alasan']; 
                                            ?>
                                            <tr>
                                                <td><?=$tanggalcetak;?></td>
                                                <td><?=$nik;?></td>
                                                <td><?=$nama;?></td>
                                                <td><?=$jenisKelamin;?></td>
                                                <td><?=$tanggalDatang;?></td>
                                                <td><?=$domisiliAsal;?></td>
                                                <td><?=$alasan;?></td>
                                                <td>       
                                                    <form action="sk_datang.php">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                    Cetak 
                                                    </button>
                                                    </form>
                                                </td>
                                            </tr>

                                            </div>

                                            <?php
                                            }; 
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Surat Keterangan</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form action="function_datang.php" method="POST">
                <div class="modal-body">
                    <label for="tanggalCetak"><b>Tanggal</b></label><br>
                    <input type="date" name="tanggalCetak" class="form-control">
                    <br>
                    <label for="nik"><b>NIK</b></label><br>
                    <input type="text" name="nik" placeholder="Masukkan NIK" class="form-control">
                    <br>
                    <label for="nama"><b>Nama</b></label><br>
                    <input type="nama" name="nama" placeholder="Masukkan Nama" class="form-control">
                    <br>
                    <label for="jenisKelamin"><b>Jenis Kelamin</b></label><br>
                    <input type="radio" name="jenisKelamin" value="Laki-Laki" > Laki-Laki
                    <input type="radio" name="jenisKelamin" value="Perempuan" > Perempuan
                    <br><br>
                    <label for="tanggalDatang"><b>Tanggal Kedatangan</b></label><br>
                    <input type="date" name="tanggalDatang" class="form-control">
                    <br>
                    <label for="domisiliAsal"><b>Domisili Asal</b></label><br>
                    <input type="text" name="domisiliAsal" placeholder="Masukkan domisili asal" class="form-control">
                    <br>
                    <label for="alasan"><b>Alasan Datang</b></label><br>
                    <input type="text" name="alasan" placeholder="Masukkan alasan datang" class="form-control">
                    
                    <br><br>
                    <button type="submit" class="btn btn-primary" name="add_sk_datang"> Submit </button>
                </div>
            </form>
            </div>
        </div>
    </div>

</html>
