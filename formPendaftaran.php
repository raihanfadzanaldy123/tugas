<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pendaftaran</title>

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>
<body>
<fieldset>
<legend><h1><marquee><font color ="blue">Formulir Pendaftaran</font></marquee></h1></legend>
    <form action="prosesForm.php" method ="POST" name="input">

    No.Pendaftaran <br>
    <input type="text" name="nodaf" placeholder="NO PENDAFTARAN"><br>
    NISN <br>
    <input type="text" name="nisn" placeholder="NISN"><br>
    NAMA <br>
    <input type="text" name="nama" placeholder="NAMA"><br>
    ALAMAT <br>
    <input type="text" name="alamat" placeholder="ALAMAT"><br>
    Tempat Lahir <br>
    <input type="text" name="tempatL" placeholder="TEMPAT LAHIR"><br>
    Tanggal Lahir <br>
    <input type="date" name="tglL" placeholder="TANGGAL LAHIR"><br>
    ASAL SEKOLAH <br>
    <input type="text" name="asalS" placeholder="ASAL SEKOLAH"><br>
    JENIS KELAMIN <br>
    <input type ="radio" name ="jk" value ="Laki-laki" >Laki-laki
    <input type ="radio" name ="jk" value ="Perempuan" >Perempuan<br>
    JURUSAN <br>
    <select name="jurusan">
        <option value ="RPL">RPL</option>
        <option value ="TKRO">TKR</option>
        <option value ="TBSM">TSM</option>
    </select><br>
    NAMA AYAH <br>
    <input type="text" name="babeh" placeholder="Nama Ayah"><br>
    PEKERJAAN AYAH <br>
    <input type="text" name="kerjaAyah" placeholder="Pekerjaan ibu"><br>
    NAMA Ibu <br>
    <input type="text" name="mamah" placeholder="Nama Ibu"><br>
    PEKERJAAN IBU <br>
    <input type="text" name="kerjaMamah" placeholder="PEKERJAAN IBU"><br>
    HOBI <br>
    <select name="hobi">
        <option value ="berkemah">berkemah</option>
        <option value ="renang">Renang</option>
        <option value ="tidur">Tidur</option>
        <option value ="ngarit">Ngarit</option>
        <option value ="gaple">Gaple</option>
    </select><br>
    AGAMA <br>
    <select name="agama">
        <option value ="islam">ISLAM</option>
        <option value ="kristen">KRISTEN</option>
        <option value ="katolik">KATOLIK</option>
        <option value ="budha">BUDHA</option>
    </select><br>
   <br><br>
    <input type="submit" name="simpan" values ="SIMPAN" >
    <input type="reset" name="reset" values = "KEMBALI">
</fieldset>

    </form>


<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin -->
</body>
</html>