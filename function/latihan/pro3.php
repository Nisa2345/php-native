<?php
if (isset($_POST ['simpan'])){
    $nama = $_POST ['nama'];
    $jenisKelamin = $_POST ['jenisKelamin'];
    $agama = $_POST ['agama'];
    $tglLahir = $_POST ['tglLahir'];
    $alamat = $_POST ['alamat'];
    $hobi = $_POST['hobi'];
    
    function biodata($nama = "", $jenisKelamin, $agama, $tglLahir, $alamat, $hobi ){

        $hasil = "Nama : $nama <br>";
        $hasil .= "Jenis Kelamin : <br>";
        $hasil .= "Date Lahir : $tglLahir <br>";
        $hasil .= "Agama <br>";
        $hasil .= "Alamat <br>";
        $hasil .= "Hobi :" . implode(",", $hobi);
        return $hasil;
    
    }
    echo "<br>";
    echo biodata($nama, $jk, $tglLahir, $agama, $alamat, $hobi);
    
}
?>