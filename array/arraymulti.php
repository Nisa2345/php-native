<?php
// ini adalah array dua dimensi
$matrik = [
    [2, 3, 4],
    [7, 5, 0],
    [4, 3, 8],
];

//index pertama adalah 'baris'  index kedua adalah kolom
//cara mengakses isinya
echo $matrik [1][0];
echo "&nbsp";
echo $matrik [0][2];
echo "<br><br>";

foreach ($matrik as $key => $val){
    echo "baris $key : $val[0], $val[1], $val[2]<br>";
}
?>