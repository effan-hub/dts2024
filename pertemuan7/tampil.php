<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($db, "SELECT * FROM paket_wisata");

$data1 = mysqli_fetch_assoc($data);
var_dump($data1);
echo $data1['deskripsi'];
echo "<br>";

$data1 = mysqli_fetch_assoc($data);
var_dump($data1);
echo $data1['deskripsi'];
echo "<br";
