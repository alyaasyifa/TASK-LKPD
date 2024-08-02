<!DOCTYPE html>
<html>
<head>
    <title>Konversi Detik ke Jam-Menit-Detik</title>
</head>
<body>
    <form method="post" action="">
        Total Detik: <input type="number" name="total_detik" required>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $total_detik = intval($_POST['total_detik']); //intval mengkonversi nilai string menjadi integer
        
        $jam = floor($total_detik / 3600); //floor membulatkan hasil
        $sisa_detik = $total_detik % 3600;
        $menit = floor($sisa_detik / 60);
        $detik = $sisa_detik % 60;

        echo "<p>Hasil Konversi:</p>";
        echo "$jam jam, $menit menit, $detik detik";
    }
    ?>
</body>
</html>
