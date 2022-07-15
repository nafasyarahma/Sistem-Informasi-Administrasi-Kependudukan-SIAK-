<?php

//Membuat koneksi ke database
include ('koneksi.php');

//Menambah data perpindahan
    $tanggalCetak=$_POST['tanggalCetak'];
    $orangnya=$_POST['orangnya'];
    $tanggalPindah=$_POST['tanggalPindah'];
    $domisiliTujuan=$_POST['domisiliTujuan'];
    $alasanPindah=$_POST['alasanPindah'];
    
    $hasil=mysqli_query($koneksi, "insert into data_perpindahan values('','$tanggalCetak','$orangnya','$tanggalPindah','$domisiliTujuan','$alasanPindah')");

    if($hasil){
        header('location:perpindahan.php');
    }else{
        echo 'gagal';
        header('location:gagal.php');
    }

?>