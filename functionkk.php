<?php

//Membuat koneksi ke database
include ('koneksi.php');

//Menambah data KK
    $no_kk=$_POST['no_kk'];
    $orangnya=$_POST['orangnya'];
    $desa=$_POST['desa'];
    $rt=$_POST['rt'];
    $rw=$_POST['rw'];
    $kec=$_POST['kec'];
    $kab=$_POST['kab'];
    $prov=$_POST['prov'];


    $hasil=mysqli_query($koneksi, "insert into data_kk values('$no_kk','$orangnya','$desa','$rt','$rw','$kec','$kab','$prov')");

    if($hasil){
        header('location:kk.php');
    }else{
        echo 'gagal';
        header('location:gagal.php');
    }

//Update data kk
    if(isset($_POST['editdatakk'])){
       
    $no_kk=$_POST['no_kk'];
    $orangnya=$_POST['orangnya'];
    $desa=$_POST['desa'];
    $rt=$_POST['rt'];
    $rw=$_POST['rw'];
    $kec=$_POST['kec'];
    $kab=$_POST['kab'];
    $prov=$_POST['prov'];


    $update = mysqli_query($koneksi, "update data_kk set no_kk='$no_kk', nik='$orangnya',desa='$desa', rt='$rt', rw='$rw', kec='$kec', kab='$kab', prov='$prov' where no_kk='$no_kk'");

    if($update){
        header('location:kk.php');
    }else{
        echo 'gagal';
        header('location:gagal.php');
    }
    }

    //Menghapus Data penduduk
    if(isset($_POST['deletedatakk'])){
        $no_kk = $_POST['no_kk'];

        $hapus = mysqli_query($koneksi, "delete from data_kk where no_kk='$no_kk'");
        if($hapus){
            header('location:kk.php');
        }else{
            echo 'gagal';
            header('location:gagal.php');
        }
    }


?>