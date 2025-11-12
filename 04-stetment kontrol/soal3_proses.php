<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Upah</title>
</head>
<body>
    <h2>Hasil Perhitungan Upah Karyawan</h2>

    <?php
    if (isset($_POST['jamKerja']) && isset($_POST['golongan'])) {
        $jamKerja = $_POST['jamKerja'];
        $golongan = $_POST['golongan'];

        switch ($golongan) {
            case 'A': $upahPerJam = 4000; break;
            case 'B': $upahPerJam = 5000; break;
            case 'C': $upahPerJam = 6000; break;
            case 'D': $upahPerJam = 7500; break;
            default: $upahPerJam = 0; break;
        }

        $upahLemburPerJam = 3000;
        $batasJamNormal = 48;

        if ($jamKerja > $batasJamNormal) {
            $jamLembur = $jamKerja - $batasJamNormal;
            $totalUpah = ($batasJamNormal * $upahPerJam) + ($jamLembur * $upahLemburPerJam);
        } else {
            $totalUpah = $jamKerja * $upahPerJam;
        }

        echo "<p>Golongan: <strong>$golongan</strong></p>";
        echo "<p>Jumlah Jam Kerja: <strong>$jamKerja jam</strong></p>";
        echo "<p>Total Upah: <strong>Rp " . number_format($totalUpah, 0, ',', '.') . "</strong></p>";
    } else {
        echo "<p>Data belum lengkap.</p>";
    }
    ?>

    <a href="index.html">← Kembali</a>
</body>
</html>
