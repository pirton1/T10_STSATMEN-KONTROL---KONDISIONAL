<!DOCTYPE html>
<html>
<head>
    <title>Jumlah Hari dalam Bulan Ini</title>
</head>
<body>
    <h2>Menentukan Jumlah Hari dalam Bulan Saat Ini</h2>

    <?php
    $bulan = date("n");
    $tahun = date("Y");

    $namaBulan = date("F");

    switch ($bulan) {
        case 1:  
        case 3:  
        case 5:  
        case 7:  
        case 8:  
        case 10: 
        case 12: 
            $jumlahHari = 31;
            break;

        case 4:  
        case 6:  
        case 9:  
        case 11: 
            $jumlahHari = 30;
            break;

        case 2:  
            if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
                $jumlahHari = 29;
            } else {
                $jumlahHari = 28;
            }
            break;

        default:
            $jumlahHari = 0;
            break;
    }

    echo "<p>Bulan saat ini adalah <strong>$namaBulan ($bulan)</strong>.</p>";
    echo "<p>Jumlah hari dalam bulan ini: <strong>$jumlahHari hari</strong>.</p>";
    ?>
</body>
</html>
