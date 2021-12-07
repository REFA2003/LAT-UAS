<?php
require 'function.php';

$id = $_GET["id"];
if (batal($id) > 0) {
    echo "<script>
        alert('Transaksi Dibatalka');
        location='verifikasi_transaksi.php';
    </script>";
} else{
    echo "<script>
        alert('Terjadi Kesalahan');
        location='verifikasi_transaksi.php';
    </script>";
}

?>