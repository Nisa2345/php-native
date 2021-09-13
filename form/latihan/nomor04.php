<html>
    <head><title>Pengolahan Form</title></head>
    <body>
        <FORM ACTION = "nomor04pro.php" METHOD = "POST" NAME = "input">
            Nama : <input type = "text" name = "nama" required><br>
            Jenis Kelamin :
            <input type = "radio" name = "jk" value = "Laki - laki" checked>
            Laki - laki
            <input type = "radio" name = "jk" value = "Perempuan">
            Perempuan<br>
            Agama : 
            <select name = "agama">
            <option value = " "></option>
                <option value = "Islam">Islam</option>
                <option value = "Protestan">Protestan</option>
                <option value = "Katolik">Katolik</option>
                <option value = "Hindu">Hindu</option>
                <option value = "Budha">Budha</option>
                <option value = "Konghucu">Konghucu</option>
            </select><br>
            Golongan :
            <select name = "gol">
            <option value = " "></option>
                <option value = "1">1</option>
                <option value = "2">2</option>
                <option value = "3">3</option>
                <option value = "4">4</option>
            </select><br>
            Jumlah Jam : <input type = "number" name = "jam" required><br><br>

            <input type = "submit" name = "input" value = "input">
            <input type = "reset" name = "reset" value = "reset">

        </FORM>
    </body>
</html>