<?php 
require 'functions.php';

$isi = query("SELECT * FROM daftar_barang");

	if (isset($_POST['sewa'])) {
        $peminjam= htmlspecialchars($_POST['peminjam']);
        $email= htmlspecialchars($_POST['email']);
        $barang= htmlspecialchars($_POST['barang']);
        $lama= htmlspecialchars($_POST['lama']);
        $ambil= htmlspecialchars($_POST['ambil']);
        $kembali= htmlspecialchars($_POST['kembali']);
        $query=mysqli_query($conn, "INSERT INTO sewa_barang VALUES('','$peminjam','$email','$barang','$lama','$ambil', '$kembali')"); 

        if ( mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('Barang berhasil disewa');</script>";
        } 
        else {
            echo"<script>alert('Barang yang anda sewa gagal ditambahkan')</script>";
        }

    }

?>

<!DOCTYPE html>

<head>
    <title>Daftar Barang</title>
    <style>

        body {
            background-image: url("images/photo-1541753236788-b0ac1fc5009d.jpg"); 
            background-repeat: no-repeat;
        }
        
        .border {
            width: 650px;
            border-collapse: collapse;
            border-color: red;
            text-align: center;
            margin-left: 230px;
            background-color: rgb(16, 121, 241);
            
        }

        .btn{
            float: right;
            margin-top: -305px;
            margin-right: 280px;
        }
        
        th {
            background-color: rgb(0, 153, 255);
        }
        
        td:hover {
            background-color: yellowgreen;
        }
        
        h1 {
            text-align: center;
            margin-top: 40px;
        }

        #button{
            margin-top: -5px;
            background-color: limegreen;
            border-radius: 15px;
        }
    
        #text{
            float: left;
            height: 300px;
            overflow: auto;
            margin-right: 430px;
            margin-left: -65px;
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

    <div id="text">
        <table border="1" class="border" cellpadding="5">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga Sewa (Per Malam)</th>
                <th>Keterangan</th>
            </tr>

            <?php $i=1;?>
            <?php foreach ($isi as $row){?>

            <tr>
                <td><?= $i;?></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['harga'];?></td>
                <td><?= $row['keterangan'];?></td>
                <?php $i++; ?>
            </tr>
            <?php } ?>
        </table>
    </div>

    <div class="btn">
        <table>
            <form action="" method="post">
                <label for="peminjam">Nama Peminjam</label> <br>
                <input type="text" id="peminjam" name="peminjam" required> <br>
                <label for="email">Email Peminjam</label> <br>
                <input type="text" id="email" name="email" required> <br>
                <label for="barang">Nama Barang</label> <br>
                <input type="text" id="barang" name="barang" required> <br>
                <label for="lama">Lama Peminjaman (malam)</label> <br>
                <input type="number" id="lama" name="lama" required> <br>
                <label for="ambil">Tanggal Pengambilan</label> <br>
                <input type="date" id="ambil" name="ambil" required> <br>
                <input type="hidden" id="kembali" name="kembali" readonly="" placeholder="Diisi setelah dikembalikan"> <br>
                <button type="submit" name="sewa" style="width: 100px; height: 35px;" id="button">Sewa Barang</button>
            </form>
            <form action="index.php">
                <button style="width: 65px; height: 35px; margin-left:5px" name="logout" id="button">Logout</button>
            </form>
        </table>

    </div>
</body>

</html>