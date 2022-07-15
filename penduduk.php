<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Penduduk</title>
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
                        <h1 class="mt-4">Data Penduduk</h1>
                        <div class="card mb-4">
                            <div class="card-header">                              
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Tambah Data
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>Agama</th>
                                                <th>Gol. Darah</th>
                                                <th>Pendidikan</th>
                                                <th>Kewarganegaraan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                            include ('koneksi.php');
                                            $ambildatapenduduk = mysqli_query($koneksi,"select * from data_penduduk");
                                            while($data=mysqli_fetch_array($ambildatapenduduk)){
                                                $nik=$data['nik'];
                                                $nama=$data['nama'];
                                                $tempatLahir=$data['tempatLahir'];
                                                $tanggalLahir=$data['tanggalLahir'];
                                                $jenisKelamin=$data['jenisKelamin'];
                                                $alamat=$data['alamat'];
                                                $agama=$data['agama'];
                                                $golDarah=$data['golDarah'];
                                                $pendidikan=$data['pendidikan'];
                                                $kewarganegaraan=$data['kewarganegaraan'];  
                                            ?>
                                            <tr>
                                                <td><?=$nik;?></td>
                                                <td><?=$nama;?></td>
                                                <td><?=$tempatLahir;?></td>
                                                <td><?=$tanggalLahir;?></td>
                                                <td><?=$jenisKelamin;?></td>
                                                <td><?=$alamat;?></td>
                                                <td><?=$agama;?></td>
                                                <td><?=$golDarah;?></td>
                                                <td><?=$pendidikan;?></td>
                                                <td><?=$kewarganegaraan;?></td>
                                                <td>                                                   
                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?=$nik;?>">
                                                    Edit 
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?=$nik;?>">
                                                    Delete
                                                    </button>                                                   
                                                </td>
                                            </tr>

                                            <!-- Edit Modal -->
                                            <div class="modal" id="edit<?=$nik;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit data penduduk</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <form action="function.php" method="POST">
                                                        <div class="modal-body">

                                                            <label for="nik"><b>NIK</b></label><br>
                                                            <input type="text" name="nik" value="<?=$nik;?>" class="form-control" required>
                                                            <br>
                                                            <label for="nama"><b>Nama</b></label><br>
                                                            <input type="text" name="nama" value="<?=$nama;?>" class="form-control" required>
                                                            <br>
                                                            <label for="tempatLahir"><b>Tempat Lahir</b></label><br>
                                                            <input type="text" name="tempatLahir" value="<?=$tempatLahir;?>" class="form-control" required>
                                                            <br>
                                                            <label for="tanggalLahir"><b>Tanggal Lahir</b></label><br>
                                                            <input type="date" name="tanggalLahir" value="<?=$tanggalLahir;?>"class="form-control" required>
                                                            <br>
                                                            <label for="jenisKelamin"><b>Jenis Kelamin</b></label><br>
                                                            <input type="radio" name="jenisKelamin" value="Laki-Laki" > Laki-Laki <br>
                                                            <input type="radio" name="jenisKelamin" value="Perempuan" > Perempuan
                                                            <br><br>
                                                            <label for="alamat"><b>Alamat</b></label><br>
                                                            <input type="text" name="alamat" value="<?=$alamat;?>" class="form-control" required>
                                                            <br>
                                                            <label for="agama"><b>Agama</b></label><br> 
                                                            <select name="agama" class="form-control">
                                                                <option selected="selected"><?=$agama;?></option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option>
                                                                <option value="Katolik">Katolik</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Buddha">Buddha</option>
                                                                <option value="Konghucu">Konghucu</option>
                                                            </select>
                                                            <br>
                                                            <label for="golDarah"><b>Golongan Darah</b></label><br> 
                                                            <select name="golDarah" class="form-control">
                                                                <option selected="selected"><?=$golDarah;?></option>
                                                                <option value="A">A</option>
                                                                <option value="B">B</option>
                                                                <option value="AB">AB</option>
                                                                <option value="O">O</option>
                                                            </select>
                                                            <br>
                                                            <label for="pendidikan"><b>Pendidikan</b></label><br>
                                                            <select name="pendidikan" class="form-control">
                                                                <option selected="selected"><?=$pendidikan;?></option>
                                                                <option value="SD">SD</option>
                                                                <option value="SMP">SMP</option>
                                                                <option value="SMA">SMA</option>
                                                                <option value="D1">D1</option>
                                                                <option value="D2">D2</option>
                                                                <option value="D3">D3</option>
                                                                <option value="S1">S1</option>
                                                                <option value="S2">S2</option>
                                                                <option value="S3">S3</option>
                                                                <option value="Tidak Ada">Tidak Ada</option>
                                                            </select>
                                                            <br>
                                                            <label for="kewarganegaraan"><b>Kewarganegaraan</b></label><br> 
                                                            <select name="kewarganegaraan" class="form-control">
                                                                <option selected="selected"><?=$kewarganegaraan;?></option>
                                                                <option value="WNI">WNI</option>
                                                                <option value="WNA">WNA</option>
                                                            </select>
                                                            <br><br>
                                                            <button type="submit" class="btn btn-primary" name="updatedatapenduduk"> Submit </button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>

                                                <!-- Delete Modal -->
                                                <div class="modal" id="delete<?=$nik;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus data penduduk</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <form action="function.php" method="POST">
                                                        <div class="modal-body">
                                                            Apakah Anda Yakin ingin Menghapus Data Penduduk Ini?
                                                            <input type ="hidden" name="nik" value="<?=$nik;?>">
                                                            <br><br>
                                                            <button type="submit" class="btn btn-danger" name="deletedatapenduduk"> Hapus </button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
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
                <h4 class="modal-title">Tambah Data Penduduk</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form action="function.php" method="POST">
                <div class="modal-body">
                    <label for="nik"><b>NIK</b></label><br>
                    <input type="text" name="nik" placeholder="Masukkan NIK" class="form-control">
                    <br>
                    <label for="nama"><b>Nama</b></label><br>
                    <input type="text" name="nama" placeholder="Masukkan nama" class="form-control">
                    <br>
                    <label for="tempatLahir"><b>Tempat Lahir</b></label><br>
                    <input type="text" name="tempatLahir" placeholder="Masukkan tempat lahir" class="form-control">
                    <br>
                    <label for="tanggalLahir"><b>Tanggal Lahir</b></label><br>
                    <input type="date" name="tanggalLahir" class="form-control">
                    <br>
                    <label for="jenisKelamin"><b>Jenis Kelamin</b></label><br> 
                    <input type="radio" name="jenisKelamin" value="Laki-Laki" > Laki-Laki <br>
                    <input type="radio" name="jenisKelamin" value="Perempuan" > Perempuan
                    <br><br>
                    <label for="alamat"><b>Alamat</b></label><br> 
                    <input type="text" name="alamat" placeholder="Masukkan alamat" class="form-control">
                    <br>
                    <label for="agama"><b>Agama</b></label><br> 
                    <select name="agama" class="form-control">
                        <option selected="selected">- Pilih Agama -</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                    <br>
                    <label for="golDarah"><b>Golongan Darah</b></label><br> 
                    <select name="golDarah" class="form-control">
                        <option selected="selected">- Pilih Golongan Darah -</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                    <br>
                    <label for="pendidikan"><b>Pendidikan</b></label><br> 
                    <select name="pendidikan" class="form-control">
                        <option selected="selected">- Pilih Pendidikan -</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                    </select>
                    <br>
                    <label for="kewarganegaraan"><b>Kewarganegaraan</b></label><br> 
                    <select name="kewarganegaraan" class="form-control">
                        <option selected="selected">- Pilih Kewarganegaraan -</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                        </select>
                    <br><br>
                    <button type="submit" class="btn btn-primary" name="addPenduduk"> Submit </button>
                </div>
            </form>
            </div>
        </div>
    </div>
</html>
