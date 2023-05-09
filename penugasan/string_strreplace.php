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

    $kosakata = "Kita sedang belajar javascript";
    echo "kosakata sebelum di ubah: " . $kosakata;
    echo "\n";
    echo "kosakata setelah di ubah: " . str_replace("javascript", "php", $kosakata);

    ?>
</body>
</html>