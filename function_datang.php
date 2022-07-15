<?php

//Membuat koneksi ke database
include ('koneksi.php');

//Menambah data kedatangan
    $idKedatangan=$_POST['idKedatangan'];
    $tanggalCetak=$_POST['tanggalCetak'];
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $jenisKelamin=$_POST['jenisKelamin'];
    $tanggalDatang=$_POST['tanggalDatang'];
    $domisiliAsal=$_POST['domisiliAsal'];
    $alasan=$_POST['alasan'];

    $hasil=mysqli_query($koneksi, "insert into data_kedatangan values('','$tanggalCetak','$nik','$nama','$jenisKelamin','$tanggalDatang','$domisiliAsal','$alasan')");

    if($hasil){
        header('location:kedatangan.php');
    }else{
        echo 'gagal';
        header('location:gagal.php');
    }

?>