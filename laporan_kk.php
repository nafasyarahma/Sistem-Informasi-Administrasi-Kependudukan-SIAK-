<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data KK</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body onload="print()">

        <br>
        <br>
        <center><h2>LAPORAN DATA KARTU KELUARGA</h2> </center>
        <br>
        <br>
        <br>
        
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No. KK</th>
                        <th>Kepala Keluarga</th>
                        <th>NIK</th>
                        <th>Alamat</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten</th>
                        <th>Provinsi</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php
                         include ('koneksi.php');
                         $ambildatakk = mysqli_query($koneksi,"select * from data_kk k, data_penduduk p where p.nik = k.nik");
                         while($data=mysqli_fetch_array($ambildatakk)){
                             $no_kk=$data['no_kk'];
                             $nama=$data['nama'];
                             $nik=$data['nik'];
                             $desa=$data['desa'];
                             $rt=$data['rt'];
                             $rw=$data['rw'];
                             $kec=$data['kec'];
                             $kab=$data['kab'];
                             $prov=$data['prov'];
                        ?>
                        <tr>
                            <td><?=$no_kk;?></td>
                            <td><?=$nama;?></td>
                            <td><?=$nik;?></td>
                            <td><?= $desa;?>, RT
                            <?=$rt;?>/ RW
                            <?=$rw;?></td>
                            <td><?=$kec;?></td>
                            <td><?=$kab;?></td>
                            <td><?=$prov;?></td>
                        </tr>
                        <?php
                        }; 
                        ?>
                    </tbody>
        </table>
</html>
