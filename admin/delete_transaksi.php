<?php

require 'function.php';

$id = $_GET['id'];

if(deleteTransaksi($id) > 0){
    echo "<script type='text/javascript'>
        alert('Data transaksi berhasil dihapus')
        window.location = 'verifikasi_transaksi.php'
        </script>";
}else{
    
    echo "<script type='text/javascript'>
        alert('Data transaksi gagal dihapus')
        window.location = 'verifikasi_transaksi.php'
        </script>";
}

?>