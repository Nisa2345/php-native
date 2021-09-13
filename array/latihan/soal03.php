<?php
$data = [
    [
        "mahasiswa" => "Nisa",
        "matakuliah" => [
            ["nama" => "Informatika"],
            ["nama" => "Psikologi"],
            ["nama" => "Sastra"]
        ],
        "hobi" =>[
            ["hobi" => "Main Game"],
            ["hobi" => "Membaca"],
        ],
        "namadosen" => "Aceng Fikri",
    ],
    [
        "mahasiswa" => "Kirana",
        "matakuliah" => [
            ["nama" => "Fisika"],
            ["nama" => "matematika"],
            ["nama" => "Astronomi"]
        ],
        "hobi" =>[
            ["hobi" => "Memasak"],
            ["hobi" => "Mewarnai"],
        ],
        "namadosen" => "Aceng Fikri",
    ],
    [
        "mahasiswa" => "Juki",
        "matakuliah" => [
            ["nama" => "Kimia"],
            ["nama" => "Biologi"],
            ["nama" => "Sejarah"]
        ],
        "hobi" =>[
            ["hobi" => "Main Catur"],
            ["hobi" => "Bola Basket"],
        ],
        "namadosen" => "Aceng Fikri",
    ],
    [
        "mahasiswa" => "Galang",
        "matakuliah" => [
            ["nama" => "PKN"],
            ["nama" => "Indonesia"],
            ["nama" => "IPS"]
        ],
        "hobi" =>[
            ["hobi" => "Berpetualang"],
            ["hobi" => "Mendaki"],
        ],
        "namadosen" => "Ujang Betok",
    ],
    [
        "mahasiswa" => "Caca",
        "matakuliah" => [
            ["nama" => "IPA"],
            ["nama" => "KWU"],
            ["nama" => "BK"]
        ],
        "hobi" =>[
            ["hobi" => "Menyanyi"],
            ["hobi" => "Menari"],
        ],
        "namadosen" => "Ujang Betok",
    ],
    [
        "mahasiswa" => "Ahmad",
        "matakuliah" => [
            ["nama" => "Sastra Jawa"],
            ["nama" => "Sastra Sunda"],
            ["nama" => "B inggris"]
        ],
        "hobi" =>[
            ["hobi" => "Bermain"],
            ["hobi" => "Menonton TV"],
        ],
        "namadosen" => "Ujang Betok",
    ],
];
?>

<html>
    <table border = "1" width = "100%">
    <tr> 
        <th> <?php echo "No";?></th>
        <th> <?php echo "Nama Mahasiswa";?></th>
        <th> <?php echo "Nama Dosen";?></th>
        <th> <?php echo "Mata Kuliah";?></th>
        <th> <?php echo "Hobi";?></th>
    </tr>
<?php
$no = 1;
foreach ($data as $mahasiswa)
{
?>
    <tr>
        <td> <?php echo $no++;?></td>
        <td> <?php echo $mahasiswa ['mahasiswa'] . "<br>" ;?></td>
        <td>
        <?php echo $mahasiswa ['namadosen'] . "<br>";?>
        </td>
    <td>
    <?php
    foreach ($mahasiswa['matakuliah'] as $matkul)
    {   
    ?>
        <li> <?php echo " ".$matkul ['nama'];?></li>
    <?php
    } 
    ?>
    </td>
    <td> 
    <?php    
    foreach ($mahasiswa['hobi'] as $hobi)
    {
    ?>
        <li> <?php echo " ".$hobi ['hobi'];?></li>
    <?php    
    }
}
?>
    </td>
</tr>

</table>
</html>

