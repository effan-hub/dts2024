<?php

$server = "localhost";
$user = "root";
$password = "";

$nama_database = "db_wisata";
$db = mysqli_connect($server, $user, $password, $nama_database);


if ($db) {
    echo "berhasil terkoneksi......";
} else {
    die("Gagal terhubung dengan database : " . mysqli_connect_error());
}
