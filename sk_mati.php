<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Surat Keterangan Kematian</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body onload="print()">
    
        <br>
        <br>
        <center>
        <h2>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</h2>
		<h3>KABUPATEN ..........</h3>
			
		<p>________________________________________________________________________</p>

		<?php
            include ('koneksi.php');
            $hasil=mysqli_query($koneksi,"select * from data_kematian k, data_penduduk p where p.nik = k.nik");
            while($data= mysqli_fetch_array($hasil)){
                $idKematian=$data['idKematian'];
                $tanggal_cetak=$data['tanggalCetak'];
                $nik=$data['nik'];
                $nama=$data['nama'];
                $tanggalKematian=$data['tanggalKematian'];
                $tempatKematian=$data['tempatKematian'];
                $tempatPemakaman=$data['tempatPemakaman'];                                            
            ?>


        </center>
        
        <center>
		<h4>
			<u>SURAT KETARANGAN KEMATIAN</u>
		</h4>
		<h4>No Surat :
            <?php echo $idKematian; ?>/Ket.Kematian/
			<?php echo $tanggal_cetak; ?>
		</h4>
	    </center>
        
        <br>
        <br>
        <p>Yang bertandatangan dibawah ini  Kepala Dinas Kependudukan dan Pencatatan Sipil Kabupaten ..............., dengan ini menerangkan
            bahwa :</P>
        <table>
            <tbody>
            <tr>
				    <td>NIK</td>
				    <td>:</td>
                    <td>
                        <?php echo $nik; ?>
                    </td>
			    </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <?php echo $nama; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Kematian</td>
                    <td>:</td>
                    <td>
                        <?php echo $tanggalKematian; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Kematian</td>
                    <td>:</td>
                    <td>
                        <?php echo $tempatKematian; ?>                      
                    </td>
                </tr>
                <tr>
                    <td>Tempat Pemakaman</td>
                    <td>:</td>
                    <td>
                        <?php echo $tempatPemakaman; ?>                      
                    </td>
                </tr>
                <?php }; ?>
            </tbody>
        </table>
        <br>
        <p>Benar-benar telah <b>Meninggal Dunia</b>, pada waktu dan tempat yang telah disebutkan diatas.</P>
        <p>Demikian Surat ini dibuat, agar dapat digunakan sebagaimana mestinya.</P>
        <br>
        <br>
        <br>
        <br>
        <br>
        <p align="right">
            ..........,
            <?php echo $tanggal_cetak; ?>
            <br> Kepala Dinas Kependudukan dan Pencatatan Sipil Kabupaten ..........
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>(....................................................)
        </p>

</html>
