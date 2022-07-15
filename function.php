<?php

//Membuat koneksi ke database
include ('koneksi.php');

//Menambah data penduduk
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $tempatLahir=$_POST['tempatLahir'];
    $tanggalLahir=$_POST['tanggalLahir'];
    $jenisKelamin=$_POST['jenisKelamin'];
    $alamat=$_POST['alamat'];
    $agama=$_POST['agama'];
    $golDarah=$_POST['golDarah'];
    $pendidikan=$_POST['pendidikan'];
    $kewarganegaraan=$_POST['kewarganegaraan'];

    $hasil=mysqli_query($koneksi, "insert into data_penduduk values('$nik','$nama','$tempatLahir','$tanggalLahir','$jenisKelamin','$alamat','$agama','$golDarah','$pendidikan',' $kewarganegaraan')");

    if($hasil){
        header('location:penduduk.php');
    }else{
        echo 'gagal';
        header('location:gagal.php');
    }

    //update data penduduk
    if(isset($_POST['updatedatapenduduk'])){
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $tempatLahir = $_POST['tempatLahir'];
        $tanggalLahir = $_POST['tanggalLahir'];
        $alamat = $_POST['alamat'];
        $agama = $_POST['agama'];
        $golDarah = $_POST['golDarah'];
        $pendidikan = $_POST['pendidikan'];
        $kewarganegaraan = $_POST['kewarganegaraan'];

        $update = mysqli_query($koneksi,"update data_penduduk set nama='$nama', tempatLahir='$tempatLahir',tanggalLahir='$tanggalLahir', alamat='$alamat', agama='$agama', golDarah='$golDarah', pendidikan='$pendidikan', kewarganegaraan='$kewarganegaraan' where nik='$nik'");
        if($update){
            header('location:penduduk.php');
        }else{
            echo 'gagal';
            header('location:gagal.php');
        }
    }

    //Menghapus Data penduduk
    if(isset($_POST['deletedatapenduduk'])){
        $nik = $_POST['nik'];

        $hapus = mysqli_query($koneksi, "delete from data_penduduk where nik='$nik'");
        if($hapus){
            header('location:penduduk.php');
        }else{
            echo 'gagal';
            header('location:gagal.php');
        }
    }

?>