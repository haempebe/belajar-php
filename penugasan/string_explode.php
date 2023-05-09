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
    echo "1.)  ";
    $stringTunggal = "syahru,ilham,farhan,alam";
    $explode = explode(",", $stringTunggal);
    print_r($explode); 
    // nomor 2
    echo "\n";
    echo "2.)  ";
    $stringTunggal2 = "html-css-javascript-php";
    $explode = explode("-", $stringTunggal2);
    print_r($explode);
    
    ?>
</body>
</html>