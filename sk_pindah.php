<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Surat Keterangan Perpindahan</title>
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
        $ambildataperpindahan = mysqli_query($koneksi,"select * from data_perpindahan pi, data_penduduk pe where pe.nik=pi.nik");
        while($data=mysqli_fetch_array($ambildataperpindahan)){
            $idPerpindahan=$data['idPerpindahan'];
            $tanggal_cetak=$data['tanggalCetak'];
            $nik=$data['nik'];
            $nama=$data['nama'];
            $tanggalPindah=$data['tanggalPindah'];
            $domisiliTujuan=$data['domisiliTujuan'];
            $alasanPindah=$data['alasanPindah'];                                          
        ?>


        </center>
        
        <center>
		<h4>
			<u>SURAT KETARANGAN PERPINDAHAN</u>
		</h4>
		<h4>No Surat :
            <?php echo $idPerpindahan; ?>/Ket.Perpindahan/
			<?php echo $tanggal_cetak; ?>
		</h4>
	    </center>
        
        <br>
        <br>
        <p>Yang bertandatangan dibawah ini Kepala Dinas Kependudukan dan Pencatatan Sipil Kabupaten ..............., dengan ini menerangkan
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
                    <td>Domisili Tujuan</td>
                    <td>:</td>
                    <td>
                        <?php echo $domisiliTujuan; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Perpindahan</td>
                    <td>:</td>
                    <td>
                        <?php echo $tanggalPindah; ?>                      
                    </td>
                </tr>
                <tr>
                    <td>Alasan</td>
                    <td>:</td>
                    <td>
                        <?php echo $alasanPindah; ?>                      
                    </td>
                </tr>
                <?php }; ?>
            </tbody>
        </table>
        <br>
        <p>Telah benar-benar <b>Pindah</b>, dari Desa .........., Kecamatan ........., Kabupaten ..........</P>
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
