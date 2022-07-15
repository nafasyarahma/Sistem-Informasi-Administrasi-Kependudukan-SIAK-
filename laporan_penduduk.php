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
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body onload="print()">
    
        <br>
        <br>
        <center><h2>LAPORAN DATA PENDUDUK</h2> </center>
        <br>
        <br>
        <br>
        
        <table class="table table-bordered">
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
                        </tr>
                        <?php 
                        }; 
                        ?>
                    </tbody>
        </table>
</html>
