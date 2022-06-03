<?php

    if(isset($_GET["kode"])){
        include_once("koneksi2.php");
        $kode = $_GET["kode"];
        $sql = "SELECT * FROM barang WHERE kode_barang='".$kode."';";
        $hsl = mysqli_query($cnn, $sql);
        $h = mysqli_fetch_array($hsl);
    }

    if(isset($_POST["txSIMPAN"])){
        $pdata["KODE1"] = $_POST["txKODELAMA"];
        $pdata["KODE2"] = $_POST["txKODE"];
        $pdata["NAMA"] = $_POST["txNAMA"];
        $pdata["STOK"] = $_POST["txSTOK"];
        $pdata["TANGGAL"] = $_POST["txTANGGAL"];
        

        include_once("crud.php");
        updatedata($pdata);
        header("location:tampildata.php");
    }
?>


        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Data </title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        </head>


        <body>
        <div class="container">
                <h1 class="my-3 fw-bold ">Edit Data Tabel Barang</h1>
                <form action="edit.php" method="POST">
                    <input type="hidden" name="txKODELAMA" value="<?=$h['kode_barang'];?>">
                    KODE BARANG
                    <div>
                         <input type="text" class="form-control form-control" name="txKODE" value="<?=$h['kode_barang'];?>">
                    </div>        
                    NAMA BARANG
                    <div>
                        <input type="text" class="form-control form-control" name="txNAMA" value="<?=$h["nama_barang"];?>">
                    </div>
                    STOK BARANG
                    <div>
                        <input type="text" class="form-control form-control" name="txSTOK" value="<?=$h["stok_barang"];?>">
                    </div>
                    TANGGAL MASUK
                    <div>
                        <input type="date" class="form-control form-control" name="txSTOK" value="<?=$h["tanggal_masuk"];?>">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success" name="txSIMPAN">Save</button>  
                    <a href="tampildata.php" class="btn btn-danger ms-3">Back</a>
                         
                </form>
            </div>
        </body>
        </html>