<?php

require 'koneksi.php';

function query($query){

    global $conn;
    $result = mysqli_query($conn, $query);
    
    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambahProduk($data){

    global $conn;
    
}

function tampilkan(){
    global $conn;

    $query = "SELECT * FROM barang";

    $result = mysqli_query($conn, $query);

    $rows = [];
    
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

?>