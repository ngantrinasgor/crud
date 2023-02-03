<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title></title>
</head>
<body>
    <?php include"navbar.php"; ?>
    <div class="container col-10">
        <div class="col-md py-5">
        <table class="table table-hover table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Absen</th>
        <th>Kelas</th> 
        <th>Foto</th>
        <th>Pilihan</th>
        <th></th>

</tr>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";
        $qry_siswa = mysqli_query($konn,"select * from siswa");
        $no=0;
        while($data_siswa = mysqli_fetch_array($qry_siswa)){
        $no++;?>
        <tr><td><?=$no?> </td>
        <td> <?=$data_siswa['nama']?> </td>
        <td> <?=$data_siswa['absen']?> </td>
        <td> <?=$data_siswa['kelas']?> </td>
        
        <td  style="width: 20%"> <img src="images/<?=$data_siswa['foto']?>" style="width: 15%;" alt="<?=$data_siswa['foto']?>">    
        <td>
        <a href="edit_siswa.php?id=<?=$data_siswa['id'] ?>"class="btn btn-success">Edit</a>
        <a href="hapus_siswa.php?id=<?=$data_siswa['id'] ?>" onclick="return confirm('Are you sure you want to delete this item?') "class="btn btn-danger">Delate</a>
        </td>
        </tr>
        <?php
        }
     ?>
    </tbody>
    </table>
    <a href="tambah_siswa.php" class="btn btn-primary" style="float: right; width: 150px;">Tambah Data</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">

    </script>
        </div>
    </div>
</body>
</html>
<?php include "footer.php"; ?>