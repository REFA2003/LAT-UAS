<?php
session_start();

require '../koneksi.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu');
        window.location = '../login/index.php';
    </script>
    ";
}

if($_SESSION["roles"] !="admin"){
    echo "
    <script type='text/javascript'>
        alert('Anda bukan admin');
        window.location = '../login/index.php';
    </script>
    ";
}

require 'functions.php';

if( isset($_POST["submit"])){
    if (editProduk($_POST) > 0 ){
        echo "<script type='text/javascript'>
        alert('Data produk berhasil di ubah')
        window.location = 'produk.php';
        </script>";
    } else{
        echo "<script type='text/javascript'>
        alert('Data produk gagal di ubah')
        window.location = 'produk.php';
        </script>";
    }
}

$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id_produk = $id")[0];




?>

<?php include '../layout/sidebar.php'; ?>
<div class="main">
    <h3>Edit Data Produk</h3>

    <div class="container-form">
        <form action="" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id_produk" class="form-produk" value="<?= $produk['id_produk']; ?>"> <br /> <br />
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="form-produk" value="<?= $produk['nama_produk']; ?>"> <br /> <br />

            <label>Foto Produk</label>
            <input type="file" name="foto" class="form-produk" value="<?= $produk['foto']; ?>"> <br /> <br />

            <label>Harga Produk</label>
            <input type="text" name="harga" class="form-produk" value="<?= $produk['harga']; ?>"> <br /> <br />

            <label>Stok Barang</label>
            <input type="text" name="stok_barang" class="form-produk" value="<?= $produk['stok_barang']; ?>"> <br /> <br />

            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-produk" cols="20" rows="8"><?= $produk['deskripsi']; ?></textarea><br /> <br />

            <button type="submit" name="submit" class="btn-produk">Tambah Produk</button>
        </form>
    </div>
</div>