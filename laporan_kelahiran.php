<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Kelahiran</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body onload="print()">
    
        <br>
        <br>
        <center><h2>LAPORAN KELAHIRAN</h2> </center>
        <br>
        <br>
        <br>
        
        <table class="table table-bordered">
        <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>                          
                </tr>
            </thead>
                <tbody>
        
                <?php
                include ('koneksi.php');
                $ambildatakelahiran = mysqli_query($koneksi,"select * from data_kelahiran");
                while($data=mysqli_fetch_array($ambildatakelahiran)){
                    $idKelahiran=$data['idKelahiran'];
                    $nama=$data['nama'];
                    $jenisKelamin=$data['jenisKelamin'];
                    $tempatLahir=$data['tempatLahir'];
                    $tanggalLahir=$data['tanggalLahir'];                                   
                    $tanggal_cetak=$data['tanggal_cetak'];
                ?>
                    <tr>
                        <td><?=$tanggal_cetak;?></td>
                        <td><?=$nama;?></td>
                        <td><?=$jenisKelamin;?></td>
                        <td><?=$tempatLahir;?></td>
                        <td><?=$tanggalLahir;?></td>
                    </tr>
                <?php
                }; 
                ?>
            </tbody>
        </table>
</html>