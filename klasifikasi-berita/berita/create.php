<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>
<body>
    <center>
        <a href="data.php">Data berita | </a>
        <a href="create.php">Tambah Data berita</a>
    </center>
    <fieldset>
        <legend>Input Data berita</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <td>ID kategori</td>
                    <td><input type="text" name="id_kategori" required></td>
                </tr>
                <tr>
                    <td>judul</td>
                    <td><input type="text" name="judul" required></td>
                </tr>
                <tr>
                    <td>Headline Berita</td>
                    <td><textarea name="headline" cols="50" rows="4">
                    </textarea></td>
                </tr>
                 <tr>
                    <td>Isi Berita</td>
                    <td> <textarea name="isi" cols="50" rows="10">
                    </textarea></td>
                </tr>
                <tr>
                    <td>pengirim</td>
                    <td><input type="text" name="pengirim" required></td>
                </tr>
                <tr>
                    <td>tanggal</td>
                    <td><input type="date" name="tanggal" required></td>
                </tr>
                <tr>
                   <td>
                        <button type="submit" name="save">Simpan </button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
