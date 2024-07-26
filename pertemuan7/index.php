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
            <form action="tambahaksi.php" method="post">
                <div class="mb-3">
                    <label for="jenis_paket" class="form-label">Jenis Paket</label>
                    <input type="text" name="jenis_paket" id="jenis_paket" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>

            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Paket</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($db, "SELECT * FROM paket_wisata");
                    while ($d = mysqli_fetch_assoc($data)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $d['jenis_paket']; ?></td>
                            <td><?php echo $d['deskripsi']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin mau menghapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

        </div>
    </div>
</body>

</html>