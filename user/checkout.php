<?php
session_start();

require 'function.php';

if(empty($_SESSION["cart"] || isset($_SESSION["cart"]))){
    echo "<script>alert('Keranjang kosong, silahkan berbelanja terlebih dahulu');</script>";
    echo "<script>location='index.php';</script>";
}else if(!isset($_SESSION["cart"])){
    echo "<script>location='index.php';</script>";
}
?>

<?php include '../layout/navbar_user.php'; ?>

<section class="content-cart">
        <div class="parent-left">
            <div style="display: flex; justify-content: space-between;">
                <h2>Keranjang</h2>

                <a href="checkout-product.php" style="margin-top: 7px; text-decoration: none; color: #fff; font-weight: bold; background: #000; padding: 6px; margin: 2px; border-radius: 10px;">Bayar Sekarang</a>

            </div>
            <hr>

            <?php foreach ($_SESSION["cart"] as $productId => $hasil) : ?>
                <?php
                $data = query("SELECT * FROM products WHERE id_migo = $productId")[0];
                $subtotalHarga = $hasil * $data["harga"];
                ?>
                <div class="card-cart">
                    <img src="../foto/<?= $data["foto"]; ?>" width="20%" alt="">
                    <div class="child-cart">
                        <h4><?= $data["nama_barang"]; ?></h4>
                        <h4 style="margin-top: 10px;">Rp <?= number_format($data["harga_satuan"]); ?></h4>
                        <h4 style="margin-top: 10px;">Pembeli: <?= $_SESSION["username"]; ?></h4>
                        <h4 style="margin-top: 10px;">Total Harga: Rp <?= number_format($subtotalHarga); ?></h4>
                        <div class="action-cart">
                            <a href="cart-delete.php?id=<?= $data["id_transaksi"]; ?>">Hapus</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </section>