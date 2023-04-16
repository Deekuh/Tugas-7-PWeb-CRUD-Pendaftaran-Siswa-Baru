<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>Formulir Pendaftaran Siswa Baru</h2>
    </header>

    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <table>
            <tr>
                <td><label for="nama">Nama: </label></td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap" /></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat: </label></td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin">Jenis Kelamin: </label></td>
                <td><label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label></td>
            </tr>
            <tr>
                <td><label for="agama">Agama: </label></td>
                <td><select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="sekolah_asal">Sekolah Asal: </label></td>
                <td><input type="text" name="sekolah_asal" placeholder="Nama Sekolah" /></td>
            </tr>
            </table>
        
            <div class="daftar">
                <input type="submit" value="Daftar" name="daftar" />
            </div>
            
        </fieldset>
    </form>
    

    </body>
</html>