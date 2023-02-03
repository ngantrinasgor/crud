<?php
        if($_GET['id']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($konn,"delete from siswa where
        id='".$_GET['id']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses menghapus siswa');location.href='siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus siswa');location.href='siswa.php';</script>";
        }
        }
?>