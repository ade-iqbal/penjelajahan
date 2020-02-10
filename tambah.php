<?php
require 'functions.php';

	if (isset($_POST['tambah'])) {
        $nama= htmlspecialchars($_POST['nama']);
        $harga= htmlspecialchars($_POST['harga']);
        $ket= htmlspecialchars($_POST['ket']);
        $query=mysqli_query($conn, "INSERT INTO daftar_barang VALUES('','$nama','$harga','$ket')");

        if ( mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('Data berhasil ditambahkan')
                  document.location.href = 'sewabarang.php'
            </script>";
        } 
        else {
            echo"<script>alert('Data yang anda masukkan salah')</script>";
        }

    }
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Barang</title>
    <style>
        .tambah {
            margin-left: 42%;
            margin-right: 41%;
            margin-top: 30pxpx;
            width: 185px;
            height: 150px;
            padding: 20px;
            box-shadow: 10px 10px 30px orange;
            border-radius: 10px;
            background-image: linear-gradient(lime, yellowgreen);
        }
        
        h1 {
            text-align: center;
            font-variant: small-caps;
            text-shadow: 2px 2px yellowgreen;
            color: green;
            font-size: 40px;
            margin-top: 45px;
        }

        button {
            margin-top: 10px;
            background-color: yellow;
            float: right;
            margin-right: 16px;
            box-shadow: 2px 2px ;
            border-radius: 20px;
            height: 30px;
            width: 100px;
        }

    </style>
</head>

<body>
    <div>
        <h1>Tambah Data</h1>
    </div>

    <div class="tambah">
        <form action="" method="post">
            <tr>
                <label for="nama">Nama Barang</label>
                <input type="text" id="nama" name="nama" required>
            </tr> <br>
            <tr>
                <label for="harga">Harga Barang</label>
                <input type="number" id="harga" name="harga" required>
            </tr> <br>
            <tr>
                <label for="ket">Keterangan</label>
                <input type="text" id="ket" name="ket" required>
            </tr> <br>
            <tr>
                <button type="submit" name="tambah">Tambah</button>
            </tr>
        </form>
    </div>
</body>

</html>