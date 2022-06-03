<?php

function insertdata($pdata){

    $sqlINSERT = "INSERT INTO barang (kode_barang, nama_barang, stok_barang) 
    VALUES('".$pdata["KODE"]."', '".$pdata["NAMA"]."', '".$pdata["STOK"]."','".$pdata["TANGGAL"]."');";
    include_once("koneksi2.php");
    $hsl = mysqli_query($cnn, $sqlINSERT);
    return $hsl;
}


function updatedata($pdata){
    $sql = "UPDATE barang SET
        kode_barang = '".$pdata["KODE2"]."',
        nama_barang = '".$pdata["NAMA"]."',
        stok_barang = '".$pdata["STOK"]."',
        tanggal_masuk = '".$pdata["TANGGAL"]."'
        WHERE kode_barang = '".$pdata["KODE1"]."';";
    include_once("koneksi2.php");
    $hsl = mysqli_query($cnn, $sql);
    return $hsl;
}


function tampildata(){
    include_once("koneksi2.php");
    $sql = "SELECT * FROM barang;";
    $hsl = mysqli_query($cnn,$sql);
    $hsl1 = "";
    $i = 1;
    while($h = mysqli_fetch_array($hsl)){
        $hsl1 .= '<tr>
        <td class="text-center">'.$i.'</td>
        <td class="text-center">'.$h["kode_barang"].'</td>
        <td class="text-center">'.$h["nama_barang"].'</td>
        <td class="text-center">'.$h["stok_barang"].'</td>
        <td class="text-center">'.$h["tanggal_masuk"].'</td>
        <td class = "text-center">
            <a class="btn btn-primary px-3 fw-bold" href="edit.php?kode='.$h["kode_barang"].'">Edit</a>
        </td>
        <td class = "text-center">
            <a class="btn btn-danger px-3 fw-bold" href="delete.php?kode='.$h["kode_barang"].'" onClick=\'return confirm("Hapus Data?");\'>Delete</a>
        </td>
    </tr>';
    $i++;
    }
    return $hsl1;
}