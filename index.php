<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <!-- <style type="text/css"> -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <header>
        <h2>Pendaftaran Siswa Baru</h2>
        <h1>SMK Coding</h1>
    </header>

    <hr class="line">
    
    <div class="menu">
        <h4>Menu</h4>
        <nav>
            <a class="button" href="form-daftar.php">Daftar Baru</a><br>
            <a class="button" href="list-siswa.php">Pendaftar</a>
        </nav>
    </div>

    <div class="footer">
        <p>&copy 2023 - SMK Coding</p>
    </div>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>

    </body>

</div>
</html>