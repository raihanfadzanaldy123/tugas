<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Input</title>
</head>
<body>
    <form action"" method="post" name="input" >
    Nama Anda : <Input type="text" name="nama"><br>
    Nilai 1 : <input type="text" name="nilai1">
    Nilai 2 : <input type="text" name="nilai2">
    <Input type="submit" name="input" value="Simpan">
    </form>
</body>
</html>

<?php
if (isset($_POST['input'])) {
    $nama = $_POST['nama'];
    echo "Nama Anda : <b>$nama</b>";
}

?>