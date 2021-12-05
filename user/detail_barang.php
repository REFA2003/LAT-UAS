<?php
session_start();

require 'function.php';

$id = $_GET['id'];

$SSD = mysqli_query($conn,"SELECT * FROM barang WHERE id_barang = '$id'");

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
            <h4>Stok Barang</h4>

            <form method="post">
                <!-- <div class="quantity">
                    <input type="number" min="1" class="form-control" name="jumlah_barang" value="1">
                </div> -->
                <h3><?= $result['stok_barang']; ?></h3>
                <h3>Harga Satuan</h3>
                <div style="display: flex;">
                <span style="margin-top: 5px; font-weight: bold; font-size: 23px; margin-right: 5px;">Rp. </span>
                    <h3 style="margin-top: 5px;" id="harga_satuan"><?= number_format($result['harga_satuan']); ?></h3>
                </div>
                <!-- <button class="btn btn-outline-secondary" type="submit" name="submit">Masukan Keranjang</button> -->

                <a href="cart.php?id=<?= $result['id_barang'];?>">Masukkan</a>
            </form>
        </div>
        </div>
    </div>
<?php endwhile ?>
</section>
