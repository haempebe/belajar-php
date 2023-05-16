<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM HANDLING</title>
</head>

<body>
    <!-- metode get -->
    <!-- <form action="./get-data.php" method="get">
        <div style="margin-bottom: 3px;">
            <label for="USERNAME" >USERNAME</label>
            <input type="TEXT" id="USERNAME" name="username" placeholder="Masukan nama anda" />
        </div>
        <div style="margin-bottom: 3px;">
            <label for="kelas" >kelas</label>
            <input type="number" id="kelas" name="kelas" placeholder="masukkan kelas anda" />
        </div>
        <input type="submit" value="Simpan">
    </form> -->

    <!-- metode POST -->
    <form action="./get-data.php" method="POST">
        <div style="margin-bottom: 3px;">
            <label for="USERNAME" >USERNAME</label>
            <input type="TEXT" id="USERNAME" name="username" placeholder="Masukan nama anda" />
        </div>
        <div style="margin-bottom: 3px;">
            <label for="kelas" >kelas</label>
            <input type="number" id="kelas" name="kelas" placeholder="masukkan kelas anda" />
        </div>
        <input type="submit" value="Simpan">
    </form>

</body>

</html>