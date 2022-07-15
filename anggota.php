<?php
if(isset($_GET['no_kk'])){
    $nomor_kk=$_GET['no_kk'];
}else{
    die("no id selected");
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
        <title>Anggota KK</title>
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

                            <!-- Menu-->
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
                        <h1 class="mt-4">Anggota Keluarga</h1>
                        <div class="card mb-4">
                            <div class="card-header">                              
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Tambah Anggota
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <!-- <th>No KK</th> -->
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Hubungan Keluarga</th>
                                                <th>Aksi</th>
                                            </tr>
				                        </thead>
                                        <tbody>
                                
                                            <?php
                                            // include ('koneksi.php');

                                                
                                            //     $sql = $koneksi->query("SELECT p.nik, p.nama, a.hubungan, a.no_kk 
			                                //     from data_penduduk p inner join data_anggota a on p.nik=a.nik where no_kk=$karkel");
                                            //     while ($data= $sql->fetch_assoc()) {
                                            

                                            // $kk=$_GET['no_kk'];
                                            // $ambildataanggota = mysqli_query($koneksi,"select * from data_anggotakk a, data_penduduk p where p.nik=a.nik where no_kk=$kk");
                                            // // // $ambildataanggota = mysqli_query($koneksi,"SELECT * FROM data_anggotakk a INNER JOIN data_kk k ON a.no_kk = k.no_kk INNER JOIN data_penduduk p ON a.nik = p.nik");
                                            // while($data=mysqli_fetch_array($ambildataanggota)){
                                            //     $nik=$data['nik'];
                                            //     $nama=$data['nama'];
                                            //     $hubungan=$data['hubungan'];

                                            // include('koneksi.php');
                                            // $query = mysqli_query($koneksi, "select * from data_anggotakk k, data_penduduk p where p.nik = k.nik and no_kk='$nomor_kk'");
                                            // while($data=mysqli_fetch_array($query)){
                                            //     $no_kk=$data['no_kk'];
                                            //     $nik=$data['nik'];
                                            //     $nama=$data['nama'];
                                            //     $hubungan=$data['hubungan'];
                                            // ?> 
                                            <tr>
                                                <td> - </td>
                                                <td> - </td>
                                                <td> - </td>
                                                <td> - </td>
                                            <!-- <td>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?=$no_kk;?>">
                                                Edit
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?=$no_kk;?>">
                                                Delete
                                                </button>
                                                
                                            </td>  -->
                                        </tr>

                                        
                                            
                                            <div class="modal" id="delete<?=$idAnggota;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus Data Kartu Keluarga</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <form action="functionkk.php" method="POST">
                                                        <div class="modal-body">
                                                            Apakah Anda Yakin ingin Menghapus Data Kartu Keluarga Ini?
                                                            <input type ="hidden" name="no_kk" value="<?=$no_kk;?>">
                                                            <br><br>
                                                            <button type="submit" class="btn btn-danger" name="deletedatakk"> Hapus </button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                            // }; 
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
                <h4 class="modal-title">Tambah Data Anggota</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form action="function_anggota.php" method="POST">
                <div class="modal-body">
                    <label for="no_kknya"><b>Nomor KK</b></label><br>
                    <input type='text' name="no_kk" value="<?=$nomor_kk;?>" class="form-control">
                    <label for="orangnya"><b>Anggota</b></label><br>
                    <select name="orangnya" class="form-control select2bs4" required>
                    <option selected="selected">- Pilih Anggota -</option>
                    <?php
                        // ambil data dari database
                        include ('koneksi.php');
                        $query = "select * from data_penduduk";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                            $namanya = $row['nama'];
                            $niknya = $row['nik'];                           
                        ?>
                            <option value="<?=$niknya;?>">
                                <?=$niknya;?>
                                -
                                <?=$namanya?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                    <label for="hubungan"><b>Hubungan</b></label><br>
                    <input type='text' class="form-control" name="hubungan">
                    <br><br>
                    <button type="submit" class="btn btn-primary" name="addPermohonanKTP"> Submit </button>
                </div>
            </form>
            </div>
        </div>
    </div>
</html>
