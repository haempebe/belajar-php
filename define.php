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
    // $fungsi ="ini adalah cetakan hasil fungsi const dari fungsi";
    define("fungsi", "ini adalah cetakan hasil fungsi const dari fungsi");
    echo fungsi;

    echo "<br>";
    // define const array
    // php = array("array1", "array2") / ["array1", "array2"]
    echo "\n";
    define("arrayKelas", ["kelas X", "kelas Xi", "kelas Xii"]);
    print_r(arrayKelas);
    
    echo "<br>";    
    // define const function global
    define("global", "berisikan tentang value global function");
    function globalFunction()
    {
        echo global;
    }
    globalFunction();

    ?>
</body>
</html> 