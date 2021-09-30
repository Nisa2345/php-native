<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <a href="data.php">Data Berita | </a>
        <a href="create.php">Tambah Data Berita</a>
    </center>
    <fieldset>
        <legend>Data Berita</legend>
        <table border="1">
            <tr>
                <th>ID kategori</th></th>
                <th>Judul</th>
                <th>Headline</th>
                <th>Isi</th>
                <th>Pengirim</th>
                <th>Tanggal</th>
                <th colspan="4">Aksi</th>
            </tr>
             <?php
include '../database.php';
$berita = new berita();
$no = 1;
foreach ($berita->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $data['id_kategori']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['headline']; ?></td>
                    <td><?php echo $data['isi']; ?></td>
                    <td><?php echo $data['pengirim']; ?></td>
                    <td><?php echo $data['tanggal']; ?></td>
                    <td>
                        <a href = "show.php?id=<?php echo $data['id']; ?>">Detail</a>
                    </td>
                    <td>
                        <a href = "edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                            <input type="hidden" name="id_berita" value="<?php echo $data['id_berita']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
?>
    </table>
    </fieldset>
</body>

</html>