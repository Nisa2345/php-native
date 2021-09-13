<html>
    <head><title>Pilih Jurusan</title></head>
    <body>
        <FORM ACTION="proses06.php" METHOD="POST" NAME="input">
            <h2>Pilih Jurusan Anda:</h2>
            <input type="radio" name="Jurusan" value="TI" checked>
            Teknik Informatika<br>
          </FORM> 
       </body> 
    </html>

    <?php
    if (isset($_POST['Input'])) {
        $nama = $_POST['nama'];
        echo "Nama Anda : <b>$Nama</b>";
    }