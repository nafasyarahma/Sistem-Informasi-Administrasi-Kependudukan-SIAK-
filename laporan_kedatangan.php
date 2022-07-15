<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Kedatangan</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body onload="print()">

        <br>
        <br>
        <center><h2>LAPORAN KEDATANGAN</h2> </center>
        <br>
        <br>
        <br>
        
        <table class="table table-bordered">
        <thead> 
            <tr>
                <th>Tanggal</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Kedatangan</th>
                <th>Domisili Asal</th>
                <th>Alasan Datang</th>
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
                </tr>
                <?php
                }; 
                ?>
            </tbody>
    </table>
</html>
