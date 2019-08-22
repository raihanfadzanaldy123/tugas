<?php
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "angsam" && $pass == "123") {
        echo "Login Berhasil</h1>";
    }else{
        echo "Login Gagal </h1>";
    }
}

?>