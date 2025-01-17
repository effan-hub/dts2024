<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Makanan</title>
</head>

<body>
    <h2>Form Pemesanan Makanan</h2>
    <table>
        <tr>
            <th>Nama Makanan</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <tr class="item">
            <td>Nasi Goreng</td>
            <td class="harga">Rp10.000</td>
            <td><input type="number" class="jumlah" value="0" title="Jumlah Nasi Goreng"></td>
        </tr>
        <tr class="item">
            <td>Ayam Goreng</td>
            <td class="harga">Rp12.000</td>
            <td><input type="number" class="jumlah" value="0" title="Jumlah Ayam Goreng"></td>
        </tr>
        <tr class="item">
            <td>Es Teh</td>
            <td class="harga">Rp2.000</td>
            <td><input type="number" class="jumlah" value="0" title="Jumlah Es Teh"></td>
        </tr>
        <tr class="item">
            <td>Kopi</td>
            <td class="harga">Rp3.000</td>
            <td><input type="number" class="jumlah" value="0" title="Jumlah Kopi"></td>
        </tr>
    </table>


    <!-- Tombol Hitung Total -->
    <button id="hitungTotal">Hitung Total</button>

    <!-- Hasil Total Pesanan -->
    <div id="totalPesanan"></div>

    <!-- Script JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Event handler untuk tombol "hitung Total"
            $("#hitungTotal").click(function() {
                var total = 0;
                $(".item").each(function() {
                    var harga = parseInt($(this).find(".harga").text().replace("Rp", "").replace(".", ""));
                    var jumlah = parseInt($(this).find(".jumlah").val());
                    total += harga * jumlah;
                });
                $("#totalPesanan").text("Total Pesanan: Rp " + total);
            });
        });
    </script>
</body>

</html>