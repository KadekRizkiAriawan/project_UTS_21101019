<?php

if(isset($_POST["txSIMPAN"])){
    $pdata["KODE"] = $_POST["txKODE"];
    $pdata["NAMA"] = $_POST["txNAMA"];
    $pdata["STOK"] = $_POST["txSTOK"];
    $pdata["TANGGAL"] = $_POST["txTANGGAL"];
    include_once("crud.php");
    insertdata($pdata);
    header("location:tampildata.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="fw-bold my-4">Insert Data Tabel Barang </h1>
        <form action="" method="POST">
            KODE BARANG
            <div>
                <input type="text" name="txKODE" class="form-control form-control">
            </div>
            NAMA BARANG
            <div>
                <input type="text" name="txNAMA" class="form-control form-control">
            </div>
            STOK BARANG
            <div>
                <input type="text" name="txSTOK" class="form-control form-control">
            </div>
            TANGGAL MASUK
            <div>
                <input type="date" name="txTANGGAL" class="form-control form-control">
            </div>
            <br>
            <div class="input-group">
                <button type="submit" class="insert btn btn-primary" name="txSIMPAN">TAMBAH</button>
            </div>
        </form>
    </div>
</body>
</html>