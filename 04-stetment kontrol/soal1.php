<!DOCTYPE html>
<html>
<head>
    <title>Cek Tahun Kabisat</title>
</head>
<body>
    <h2>Cek Tahun Kabisat</h2>
    <form method="post">
        Masukkan Tahun: <input type="number" name="tahun" required>
        <input type="submit" value="Cek">
    </form>

    <?php
    if (isset($_POST['tahun'])) {
        $tahun = $_POST['tahun'];

        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            echo "<p><strong>$tahun</strong> adalah tahun kabisat.</p>";
        } else {
            echo "<p><strong>$tahun</strong> bukan tahun kabisat.</p>";
        }
    }
    ?>
</body>
</html>
