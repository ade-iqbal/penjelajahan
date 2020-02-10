<?php 
require 'functions.php';

$isi = query("SELECT * FROM sewa_barang");

?>
<!DOCTYPE html>

<head>
    <title>Sewa Barang</title>
    <style>

        body {
            background-image: url("images/photo-1542856391-010fb87dcfed.jpg"); 
            background-repeat: no-repeat;
        }

        .tabel {
            border-collapse: collapse;
            background-color: lightblue;
            text-align: center;
            margin: 20px 100px 20px;
        }
        
        h1 {
            font-variant: small-caps;
            text-align: center;
            margin-top: 40px;
        }
        
        th {
            background-color: lightgreen;
        }

        a{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-style: italic;
            text-align: center;
            text-decoration: none;
        }

        .tombol {
            margin-top: 10px; 
            margin-left: 950px;
        }

        @media print {
            .tombol, .pilihan {
                display: none;
                margin: auto;   
            }
            
        }

    </style>
</head>

<body>
    <div>
        <h1>Daftar Penyewaan Barang</h1>
    </div>

    <div>
        <table border="1" class="tabel" cellpadding="5">
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Email Peminjam</th>
                <th>Nama Barang</th>
                <th>Lama Peminjaman</th>
                <th>Tanggal Pengambilan</th>
                <th>Tanggal Pengembalian</th>
                <th class="pilihan">Aksi</th>
            </tr>

            <?php $i=1;?>
            <?php foreach ($isi as $row){?>

            <tr>
                <td><?= $i;?></td>
                <td><?= $row['peminjam'];?></td>
                <td><?= $row['email'];?></td>
                <td><?= $row['barang'];?></td>
                <td><?= $row['lama'];?></td>
                <td><?= $row['ambil'];?></td>
                <td><?= $row['kembali'];?></td>
                <td class="pilihan"><a href="edit.php?id=<?= $row['id']?>" style="color: green">Ubah</a> | 
                <a href="hapus.php?id=<?= $row['id']?>" style="color: red" onclick="return confirm('Apakah anda tetap akan menghapus data?')">Hapus</a></td>
                <?php $i++; ?>
            </tr>
            <?php } ?>
        </table>
    </div>

    <div class="tombol">
        <table>
            <form action="adminbarang.php">
                <button type="submit">Daftar Barang</button>
            </form>
            <form action="">
                <button>Generate pdf</button>
            </form>
            <form action="index.php">
                <button>Logout</button>
            </form>
        </table>
    </div>
</body>

</html>
