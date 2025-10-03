<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Kalkulator</title>
</head>
<body>
    <?php
        $hasil = $_POST['a'] + $_POST['b'];
    ?>
    <h1>Hasilnya.....</h1>
    <h3><?=$hasil?></h3>
    <a href="/calculator">Kembali</a>
</body>
</html>