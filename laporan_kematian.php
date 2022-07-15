<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Kematian</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body onload="print()">

        <br>
        <br>
        <center><h2>LAPORAN KEMATIAN</h2> </center>
        <br>
        <br>
        <br>
        
        <table class="table table-bordered"> 
        <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Penduduk Meninggal</th>
                    <th>Tanggal Kematian</th>
                    <th>Tempat Kematian</th>
                    <th>Tempat Pemakaman</th>  
                </tr>
            </thead>
            <tbody>
                
                <?php
                include ('koneksi.php');
                $hasil=mysqli_query($koneksi,"select * from data_kematian k, data_penduduk p where p.nik = k.nik");
                while($data= mysqli_fetch_array($hasil)){
                    $tanggalCetak=$data['tanggalCetak'];
                    $nama=$data['nama'];
                    $tanggalKematian=$data['tanggalKematian'];
                    $tempatKematian=$data['tempatKematian'];
                    $tempatPemakaman=$data['tempatPemakaman'];                                            
                ?>
                <tr>
                    <td><?=$tanggalCetak;?></td>
                    <td><?=$nama;?></td>
                    <td><?=$tanggalKematian;?></td>
                    <td><?=$tempatKematian;?></td>
                    <td><?=$tempatPemakaman;?></td>            
                </tr>

                

                <?php
                }; 
                ?>
            </tbody>
        </table>
</html>
