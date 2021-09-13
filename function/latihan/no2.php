<?php 
// Pertama tama kita membuat fungsi bernama nilaiMax() 
function nilaiMax($array)  
{ 
   $n = count($array);  
   $max = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($max < $array[$i]) 
           $max = $array[$i]; 
    return $max;        
} 
   
// Pertama tama kita membuat fungsi bernama nilaimin()
function nilaiMin($array)  
{ 
   $n = count($array);  
   $min = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($min > $array[$i]) 
           $min = $array[$i]; 
    return $min;        
} 
   
// Driver code 
$array = array(90, 80, 60, 100, 127, 81, 51, 99); 
echo "Nilai Maksimum : ".nilaiMax($array); 
echo "<br>"; 
echo "Nilai Minimum : ".nilaiMin($array); 
?> 