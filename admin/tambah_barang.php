<?php
session_start();

require 'function.php';

if(!isset($_SESSION["username"])){
    echo "
        <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
        </script>
        ";
}

if($_SESSION["role"] !="admin"){
    echo "
        <script type='text/javascript'>
        alert('Anda bukan customer')
        window.location = '../login/index.php';
        </script>
        ";
}

if(isset($_POST["submit"])){
    if(tambahProduk($_POST) > 0){
        echo "<script type='text/javascript'>
        alert('Data produk berhasil ditambahkan')
        window.location = 'produk.php'
        </script>";
    }else{
        echo "<script type='text/javascript'>
        alert('Data produk gagal ditambahkan')
        window.location = 'produk.php'
        </script>";
    }
}

?>

<?php include '../layout/view_create.php'; ?>
<div class="create">
        <center><h4>Tambah Barang</h4></center><br>
        <a href="produk.php" type="reset" value="kosongkan" class="btn btn-outline-danger btn-barang2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 20 20">
            <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
        </svg>
            Batal
        </a>
    <div class="container-form">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-barang"> <br><br>

            <label for="">Jenis Barang</label>
            <input type="text" name="jenis_barang" class="form-barang"> <br><br>

            <label for="">Foto</label><br>
            <input type="file" name="foto" class=""> <br><br>

            <label for="">Harga</label>
            <input type="text" name="harga_satuan" class="form-barang"> <br><br>

            <label for="">Stok</label>
            <input type="text" name="stok_barang" class="form-barang"> <br><br>
            
            <button type="submit" name="submit" class="btn-barang">Tambah Produk</button>
        </form>
    </div>
</div>