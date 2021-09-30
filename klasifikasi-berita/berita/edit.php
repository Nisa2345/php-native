<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
include '../database.php';
$berita = new berita();
foreach ($berita->edit($_GET['id_berita']) as $data) {
    $id_berita = $data['id_berita'];
    $judul = $data['judul'];
    $headline = $data['headline'];
    $isi = $data['isi'];
    $pengirim = $data['pengirim'];
    $tanggal = $data['tanggal'];
}
?>
    <fieldset>
        <legend>Edit Data Berita</legend>
        <form action="proses.php" method="post">
            <input type="text" name="aksi" value="update">
            <input type="text" name="id_kategori" value="<?php echo $id_kategori; ?>">
            <table>
               <tr>
                    <td>judul</td>
                    <td><input type="text" name="judul" value="<?php echo $judul; ?>" required></td>
                </tr>
                <tr>
                    <td>Tanggal Berita</td>
                    <td><input type="date" name="tanggal" value="<?php echo $tanggal; ?>" required></td>
                </tr>
                 <tr>
                    <td>Headline</td>
                    <td><input type="text" name="headline" value="<?php echo $headline; ?>" required></td>
                </tr>
                <tr>
                    <td>isi</td>
                    <td><input type="text" name="isi" value="<?php echo $isi; ?>" required></td>
                </tr>
                <tr>
                    <td>Pengirim</td>
                    <td><input type="text" name="pengirim" value="<?php echo $pengirim; ?>" required></td>
                </tr>

                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>
