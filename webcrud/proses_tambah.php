<?php
if($_POST) {
    $nama=$_POST['nama'];
    $absen=$_POST['absen'];
    $kelas=$_POST['kelas'];
    $foto = basename($_FILES["foto"]["name"]);
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(empty($nama)){
    //     echo "<script>alert('nama tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    // } elseif(empty($absen)){
    //     echo "<script>alert('absen tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    // } elseif(empty($kelas)){
    //     echo "<script>alert('kelas tidak boleh kosong');location.href='tambah_siswa.php';</script>"; 
    // } elseif(empty($foto)){
    //     echo "<script>alert('foto tidak boleh kosong');location.href='tambah_siswa.php';</script>"; 
    } else{
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                
                include "koneksi.php";
                
                $sql = "INSERT INTO `siswa` (`nama`, `absen`, `kelas`, `foto`) VALUES ('$nama', '$absen', '$kelas', '$foto')";
                
                $insert=mysqli_query($konn, $sql);

                if($insert) {
          
                     echo "<script>alert('Sukses menambahkan siswa');location.href='siswa.php';</script>";
                 } else {
                    echo "<script>alert('Gagal menambahkan siswa');location.href='siswa.php';</script>";
                }
            } else {
                echo "<script>alert('Error saat upload file foto');location.href='siswa.php';</script>";
            }
        }

}
?>