<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student edits</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php

        include "koneksi.php";
        $query_siswa = mysqli_query($konn, "select * from siswa where id='".$_GET['id']."'");
        $data_siswa = mysqli_fetch_array($query_siswa);
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Student edits</h1>
            <div class="card-body">
                <form method="POST" action="proses_edit_siswa.php" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$data_siswa['id']?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" name="nama" value="<?=$data_siswa['nama']?>" placeholder="Masukkan nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="absen" class="form-label">Absence</label>
                        <textarea class="form-control" name="absen" row="3" placeholder="Masukkan absen" required><?=$data_siswa['absen']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Class</label>
                        <input type="text" class="form-control" name="kelas" value="<?=$data_siswa['kelas']?>" placeholder="Masukkan kelas" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Picture</label>
                        <input type="file" class="form-control" name="foto">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>