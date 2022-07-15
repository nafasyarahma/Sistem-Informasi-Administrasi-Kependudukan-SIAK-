<?php

//Membuat koneksi ke database
include ('koneksi.php'); 

//Menambah data permohonan
    $idPermohonan=$_POST['idPermohonan'];
    $tanggalPermohonan=$_POST['tanggalPermohonan'];
    $orangnya=$_POST['orangnya'];

    $hasil=mysqli_query($koneksi, "insert into data_permohonanktp values('$idPermohonan','$tanggalPermohonan','$orangnya')");

    if($hasil){
        header('location:ktp.php');
    }else{
        echo 'gagal';
        header('location:gagal.php');
    }

 //update data permohonan ktp
 if(isset($_POST['updatedatapermohonanktp'])){
    $idPermohonan=$_POST['idPermohonan'];
    $orangnya=$_POST['orangnya'];
    $tanggalPermohonan=$_POST['tanggalPermohonan'];
    
    $update = mysqli_query($koneksi,"update data_permohonanktp set idPermohonan='$idPermohonan', tanggalPermohonan='$tanggalPermohonan', nik='$orangnya' where idPermohonan='$idPermohonan'");
    if($update){
        header('location:ktp.php');
    }else{
        echo 'gagal';
        header('location:gagal.php');
    }
}
    
//Menghapus Data permohonan ktp
    if(isset($_POST['deletedatapermohonanktp'])){
        $idPermohonan = $_POST['idPermohonan'];

        $hapus = mysqli_query($koneksi, "delete from data_permohonanktp where idPermohonan='$idPermohonan'");
        if($hapus){
            header('location:ktp.php');
        }else{
            echo 'gagal';
            header('location:gagal.php');
        }
    }

?>