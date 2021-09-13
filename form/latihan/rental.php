<html>
    <body>
        <FORM ACTION = "rentalpro.php" METHOD = "POST" NAME = "input">
        <fieldset>
        <legend><h2>Rental Mobil</h2></legend>
            <table>

            <tr>
                <td>Nama </td>
                <td> :</td>
                <td><input type = "text" name = "nama" required><br></td>
            </tr>

            <tr>
                <td>Nomor Induk Keluarga </td>
                <td> :</td>
                <td><input type = "text" name = "nik" required><br></td>
            </tr>

            <tr>
                <td>Jenis Kelamin </td>
                <td> :</td>
                <td><input type = "radio" name = "jk" value = "Laki - laki">
                Laki - laki
                <input type = "radio" name = "jk" value = "Perempuan">
                Perempuan</td>
            </tr>

            <tr>
                <td>Agama </td>
                <td> :</td>
                <td><select name = "agama">
                <option value = " ">Agama</option>
                <option value = "Islam">Islam</option>
                <option value = "Protestan">Protestan</option>
                <option value = "Katolik">Katolik</option>
                <option value = "Hindu">Hindu</option>
                <option value = "Budha">Budha</option>
                <option value = "Konghucu">Konghucu</option>
                </select></td>
            </tr>

            <tr>
                <td>Nama Mobil </td>
                <td> :</td>
                <td><input type = "text" name = "mobil" required></td>
            </tr>

            <tr>
            <td>Jenis Mobil </td>
            <td> :</td>
            <td><select name = "jm">
                <option value = " ">Pilih Jenis Mobil</option>
                <option value = "sedan">Sedan</option>
                <option value = "muv">Mobilio</option>
                <option value = "suv">Xenia</option>
                <option value = "or">Avanza</option>
                </select></td>
            </tr>

            <tr>
            <td>Merk Mobil </td>
            <td> :</td>
            <td><select name = "merek">
                <option value = " ">Pilih Merk Mobil</option>
                <option value = "toyota">Toyota</option>
                <option value = "nissan">Nissan</option>
                <option value = "suzuki">Suzuki</option>
                <option value = "daihatsu">Daihatsu</option>
                </select></td>
            </tr>

            <tr>
                <td>No Plat Mobil </td>
                <td> :</td>
                <td><input type = "text" name = "no" required></td>
            </tr>

            <tr>
            <td>Tanggal Peminjaman </td>
            <td> :</td>
            <td><input type="date" name = "pinjam" required></td>
            </tr>

            <tr>
            <td>Tanggal Kembali </td>
            <td> :</td>
            <td><input type="date" name = "kembali" required></td>
            </tr>

            <tr>
            <td>Penjamin </td>
            <td> :</td>
            <td><select name = "penjamin">
                <option value = " ">Pilih Penjamin</option>
                <option value = "ktp">FC KTP</option>
                <option value = "sim">FC SIM</option>
                <option value = "kk">FC KK</option>
                </select></td>
            </tr>

            <tr>
            <td>Supir </td>
            <td> :</td>
            <td><select name = "supir">
                <option value = " ">Pilih Menggunakan Supir</option>
                <option value = "ya">Ya</option>
                <option value = "tidak">Tidak</option>
                </select></td>
            </tr>

            <tr>
            <td><input type = "submit" name = "input" value = "Input">
            <input type = "reset" name = "reset" value = "Reset"></td>
            </tr>
            </table>
        </fieldset>
        </FORM>
    </body>
</html>