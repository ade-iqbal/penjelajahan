<?php 
require 'functions.php';

$isi = query("SELECT * FROM daftar_barang");

?>

<!DOCTYPE html>

<head>
    <title>Daftar Barang</title>
    <style>

        body {
            background-image: url("images/photo-1545.jpg"); 
        }
        
        .border {
            width: 650px;
            border-collapse: collapse;
            border-color: teal;
            text-align: center;
            margin-left: 330px;
            background-color: rgb(0, 153, 255);
            margin-top: -100px
        }
        
        th {
            background-color: blue;
        }
        
        td:hover {
            background-color: yellowgreen;
        }
        
        h1 {
            text-align: center;
            margin-top: 40px;
            color: whitesmoke;
        }

        .button{
            background-color: limegreen;
            border-radius: 15px;
            margin-top: 20px;
            height: 35px;
        }

        a{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-style: italic;
            text-decoration: none;
        }

        button{
            box-shadow: 3px 2px black;
            
        }

    </style>
</head>

<body>
    <div>
        <h1 style="font-variant: small-caps;">Daftar Barang Penjelajahan</h1>
    </div>

    <div>
            <form action="tambah.php">
                <button class="button">Tambah Barang</button>
            </form>
            <form action="sewabarang.php">
                <button class="button">Kembali</button>
            </form> 
    </div>
    
    <div id="text">
        <table border="1" class="border" cellpadding="5">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga Sewa (Per Malam)</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>

            <?php $i=1;?>
            <?php foreach ($isi as $row){?>

            <tr>
                <td><?= $i;?></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['harga'];?></td>
                <td><?= $row['keterangan'];?></td>
                <td>
                    <a href="hapus2.php?id=<?= $row['id']?>" style="color: red" onclick="return confirm('Apakah anda tetap akan menghapus data?')">Hapus</a>
                </td>
                <?php $i++; ?>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>