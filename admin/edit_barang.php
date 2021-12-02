<?php

require 'function.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang = '$id'");

if(isset($_POST['submit'])){
    if(editBarang($_POST) > 0){
        header("location:produk.php");
    }else{
        $error = true;
    }
}

?>
<?php include '../layout/view_create.php'; ?>
<div class="create2">
        <center><h4>Edit Barang</h4></center><br>
        <button type="reset" value="kosongkan" class="btn btn-outline-danger btn-barang2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 20 20">
            <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
        </svg>
            Batal
        </button>
    <div class="container-form">
        <?php if (isset($error)) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Maaf gagal untuk mengedit barang
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php endif; ?> 
        <form action="" method="post" enctype="multipart/form-data">
            <?php while ($detail = mysqli_fetch_assoc($result)) : ?>
            <input type="hidden" name="id_barang" value="<?= $detail["id_barang"] ?>">

            <label for="">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama_barang" value="<?= $detail['nama_barang'];  ?>" class="form-barang"> <br><br>

            <label for="">Jenis Barang</label>
            <input type="text" name="jenis_barang" id="jenis_barang" value="<?= $detail['jenis_barang'];  ?>"  class="form-barang"> <br>

            <label for="">Foto</label><br>
            <input type="file" name="foto" id="foto" <?= $detail["foto"]; ?> class=""> <br>

            <label for="">Harga</label>
            <input type="text" name="harga_satuan" id="harga_satuan" value="<?= $detail['harga_satuan'];  ?>"  class="form-barang"> <br><br>

            <label for="">Stok</label>
            <input type="text" name="stok_barang" id="stok_barang" value="<?= $detail['stok_barang'];  ?>" class="form-barang"> <br><br>
            
            <button type="submit" name="submit" class="btn-barang">Update Barang</button>
            <?php endwhile; ?>
        </form>
    </div>
</div>