<?php
if (isset($_POST['masuk'])) {
    $nama1 = $_POST['nama'];
    $alamat1 = $_POST['alamat'];
    $jk1 = $_POST['jk'];
    $agama1 = $_POST['agama'];
    $email1 = $_POST['email'];
    $pass1 = $_POST['password'];



        echo "Nama : ".$nama1."<br>";
        echo "Alamat : ".$alamat1."<br>";
        echo "Jenis Kelamin : ".$jk1."<br>";
        echo "Agama : ".$agama1."<br>";
        echo "Email : ".$email1."<br>";
        

    if ($pass1 == "123") {
        echo "Password : <b>AKTIF</b> <br>";
          
    }
    else{
        echo "Password : <b> Tidak AKTIF</b> <br>";
    }
}

?>