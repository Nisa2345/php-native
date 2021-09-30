<?php
include '../database.php';
$berita = new berita();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id_berita = @$_POST['id_berita'];
    $judul = $_POST['judul'];
    $headline = $_POST['headline'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];
    $id_kategori = $_POST['id_kategori'];

    if ($aksi == "create") {
        $berita->create($id_kategori, $judul, $headline, $isi, $tanggal);
        header("location:data.php");
    } elseif ($aksi == "update") {
        $berita->update($id_berita, $id_kategori, $judul, $headline, $isi, $tanggal);
        header("location:data.php");
    } elseif ($aksi == "delete") {
        $berita->delete($id_berita);
        header("location:data.php");
    }

}
