<?php
if (isset($_POST['proses'])) {
    $saran1 = nl2br($_POST['saran']); 
    echo "Kritik / Saran Anda adalah : <br>";
    echo "<font color=blue><b>$saran1</b></font>"; 
}

?>