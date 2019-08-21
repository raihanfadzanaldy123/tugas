<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action"" method="POST" name="input">
    Nama Anda : <Input type="text" name="nama"><br>
    Nilai 1 : <input type="number" name="nilai1"><br>
    Nilai 2 : <input type="number" name="nilai2"><br>
    <input type="submit" name="simpan" value= "Simpan .">
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $hsl =($nilai1+$nilai2)/2;
    echo "Nama Anda : <b>$nama</b><br>";
    echo "Nilai 1 : <b>$nilai1</b><br>";
    echo "Nilai 2 : <b>$nilai2</b><br>";
    echo "Nilai Rata-rata : $hsl";
}
echo "<hr>";
?>