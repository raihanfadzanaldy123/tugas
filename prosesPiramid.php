<?php
    if (isset($_POST['buat'])) {
        $angkaQ = $_POST['angka'];
      
        for( $a=$angkaQ; $a > 0; $a--){
            for($i=1; $i <= $a; $i++){
        echo "&nbsp;";

    }
        for($a1=$angkaQ; $a1 > $a; $a1--){
        echo"x";
    }
        for($a2=$angkaQ; $a2 > $a; $a2--){
        echo"x";
    }
        echo"<br>";
}
    }
?>