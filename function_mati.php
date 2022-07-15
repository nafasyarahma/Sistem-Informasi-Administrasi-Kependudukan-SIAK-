<?php

//Membuat koneksi ke database
include ('koneksi.php');

//Menambah data kematian
    $tanggalCetak=$_POST['tanggalCetak'];
    $orangnya=$_POST['orangnya'];
    $tanggalKematian=$_POST['tanggalKematian'];
    $tempatKematian=$_POST['tempatKematian'];
    $tempatPemakaman=$_POST['tempatPemakaman'];

    $hasil=mysqli_query($koneksi, "insert into data_kematian values('','$tanggalCetak','$orangnya','$tanggalKematian','$tempatKematian','$tempatPemakaman')");
    

    if($hasil){
        header('location:kematian.php');
    }else{
        echo 'gagal';
        header('location:gagal.php');
    }

 

?>