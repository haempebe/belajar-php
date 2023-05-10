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
    // if else
    $nilai = 90;

    if ($nilai >= 70) {
        echo "Selamat nilai anda diatas KKM : " . $nilai;     
    } else {
        echo "nilai anda dibawah KKM : " . $nilai . "'terus giat belajar lagi'";
    }   

    //elseif
    echo "<br>";
    echo "<br>";
    $jam = 10;

    if ($jam <= 10){
        echo "selamat pagi";
    }elseif ($jam <= 15){
        echo "selamat siang";
    }elseif ($jam <= 20){
        echo "selamat sore";
    }else {
        echo "selamat malam";
    }

    // elseif 
    echo "<br>";
    echo "<br>";
    $nilaiTugas = 90;

    if ($nilaiTugas <= 90){
        echo "Selamat, kamu nilainya bagus! (A)";
    }elseif ($nilaiTugas <= 85){
        echo "Selamat, kamu nilainya cukup bagus! (A-)";
    }elseif ($nilaiTugas <= 80){
        echo "Selamat, kamu nilainya cukup (B)";
    }else {
        echo "Selamat, kamu nilainya kurang bagus! (C)";
    }

    // Switch
    echo "<br>";
    echo "<br>";
    $hari = 'senin';
    switch ($hari) {
        case 'senin':
            echo "Hari ini adalah hari senin";
            break;
        case 'selasa':
            echo "Hari ini adalah hari selasa";
            break;
        case 'rabu':
            echo "Hari ini adalah hari rabu";
            break;
        case 'kamis':
            echo "Hari ini adalah hari kamis";
            break;
        case 'jumat':
            echo "Hari ini adalah hari jum'at";
            break;
        case 'sabtu':
            echo "Hari ini adalah hari sabtu";
            break;
        case 'ahad':
            echo "Hari ini adalah hari ahad";
            break;
        
        default:
            
            break;
    }

    ?>
</body>
</html>