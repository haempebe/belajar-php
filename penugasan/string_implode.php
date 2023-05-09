<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
    // nomor 1
    $kelompok = array("Bintang", "Arya", "Arif", "Syahru");
    $implode = implode("/", $kelompok);
    echo "1." . $implode;  
    // nomor 2
    echo "\n";
    $kelompok = array("html", "css", "javascript", "php");
    $implode = implode("-", $kelompok);
    echo "2." . $implode; 
    ?>
</body>
</html>