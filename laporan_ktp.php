<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Permohonan KTP</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body onload="print()">
    
        <br>
        <br>
        <center><h2>LAPORAN DATA PERMOHONAN KTP</h2> </center>
        <br>
        <br>
        <br>
        
        <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No. Permohonan</th>
                    <th>Tanggal Permohonan</th>
                    <th>NIK</th>
                    <th>Nama</th>
                </tr>
                </thead>
                <tbody>
        
                    <?php
                    include ('koneksi.php');
                    $ambildatapermohonanktp = mysqli_query($koneksi,"select * from data_permohonanktp k, data_penduduk p where p.nik = k.nik");
                    while($data=mysqli_fetch_array($ambildatapermohonanktp)){
                        $idPermohonan=$data['idPermohonan'];
                        $tanggalPermohonan=$data['tanggalPermohonan'];
                        $nik=$data['nik'];
                        $nama=$data['nama'];
                            
                    ?>
                    <tr>
                        <td><?=$idPermohonan;?></td>
                        <td><?=$tanggalPermohonan;?></td>
                        <td><?=$nik;?></td>
                        <td><?=$nama;?></td>
                    </tr>
                    <?php
                    }; 
                    ?>
                    </tbody>
        </table>
</html>