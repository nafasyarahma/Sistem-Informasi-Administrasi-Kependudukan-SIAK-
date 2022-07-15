<?php

include('koneksi.php');

$sql = $koneksi->query("SELECT COUNT(nik) as jml_penduduk  from data_penduduk");
while ($data= $sql->fetch_assoc()) {
    $jml_penduduk=$data['jml_penduduk'];
}

$sql = $koneksi->query("SELECT COUNT(no_kk) as jml_kk  from data_kk");
while ($data= $sql->fetch_assoc()) {
    $jml_kk=$data['jml_kk'];
}

$sql = $koneksi->query("SELECT COUNT(idPermohonan) as jml_ktp  from data_permohonanktp");
while ($data= $sql->fetch_assoc()) {
    $jml_ktp=$data['jml_ktp'];
}

$sql = $koneksi->query("SELECT COUNT(idKelahiran) as jml_kelahiran  from data_kelahiran");
while ($data= $sql->fetch_assoc()) {
    $jml_kelahiran=$data['jml_kelahiran'];
}

$sql = $koneksi->query("SELECT COUNT(idKematian) as jml_kematian  from data_kematian");
while ($data= $sql->fetch_assoc()) {
    $jml_kematian=$data['jml_kematian'];
}

$sql = $koneksi->query("SELECT COUNT(idKedatangan) as jml_kedatangan  from data_kedatangan");
while ($data= $sql->fetch_assoc()) {
    $jml_kedatangan=$data['jml_kedatangan'];
}

$sql = $koneksi->query("SELECT COUNT(idPerpindahan) as jml_perpindahan  from data_perpindahan");
while ($data= $sql->fetch_assoc()) {
    $jml_perpindahan=$data['jml_perpindahan'];
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="dashboard.css" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">SIAK</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                         <!-- Card-->
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa-solid fa-users"></i>
                                        </div>
                                        <h6 class=card-tittle>Jumlah Penduduk</h6>
                                        <div class="display-4"><?php echo $jml_penduduk;?></div>
                                    </div>
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="penduduk.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>                              
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa-solid fa-book-open"></i>
                                        </div>
                                        <h6 class=card-tittle>Jumlah Kartu Keluarga</h6>
                                        <div class="display-4"><?php echo $jml_kk;?></div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="kk.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa-solid fa-address-card"></i>
                                        </div>
                                        <h6 class=card-tittle>Jumlah Permohonan KTP</h6>
                                        <div class="display-4"><?php echo $jml_ktp;?></div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="ktp.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">                                 
                                        <div class="card-body-icon">
                                            <i class="fa-solid fa-baby"></i>
                                        </div>
                                        <h6 class=card-tittle>Jumlah Kelahiran</h6>
                                        <div class="display-4"><?php echo $jml_kelahiran;?></div>                                  
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="kelahiran.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa-solid fa-person-circle-xmark"></i>
                                        </div>
                                        <h6 class=card-tittle>Jumlah Kematian</h6>
                                        <div class="display-4"><?php echo $jml_kematian;?></div> 
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa-solid fa-box-open"></i>
                                        </div>
                                        <h6 class=card-tittle>Jumlah Kedatangan</h6>
                                        <div class="display-4"><?php echo $jml_kedatangan;?></div> 
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa-solid fa-route"></i>
                                        </div>
                                        <h6 class=card-tittle>Jumlah Perpindahan</h6>
                                        <div class="display-4"><?php echo $jml_perpindahan;?></div>  
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
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
</html>
