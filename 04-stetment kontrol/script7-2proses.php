<!DOCTYPE html>
<html>
<head>
    <title>Mencari Status Bilangan</title>
</head>
<body>
<h1>Mencari Status Bilangan</h1>

<?php
if (isset($_POST['bil'])) {
    $bilangan = $_POST['bil'];

    // cara ke - 1
    if ($bilangan > 0)
        echo "<p>Cara ke-1: Bilangan ".$bilangan." adalah positif</p>";
    else if ($bilangan < 0)
        echo "<p>Cara ke-1: Bilangan ".$bilangan." adalah negatif</p>";
    else
        echo "<p>Cara ke-1: Bilangan ".$bilangan." adalah nol</p>";

    // cara ke - 2
    if ($bilangan > 0)
        $status = "positif";
    else if ($bilangan < 0)
        $status = "negatif";
    else
        $status = "nol";

    echo "<p>Cara ke-2: Bilangan ".$bilangan." adalah bilangan ".$status."</p>";
} else {
    echo "<p style='color:red;'>Silakan isi bilangan melalui form terlebih dahulu.</p>";
}
?>

</body>
</html>