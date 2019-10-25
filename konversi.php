<?php
function convertsize($data)
 {
    $nilai_kuota = $data['valsize'];
    $pilihan = $data['pilihan_size'];
    
    switch ($pilihan){
        case "Kilobyte":
            $hasil =  $nilai_kuota / 1024;
            break;
        case "Megabyte":
            $hasil =  $nilai_kuota / 1024 / 1024;
            break;
        case "Gigabyte":
            $hasil = $nilai_kuota / 1024 / 1024 / 1024;
            break;
        default:
            $hasil = "NULL";
            break;
    }
  return $hasil;
 }
?>  