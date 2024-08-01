<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Contoh Penggunaan jQuery</title>
</head>

<body>
    <button id="clickMe">Klik saya!</button>
    <script>
        $(document).ready(function() {
            $("#clickMe").click(function() {
                alert("Anda telah mengklik tombol!");
            });
        });
    </script>
</body>

</html>