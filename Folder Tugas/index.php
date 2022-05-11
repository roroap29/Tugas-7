<!DOCTYPE html>
<html>

<head>
    <title>List Pegawai pada PT XYZ</title>
</head>

<body>
    <header>
        <h3>List Pegawai</h3>
        <h1>PT XYZ</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form.php">Input data baru</a></li>
            <li><a href="list-pegawai.php">List Pegawai</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Input data baru berhasil!";
            } else {
                echo "Input data gagal!";
            }
        ?>
    </p>
    <?php endif; ?>

</body>

</html>