<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM paket_wisata WHERE id=$id";
$result = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Form Paket Wisata</title>
</head>

<body>

    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <form action="editaksi.php" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <div class="mb-3">
                    <label for="jenis_paket" class="form-label">Jenis Paket</label>
                    <input type="text" name="jenis_paket" id="jenis_paket" class="form-control" value="<?= $data['jenis_paket'] ?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?= $data['deskripsi'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>

            </form>
        </div>
    </div>
</body>

</html>