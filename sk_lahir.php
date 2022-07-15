<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Surat Keterangan Kelahiran</title>
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
            $tampil_sk = mysqli_query($koneksi,"select * from data_kelahiran");
            while($data=mysqli_fetch_array($tampil_sk,MYSQLI_BOTH)){
                $idKelahiran = $data['idKelahiran'];
                $tanggal_cetak = $data['tanggal_cetak'];
                $nama = $data['nama'];
                $jenisKelamin = $data['jenisKelamin'];
                $tempatLahir = $data['tempatLahir'];
                $tanggalLahir = $data['tanggalLahir'];
            ?>

        </center>
        
        <center>
		<h4>
			<u>SURAT KETARANGAN KELAHIRAN</u>
		</h4>
		<h4>No Surat :
            <?php echo $idKelahiran; ?>/Ket.Kelahiran/
			<?php echo $tanggal_cetak; ?>
		</h4>
	    </center>
        
        <br>
        <br>
        <p>Yang bertandatangan dibawah ini Kepala Dinas Kependudukan dan Pencatatan Sipil Kabupaten ..........., dengan ini menerangkan
            bahwa :</P>
        <table>
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <?php echo $nama; ?>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <?php echo $jenisKelamin; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <?php echo $tempatLahir; ?>                      
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <?php echo $tanggalLahir; ?>                      
                    </td>
                </tr>
                <?php }; ?>
            </tbody>
        </table>
        <br>
        <p>Telah benar-benar <b>Lahir</b> di Desa ..........., Kecamatan ..........., Kabupuaten ...............</P>
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
