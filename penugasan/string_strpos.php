<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP </title>
</head>
<body>
    <?php
    // nomor 1
        $strPos = "Saat ini saya sudah mencapai materi php.";
        $searchStrPos = "php";
        $tidakBerhasil = "javascript";
        echo "1. A. ber-hasil : " . strpos($strPos, $searchStrPos);
        echo "\n";
        echo "B. tidak berhasil : " . strpos($strPos, $tidakBerhasil);
        // nomor 2
        echo "\n";
        $kalimat2 = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan strpos.";
        $dicari = "belajar php string";
        $tidakBerhasil2 = "strlen";
        echo "2. A. ber-hasil : " . strpos($kalimat2, $dicari);
        echo "\n";
        echo "B. tidak berhasil : " . strpos($kalimat2, $tidakBerhasil2);
    ?>
</body>
</html>