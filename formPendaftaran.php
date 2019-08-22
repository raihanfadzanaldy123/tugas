<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pendaftaran</title>t
</head>
<body>
    <form action="prosesForm.php" method ="POST" name="input">
    <h1 align ="center">Formulir Pendaftaran</h1>
    No.Pendaftaran 
    <input type="text" name="nodaf"><br>
    NISN
    <input type="text" name="nisn" placeholder="NISN"><br>
    NAMA 
    <input type="text" name="nama" placeholder="NAMA"><br>
    ALAMAT
    <input type="text" name="alamat" placeholder="ALAMAT"><br>
    Tempat Lahir
    <input type="text" name="tempatL" placeholder="TEMPAT LAHIR"><br>
    Tanggal Lahir
    <input type="date" name="tglL" placeholder="TANGGAL LAHIR"><br>
    ASAL SEKOLAH
    <input type="text" name="asalS" placeholder="ASAL SEKOLAH"><br>
    JENIS KELAMIN
    <input type ="radio" name ="jk" value ="Laki-laki" >Laki-laki
    <input type ="radio" name ="jk" value ="Perempuan" >Perempuan<br>
    JURUSAN
    <select name="jurusan">
        <option value ="rpl">RPL</option>
        <option value ="tkr">TKR</option>
        <option value ="tsm">TSM</option>
    </select><br>
    NAMA AYAH
    <input type="text" name="babeh" placeholder="Nama Ayah"><br>
    PEKERJAAN AYAH
    <input type="text" name="kerjaAyah" placeholder="Pekerjaan ibu"><br>
    NAMA Ibu
    <input type="text" name="mamah" placeholder="Nama Ibu"><br>
    PEKERJAAN IBU
    <input type="text" name="kerjaMamah" placeholder="PEKERJAAN IBU"><br>
    HOBI
    <input type="text" name="hobi" placeholder="HOBI"><br>
    AGAMA
    <select name="agama">
        <option value ="islam">ISLAM</option>
        <option value ="kristen">KRISTEN</option>
        <option value ="katolik">KATOLIK</option>
        <option value ="budha">BUDHA</option>
    </select><br>
   <br><br>
    <input type="submit" name="simpan" values ="SIMPAN" >
    <input type="reset" name="reset" values = "KEMBALI">

    </form>
</body>
</html>