<?php

require_once "konversi.php";
if (isset($_POST['submit'])){
    $hasil = convertsize($_POST);
    $pilihan_size = $_POST['pilihan_size'];
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konversi Size Dektra</title>
</head>
<body>
<form action="" method="post">
    <h4>Konversi Satuan Size</h4>
    
        Masukkan Jumlah Angka (dalam Byte) <label for="valsize"><input type="text"  name="valsize"><br><br></label>
        Konversi: <br>
       <label for="Kilobyte"><input type="radio" name="pilihan_size"  value="Kilobyte" >Kilobyte<br></label> 
       <label for="Megabyte"> <input type="radio" name="pilihan_size" value="Megabyte" >Megabyte<br></label>
       <label for="Gigabyte"><input type="radio" name="pilihan_size" value="Gigabyte" >Gigabyte<br><br></label>
       <input type="submit" name="submit" value="Konversi" >
    </form>
    <?php
    
        if(isset($hasil)) :
    
    ?>
        <h3>
            Hasil Konversi ke <?=$pilihan_size;?> adalah <?=$hasil;?>
        </h3>
        <?php endif;?>
</body>
</html>