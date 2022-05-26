<?php

require '../koneksi.php';

function query($query){

    global $conn;

    $query = "SELECT * FROM barang";

    $result = mysqli_query($conn, $query);

    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function view(){
    global $conn;

    $query = "SELECT * FROM barang";

    $result = mysqli_query($conn, $query);

    $rows = [];
        
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;

}

function checkout($nama, $nama_barang, $tanggal_transaksi, $jumlah_barang, $harga_total){
    global $conn;

    $nama = mysqli_real_escape_string($conn, $nama);
    $nama_barang = mysqli_real_escape_string($conn, $nama_barang);
    $tanggal_transaksi = mysqli_real_escape_string($conn, $tanggal_transaksi);
    $jumlah_barang = mysqli_real_escape_string($conn, $jumlah_barang);
    $harga_total = mysqli_real_escape_string($conn, $harga_total);
    
    $query = "INSERT INTO transaksi (id_barang, id_user, tgl_transaksi, jumlah_barang, total_harga) 
    VALUES ('$nama_barang', '$nama', '$tanggal_transaksi', '$jumlah_barang', '$harga_total')";

    if (mysqli_query($conn, $query)) {
        return true;
    } else{
        return false;
    }
}

function stok($id){
    global $conn;

    

    $upstok = "UPDATE barang SET stok_barang = $stok_barang -  $jumlah_lain WHERE id_barang='$id'";

    mysqli_query($conn, $upstok);
    return mysqli_affected_rows($conn);
}

function tampilkan_per_id($id){
    global $conn;
    
    $query = "SELECT * FROM barang WHERE id_barang='$id'";
    
    $result = mysqli_query($conn, $query);
    
    return $result;
}

function tampilkan_transaksi_user($nama){
    global $conn;
    
    $query = "SELECT * FROM transaksi WHERE id_user='$nama'";
    
    $result = mysqli_query($conn, $query);
    
    $rows = [];
    
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    
    return $rows;
}

function tampilkan_transaksi(){
    global $conn;

    $query = "SELECT * FROM transaksi";

    $result = mysqli_query($conn, $query);
    
    $rows = [];
    
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function accept($id){
    global $conn;
    
    $query = "UPDATE transaksi SET status = 'accept' WHERE id_transaksi='$id'";
    
    if (mysqli_query($conn, $query)) {
        return true;
    } else{
        return false;
    }
}

function batal($id){
    global $conn;
    
    $query = "UPDATE transaksi SET status = 'batal' WHERE id_transaksi='$id'";
    
    if (mysqli_query($conn, $query)) {
        return true;
    } else{
        return false;
    }
}

?>