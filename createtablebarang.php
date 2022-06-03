<?php

include_once("koneksi2.php");

$sql = "CREATE TABLE barang(
    kode_barang varchar(8) PRIMARY KEY, 
    nama_barang varchar(20),
    stok_barang int(10),
    tanggal_masuk date);";
$hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Tabel barang <strong>BERHASIL</strong> Dibuat<br>";
    }else{
        echo "Tabel barang <strong>GAGAL</strong> Dibuat<br>";
    }

mysqli_close($cnn);