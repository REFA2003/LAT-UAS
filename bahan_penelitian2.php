<?php
function editBarang($databarang){

global $conn;

$id_barang = htmlspecialchars($databarang["id_barang"]);
$nama_barang = htmlspecialchars($databarang["nama_barang"]);
$jenis_barang = htmlspecialchars($databarang["jenis_barang"]);
$foto = $_FILES["foto"]["name"];
$files = $_FILES["foto"]["tmp_name"];
$harga_satuan = htmlspecialchars($databarang["harga_satuan"]);
$stok_barang = htmlspecialchars($databarang["stok_barang"]);

$query = "UPDATE barang SET nama_barang = '$nama_barang', jenis_barang = '$jenis_barang', foto = '$foto', harga_satuan = '$harga_satuan', stok_barang = '$stok_barang' WHERE id_barang = '$id_barang'";

move_uploaded_file($files, "../foto".$foto);

mysqli_query($conn, $query);
return mysqli_affected_rows($conn);

}
?>

<?php
function editBarang($databarang){

    global $conn;

    $id_barang = $databarang["id_barang"];
    $nama_barang = htmlspecialchars($databarang["nama_barang"]);
    $jenis_barang = htmlspecialchars($databarang["jenis_barang"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $harga_satuan = htmlspecialchars($databarang["harga_satuan"]);
    $stok_barang = htmlspecialchars($databarang["stok_barang"]);

    if(empty($foto)){
        $query = "UPDATE barang SET 
                                nama_barang = '$nama_barang', 
                                jenis_barang = '$jenis_barang', 
                                harga_satuan = '$harga_satuan', 
                                stok_barang = '$stok_barang'
                                WHERE id_barang = '$id_barang'";
         mysqli_query($conn, $query);

         return mysqli_affected_rows($conn);
    }else{
        $query = "UPDATE barang SET 
                                nama_barang = '$nama_barang', 
                                jenis_barang = '$jenis_barang', 
                                foto = '$foto',
                                harga_satuan = '$harga_satuan', 
                                stok_barang = '$stok_barang'
                                WHERE id_barang = '$id_barang'";
                                move_uploaded_file($files, "../foto" .$foto);
         mysqli_query($conn, $query);

         return mysqli_affected_rows($conn);
    }



}
?>