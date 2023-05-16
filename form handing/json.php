<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>json PHP</title>
</head>
<body>
    <?php
    // json encode
    $kelas = array(
        'x' => 'kelas x',
        'xi' => 'kelas xi',
        'xii' => 'kelas xii',
        'xiii' => 'kelas xiii',
        'xiv' => 'kelas xiv',
    );
    foreach ($kelas as $array) {
        echo $array . "<br>";
    }
    echo json_encode($kelas);

    echo '<br>';

    $kelasDecode = '{"x" : 1, "xi" : 2, "xii" : 3, "xiii" : 4, "xiv" : 5}';
    
    var_dump(json_decode($kelasDecode));

    echo "<br>";
        
    $obj = json_decode($kelasDecode);
    print $obj->{'x'};

    ?>
</body>
</html>