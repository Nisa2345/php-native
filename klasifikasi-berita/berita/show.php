<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
include '../database.php';
$berita = new berita();
foreach ($berita->show($_GET['id_berita']) as $data) {
    $id_berita = $data['id_berita'];
    $judul = $data['judul'];
    $headline = $data['headline'];
    $isi = $data['isi'];
    $pengirim = $data['pengirim'];
    $tanggal = $data['tanggal'];

}
?>
 <center>
        <a href="data.php">Data Berita | </a>
        <a href="create.php">Tambah Data Berita</a>
    </center>
    <fieldset>
        <legend>Detail Data Berita</legend>
        <table>
                <tr>
                    <td>Judul</td>
                    <td><input type="text" name="judul" value="<?php echo $judul; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Headline Berita</td>
                    <td><input type="text" name="headline" value="<?php echo $headline; ?>" readonly></td>
                    <td><textarea name="headline" cols="50" rows="4">
                    </textarea></td>
                </tr>
                 <tr>
                   <td>Isi Berita</td>
                   <td><input type="text" name="isi" value="<?php echo $isi; ?>" readonly></td>
                    <td> <textarea name="isi" cols="50" rows="10">
                    </textarea></td>
                </tr>
                <tr>
                    <td>pengirim</td>
                    <td><input type="text" name="pengirim" value="<?php echo $pengirim; ?>" readonly></td>
                </tr>
                <tr>
                    <td>tanggal</td>
                    <td><input type="date" name="tanggal" value="<?php echo $tanggal; ?>" readonly></td>
                </tr>
                 </table>
    </fieldset>
</body>

</html>
