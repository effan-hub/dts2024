<?php

include 'koneksi.php';

$id = $_POST['id'];
$jenis_paket = $_POST['jenis_paket'];
$deskripsi = $_POST['deskripsi'];

$query = "UPDATE paket_wisata SET jenis_paket = '$jenis_paket', deskripsi = '$deskripsi' WHERE id = $id";

mysqli_query($db, $query);


if (mysqli_affected_rows($db) > 0) {
    echo "<script>
    alert('Data Berhasil Diupdate');
    document.location.href = 'index.php';
    </script>";
} else {
    echo "Data Gagal Diupdate<br>";
    echo mysqli_error($db);
}
