<?php


$conn= mysqli_connect("localhost","root","","penjelajahan");


function query($query){
    global $conn;
    
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($isi = mysqli_fetch_assoc($result)){
            $rows[] = $isi;
    
    }
    return $rows;
}


function edit($data) {
    global $conn;

    $id = $data["id"];     
    $peminjam= htmlspecialchars($data['peminjam']);
    $email= htmlspecialchars($data['email']);
    $barang= htmlspecialchars($data['barang']);
    $lama= htmlspecialchars($data['lama']);
    $ambil= htmlspecialchars($data['ambil']);
    $kembali= htmlspecialchars($data['kembali']);
    $query= ("UPDATE sewa_barang SET 
        peminjam = '$peminjam',
        email = '$email',
        barang = '$barang',
        lama = $lama,
        ambil = '$ambil',
        kembali = '$kembali'
        WHERE id = $id
    "); 

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>


