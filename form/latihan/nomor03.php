<html>
    <form action = "nomor03pro.php" method = "post">
        Jumlah Bintang <input type = "text" name = "bintang" required><br><br>
        <button type = "submit" name = "input">Input</button>
    </form>
</html>

<?php
if (isset($_POST['simpan'])){
   $bintang = $_POST ['bil1'];
   echo "<center>";
   for ($i = 0; $i <= $bintang; $i++ ){
     for($a = $bintang; $a > $i; $a--){
       echo "nbsp;";
     }
     for($b = 0; $b <= $i; $b++){
       echo
     }
   }
}