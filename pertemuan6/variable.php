<?php
$nama = "John Doe";
$umur = 25;
$tinggi_cm = 175.5;
$status_menikah = false;

echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . "<br>";
echo "Tinggi: " . $tinggi_cm . " cm<br>";
echo "Status Menikah: " . ($status_menikah ? "Sudah Menikah" : "Belum Menikah") . "<br>";

echo 'Nama: ' . $nama . '<br>';
echo "Umur: $umur <br>";
?>

<script>
    var nama = "John Doe";
    var umur = 25;
    var tinggi_cm = 175.5;
    var statusMenikah = false;

    console.log("Nama: " + nama);
    console.log("Umur: " + umur + " tahun");
    console.log("Tinggi: " + tinggi_cm + " cm");
    console.log("Status Menikah: " + (statusMenikah ? "Sudah Menikah" : "Belum Menikah"));
</script>