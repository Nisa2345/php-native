<?php
if (isset ($_POST ['input'])){
    $bintang = $_POST ['bintang'];
    for ($bintang = 1; $bintang <= 6; $bintang++){
        for ($j = 6; $j >= $i; $j--){
            echo "&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++){
            echo " * ";
        }
        echo "<br>";
    }
}
?>