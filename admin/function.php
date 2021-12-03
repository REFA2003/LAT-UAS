<?php

require '../koneksi.php';

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

    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $jenis_barang = htmlspecialchars($data["jenis_barang"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $harga_satuan = htmlspecialchars($data["harga_satuan"]);
    $stok_barang = htmlspecialchars($data["stok_barang"]);

    $query = "INSERT INTO barang VALUES(NULL, '$nama_barang', '$jenis_barang', 
    '$foto', '$harga_satuan', '$stok_barang')";
    move_uploaded_file($files, "../foto/".$foto);

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function hapusBarang($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM barang WHERE id_barang = $id");
    return mysqli_affected_rows($conn);
}

function editBarang($databarang){

    global $conn;
    
    $id_barang = htmlspecialchars($databarang["id_barang"]);
    $nama_barang = htmlspecialchars($databarang["nama_barang"]);
    $jenis_barang = htmlspecialchars($databarang["jenis_barang"]);
    $foto = $_FILES["foto"]["name"];
    $file = $_FILES['foto']['tmp_name'];
    $harga_satuan = htmlspecialchars($databarang["harga_satuan"]);
    $stok_barang = htmlspecialchars($databarang["stok_barang"]);
    
    $query = "UPDATE barang SET id_barang = '$id_barang'
                                nama_barang = '$nama_barang', 
                                jenis_barang = '$jenis_barang', 
                                foto = '$foto', 
                                harga_satuan = '$harga_satuan', 
                                stok_barang = '$stok_barang' 
                                WHERE id_barang = '$id_barang'";
    move_uploaded_file($file, "../foto/".$foto);
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    
    }

?>