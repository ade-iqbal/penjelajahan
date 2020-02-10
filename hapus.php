<?php 
require 'functions.php';

$id = $_GET["id"];
mysqli_query($conn, "DELETE FROM sewa_barang WHERE id = $id");

if ( mysqli_affected_rows($conn) > 0) {
    echo "<script>alert('Data berhasil dihapus')
    document.location.href = 'sewabarang.php'
    </script>";
} 
else {
    echo"<script>alert('Data gagal dihapus')
    document.location.href = 'sewabarang.php'
    </script>";
}

?>