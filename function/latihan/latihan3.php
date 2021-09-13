<html>
    <body>
        <FORM ACTION = "pro3.php" METHOD = "POST" NAME = "simpan">
            <table>
                <tr>
                    <td>Nama </td>
                    <td> : <input type = "text" name = "nama" required></td>
                </tr>

                <tr>
                    <td>Jenis Kelamin </td>
                    <td> : 
                        <input type = "radio" name = "jk" value = "Laki - laki" checked>
                        Laki - laki
                        <input type = "radio" name = "jk" value = "Perempuan">
                        Perempuan </td>
                </tr>

                <tr>
                    <td>Tanggal Lahir </td>
                    <td> : <input type = "date" name = "lahir" required></td>
                </tr>

                <tr>
                    <td>Agama </td>
                    <td> : 
                        <select name = "agama">
                        <option value = " "></option>
                            <option value = "Islam">Islam</option>
                            <option value = "Protestan">Protestan</option>
                            <option value = "Katolik">Katolik</option>
                            <option value = "Hindu">Hindu</option>
                            <option value = "Budha">Budha</option>
                            <option value = "Konghucu">Konghucu</option>
                        </select></td>
                </tr>

                <tr>
                    <td>Alamat </td>
                    <td> <Textarea name = "alamat" cols = "20" rows = "10" required></textarea></td>
                </tr>
           
                <tr>
                    <td>Hobi </td>
                    <td><input type = "checkbox" name = "1" value = "Memasak" checked> Memasak  
                        <input type = "checkbox" name = "2" value = "Main Game"> Main Game 
                        <input type = "checkbox" name = "3" value = "Mewarnai"> Mewarnai <br>
                        <input type = "checkbox" name = "4" value = "Membaca"> Membaca 
                        <input type = "checkbox" name = "5" value = "Menonton Film"> Menonton Film 
                        <input type = "checkbox" name = "6" value = "Bermain"> Bermain
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type = "submit" name = "simpan" value = "Simpan">
                    </td>
                </tr>
            </table>
        </FORM>
    </body>
</html>