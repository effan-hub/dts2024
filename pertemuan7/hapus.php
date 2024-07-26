<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM paket_wisata WHERE id = $id";

mysqli_query($db, $query);

if (mysqli_affected_rows($db) > 0) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    document.location.href='index.php';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Dihapus');
    </script>";
    echo mysqli_error($db);
}
