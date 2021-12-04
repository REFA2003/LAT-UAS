<?php
session_start();

require 'function.php';

$id = $_GET['id'];

$SSD = query("SELECT * FROM barang WHERE id_barang = $id")[0];


?>

<?php include '../layout/navbar_user.php'; ?>

<section>
<?php while ($result = mysqli_fetch_assoc($SSD)) : ?>
    <div class="container-detail">
        <img src="../foto/<?= $result['foto']; ?>" width="30%" alt="...">

        <div style="margin-left: 100px;">
        <h2 class="title"><?= $result['nama_barang']; ?></h2>

        <p class="paragraph"><?= $result['jenis_barang']; ?></p>

        <div class="quantity-detail">
            <h4>Jumlah Barang</h4>

            <form action="#" method="post">
                <div class="quantity">
                    <input type="number" min="1" class="form-control" name="jumlah_barang" value="1">
                </div>
                <div style="display: flex;">
                <span style="margin-top: 19px; font-weight: bold; font-size: 23px; margin-right: 5px;">Rp. </span>
                    <h3 style="margin-top: 20px;" id="harga_satuan"><?= number_format($result['harga_satuan']); ?></h3>
                </div>
            </form>
            <button class="btn btn-outline-secondary" type="submit" name="beli">Masukan Keranjang</button>
        </div>
        </div>
    </div>
<?php endwhile ?>
</section>

<?php
if(isset($_POST['beli'])){
    $jumlah = $_POST['jumlah'];

    $barang = $_SESSION['cart'][$id] = $jumlah;
    if($barang >= 10){
        unset($_SESSION['cart'][$id]);
        echo "<script>alert('Maaf produk terlalu banyak untuk ditambahkan!')
                window.location:index.php
                </script>";
    }
    echo "<script>alert('Produk telah ditambahkan ke keranjang belanja')
                window.location:index.php
                </script>";
}



