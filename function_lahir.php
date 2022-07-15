<?php

//Membuat koneksi ke database
include ('koneksi.php');

//Menambah data kelahiran
    $idKelahiran=$_POST['idKelahiran'];
    $tanggal_cetak=$_POST['tanggal_cetak'];
    $nama=$_POST['nama'];
    $jenisKelamin=$_POST['jenisKelamin'];
    $tempatLahir=$_POST['tempatLahir'];
    $tanggalLahir=$_POST['tanggalLahir'];

    $hasil=mysqli_query($koneksi, "insert into data_kelahiran values('','$tanggal_cetak','$nama','$jenisKelamin','$tempatLahir','$tanggalLahir')");

    if($hasil){
        header('location:kelahiran.php');
    }else{
        echo 'gagal';
        header('location:gagal.php');
    }

?>