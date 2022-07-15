<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Perpindahan</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body onload="print()">

        <br>
        <br>
        <center><h2>LAPORAN PERPINDAHAN</h2> </center>
        <br>
        <br>
        <br>
        
        <table class="table table-bordered">
        <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Penduduk Pindah</th>
                    <th>Tanggal Perpindahan</th>
                    <th>Domisili Tujuan</th>
                    <th>Alasan Pindah</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    include ('koneksi.php');
                    $ambildataperpindahan = mysqli_query($koneksi,"select * from data_perpindahan pi, data_penduduk pe where pe.nik=pi.nik");
                    while($data=mysqli_fetch_array($ambildataperpindahan)){
                        $tanggalCetak=$data['tanggalCetak'];
                        $nama=$data['nama'];
                        $tanggalPindah=$data['tanggalPindah'];
                        $domisiliTujuan=$data['domisiliTujuan'];
                        $alasanPindah=$data['alasanPindah'];
                    ?>
                    <tr>
                        <td><?=$tanggalCetak;?></td>
                        <td><?=$nama;?></td>
                        <td><?=$tanggalPindah;?></td>
                        <td><?=$domisiliTujuan;?></td>
                        <td><?=$alasanPindah;?></td>
                        
                    </tr>

                    </div>

                    <?php
                }; 
                ?>
            </tbody>
        </table>
</html>
