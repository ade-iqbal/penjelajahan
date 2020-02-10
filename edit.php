<?php
require 'functions.php';

    $id = $_GET["id"];
    
    $ubah = query("SELECT*FROM sewa_barang WHERE id = $id")[0];

    if ( isset($_POST["update"]) ) {

        if ( edit($_POST) > 0) {
            echo "<script>alert('Data berhasil diubah') 
            document.location.href = 'sewabarang.php'
            </script>";
        } 
        else {
            echo "<script>alert('Data gagal diubah')
            document.location.href = 'sewabarang.php'
            </script>";
        }
    }
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <style>
        .tambah {
            margin-left: 41.5%;
            margin-right: 41%;
            margin-top: 30pxpx;
            width: 190px;
            height: 270px;
            padding: 20px;
            box-shadow: 10px 10px 30px blue;
            border-radius: 10px;
            background-image: linear-gradient(purple, blueviolet);
            color: yellowgreen;
        }
        
        h1 {
            text-align: center;
            font-variant: small-caps;
            text-shadow: 3px 3px blue;
            color: purple;
            font-size: 40px;
            margin-top: 45px;
        }

        button{
            margin-top: 10px;
            background-color: teal;
            float: right;
            margin-right: 20px;
            box-shadow: 2px 2px blue;
            border-radius: 20px;
            height: 30px;
            width: 100px;
        }

    </style>
</head>

<body>
    <div>

        <h1>Edit Data</h1>
    </div>

    <div class="tambah">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $ubah["id"]; ?>">
            <tr>
                <label for="peminjam">Nama Peminjam</label>
                <input type="text" id="peminjam" name="peminjam" required value="<?= $ubah["peminjam"]; ?>">
            </tr> <br>
            <tr>
                <label for="email">Email Peminjam</label>
                <input type="text" id="email" name="email" required value="<?= $ubah["email"]; ?>">
            </tr> <br>
            <tr>
                <label for="barang">Nama Barang</label>
                <input type="text" id="barang" name="barang" required value="<?= $ubah["barang"]; ?>">
            </tr> <br>
            <tr>
                <label for="lama">Lama Peminjaman</label>
                <input type="text" id="lama" name="lama" required value="<?= $ubah["lama"]; ?>">
            </tr> <br>
            <tr>
                <label for="ambil">Tanggal Pengambilan</label>
                <input type="date" id="ambil" name="ambil" required value="<?= $ubah["ambil"]; ?>">
            </tr> <br>
            <tr>
                <label for="kembali">Tanggal Pengembalian</label>
                <input type="date" id="kembali" name="kembali" required value="<?= $ubah["kembali"]; ?>">
            </tr> <br>
            <tr>
                <button type="submit" name="update">Update</button>
            </tr>
        </form>
    </div>
</body>

</html>