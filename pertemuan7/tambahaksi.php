<?php
// var_dump($_POST);
// die;

include 'koneksi.php';

$jenis_paket = $_POST['jenis_paket'];
$deskripsi = $_POST['deskripsi'];

$query = "INSERT INTO paket_wisata(jenis_paket, deskripsi) VALUES ('$jenis_paket', '$deskripsi')";

mysqli_query($db, $query);


if (mysqli_affected_rows($db) > 0) {
    echo "<script>
    alert('Data Berhasil Ditambahkan');
    document.location.href = 'index.php';
    </script>";
} else {
    echo "Data Gagal Ditambahkan<br>";
    echo mysqli_error($db);
}
