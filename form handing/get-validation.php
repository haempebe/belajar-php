<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP form handing</title>
</head>

<body>
    <?php 

    // back to null
    $namaLengkap  = "";
    $kelas = '';

    // message error required
    $namaLengkapError = '';
    $kelasError = '';


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // $namaLengkap = dataType($_POST['namaLengkap']);
        // $kelas = dataType($_POST['kelas']);
        if(empty($_POST['namaLengkap'])){
            $namaLengkapError = "Nama Lengkap tidak boleh kosong, harus diisikan.";
        }else{
            $namaLengkap = dataType($_POST['namaLengkap']);
        }
        if(empty($_POST['kelas'])){
            $kelasError = "Kelas tidak boleh kosong, harus diisikan.";
        }else{
            $kelas = dataType($_POST['kelas']);
        }
    }

    function dataType($dataKelas)
    {
        $inputData = trim($dataKelas);
        $inputData = stripslashes($dataKelas);
        $inputData = htmlspecialchars($dataKelas);
        return $inputData;
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div style="margin-bottom: 3px;">
            <label for="USERNAME" >USERNAME</label>
            <input type="TEXT" id="USERNAME" name="namaLengkap" placeholder="Masukan nama anda" />
            <span style="color: red; font-size:10px"><?php echo $namaLengkapError; ?></span>
        </div>
        <div style="margin-bottom: 3px;">
            <label for="kelas" >kelas</label>
            <input type="number" id="kelas" name="kelas" placeholder="masukkan kelas anda" />
            <span style="color: red; font-size:10px"><?php echo $kelasError; ?></span>
        </div>
        <input type="submit" value="Simpan">
    </form>

    <?php
    echo "<br>";
    echo "Nama Lengkap Saya " . $namaLengkap;
    echo "<br>";
    echo "kelas saya " . $kelas;
    ?>

    <?php echo "<br>" . "today is " . date("d M Y"); ?>
    <br>
    <?php include './include.php' ?>
</body>

</html>
