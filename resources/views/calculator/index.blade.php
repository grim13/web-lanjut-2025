<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator Laravel</title>
</head>
<body>
    <h1>Kalkulator Laravel</h1>
    <form method="POST">
        @csrf
        <input type="number" name="a" placeholder="Nilai A"> +
        <input type="number" name="b" placeholder="Nilai B">
        <button type="submit"> Hitung</button>
    </form>
</body>
</html>