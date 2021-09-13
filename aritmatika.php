<?php
    //OPERATOR ARITMATIKA
    $a = 2;
    $b = 3;
    $c = 5;
    $d = 10;
 
    echo "<br/> PENJUMLAHAN <br/>";
    echo $a+$b; 
    echo "<br/>";
    $f = $c+$d;
    echo $f;        
    echo "<br/>";
 
    echo "<br/> PENGURANGAN <br/>";
    echo ($a-$d)."<br/>"; 
    echo $f."<br/>";     
    echo -$d."<br/>";     
 
    echo "<br/> PERKALIAN <br/>";
    echo ($a*$b)."<br/>"; 
    echo ($b*-$c)."<br/>";    
 
    echo "<br/> PEMBAGIAN <br/>";
    echo $d/$c."<br/>";       //tercetak 2
    echo ($d/$b)."<br/>"; 
 
    echo "<br/> MODULUS <br/>";
    echo ($d%$b)."<br/>"; //tercetak 1 karena 10/3 adalah 3 + 1 -> yang dicetak 1
    echo $a%$b."<br/>";       //tercetak 2 karena 
 
    echo "<br/> GABUNGAN <br/>";
    echo (2*3+2/3)."<br/>";           //tercetak 6.66667, ingat perkalian & pembagian lebih 'kuat' daripada penjumlahan pengurangan
    echo (10%3 + 2%3 *2)."<br/>"; //tercetak 5, modulus lebih 'kuat' daripada perkalian pembagian
?>