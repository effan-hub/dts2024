<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Wisata</title>
</head>

<body>
    <h1>Form Pemesanan</h1>
    <form method="GET" action="">
        <label for="Nama">Nama Pemesan</label>
        <input type="text" name="namapemesan" id="Nama"><br><br>
        <label for="Nohp">Nama HP</label>
        <input type="text" name="nohp"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>

<?php
var_dump($_GET);
// die;

// $namapemesan = $_POST['namapemesan'];
// $nohp = $_POST['nohp'];

// echo "Resume Pemesan <br>";
// echo "Nama Pemesan : $namapemesan <br>";
// echo "No Hp : $nohp <br>";


if (isset($_GET['submit'])) {
    $namapemesan = $_GET['namapemesan'];
    $nohp = $_GET['nohp'];

    echo "Resume Pemesan <br>";
    echo "Nama Pemesan : $namapemesan <br>";
    echo "No Hp : $nohp <br>";
}
?>