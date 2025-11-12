<!DOCTYPE html>
<html>
<head>
    <title>Hitung Upah Karyawan</title>
</head>
<body>
    <h2>Perhitungan Upah Karyawan Honorer</h2>
    <form method="post">
        Masukkan jumlah jam kerja selama satu minggu: 
        <input type="number" name="jamKerja" required>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['jamKerja'])) {
        $jamKerja = $_POST['jamKerja'];
        $upahPerJam = 2000;
        $upahLemburPerJam = 3000;
        $batasJamNormal = 48;

        if ($jamKerja > $batasJamNormal) {
            $jamLembur = $jamKerja - $batasJamNormal;
            $totalUpah = ($batasJamNormal * $upahPerJam) + ($jamLembur * $upahLemburPerJam);
        } else {
            $totalUpah = $jamKerja * $upahPerJam;
        }

        echo "<p>Total upah yang diterima adalah <strong>Rp " . number_format($totalUpah, 0, ',', '.') . "</strong></p>";
    }
    ?>
</body>
</html>
