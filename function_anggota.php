<?php

//Membuat koneksi ke database
include ('koneksi.php');

//Menambah data KK
    
    $no_kknya=$_POST['no_kknya'];
    $orangnya=$_POST['orangnya'];
    $hubungan=$_POST['hubungan'];

    $hasil=mysqli_query($koneksi, "insert into data_anggotakk values('', '$no_kknya','$orangnya','$hubungan')");

    if($hasil){
        header('location:anggota.php');
    }else{
        echo 'gagal';
        header('location:gagal.php');
    }
?>