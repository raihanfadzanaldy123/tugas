<?php
    if (isset($_POST['simpan'])) {
    $nodaf1 = $_POST['nodaf'];
    $nisn1 = $_POST['nisn'];
    $nama1 = $_POST['nama'];
    $alamat1 = $_POST['alamat'];
    $tempatL1 = $_POST['tempatL'];
    $tglL1 = $_POST['tglL'];
    $asalS1 = $_POST['asalS'];
    $jk1 = $_POST['jk'];
    $jurusan1 = $_POST['jurusan'];
    $babeh1 = $_POST['babeh'];
    $kerjaAyah1 = $_POST['kerjaAyah'];
    $mamah1 = $_POST['mamah'];
    $kerjaMamah1 = $_POST['kerjaMamah'];
    $hobi1 = $_POST['hobi'];
    $agama1 = $_POST['agama'];

   
    // echo "No.Pendaftaran : ".$nodaf1."<br>";
    // echo "NISN : ".$nisn1."<br>";
    // echo "Nama : ".$nama1."<br>";
    // echo "ALAMAT : ".$alamat1."<br>";
    // echo "TEMPAT LAHIR : ".$tempatL1."<br>";
    // echo "TANGGAL LAHIR : ".$tglL1."<br>";
    // echo "ASAL SEKOLAH : ".$asalS1."<br>";
    // echo "JENIS KELAMIN : ".$jk1."<br>";
    // echo "JURUSAN : ".$jurusan1."<br>";
    // echo "NAMA AYAH : ".$babeh1."<br>";
    // echo "PEKERJAAN AYAH : ".$kerjaAyah1."<br>";
    // echo "NAMA IBU : ".$mamah1."<br>";
    // echo "PEKERJAAN IBU : ".$kerjaMamah1."<br>";
    // echo "HOBI : ".$hobi1."<br>";
    // echo "AGAMA : ".$agama1."<br>";
    
    }

?>

<?php
echo "<br>";
echo "<h1>Formulir</h1>";
echo "<table width = 500 border = 2 >
 <tr>
    <td> No.Pendaftaran :</td>
    <td> $nodaf1 </td>
</tr>
 <tr>
    <td>NISN</td>
    <td>$nisn1</td>
</tr>
 <tr>
    <td>Nama</td>
    <td>$nama1</td>
 </tr>
  <tr>
    <td>Alamat</td>
    <td>$alamat1</td>
 </tr>
 <tr>
    <td>Tempat Lahir</td>
    <td>$tempatL1</td>
 </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>$tglL1</td>
 </tr>
  <tr>
    <td>Asal Sekolah</td>
    <td>$asalS1</td>
 </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>$jk1</td>
 </tr>
  <tr>
    <td>Jurusan</td>
    <td>$jurusan1</td>
 </tr>
  <tr>
    <td>Nama Ayah</td>
    <td>$babeh1</td>
 </tr>
  <tr>
    <td>Pekerjaan Ayah</td>
    <td>$kerjaAyah1</td>
 </tr>
  <tr>
    <td>Nama Ibu</td>
    <td>$mamah1</td>
 </tr>
  <tr>
    <td>Pekerjaan Ibu</td>
    <td>$kerjaMamah1</td>
 </tr>
  <tr>
    <td>Hobi</td>
    <td>$hobi1</td>
 </tr>
  <tr>
    <td>Agama</td>
    <td>$agama1</td>
 </tr>

</table>";

?>