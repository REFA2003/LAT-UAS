<?php
session_start();

require 'function.php';
$nama = $_SESSION['username'];
$transaksi = tampilkan_transaksi_user($nama);
?>

<?php include '../layout/navbar_user.php'; ?>

<div class="yo container">
<?php foreach ($transaksi as $row) : ?>
    <div class="order">
        <h3>Nama User : <?= $row['id_user']?></h3>
        <p class="card-text">Nama Barang : <?= $row['id_barang'] ?></p>
        <p class="card-text">Jumlah Barang : <?= $row['jumlah_barang'] ?></p>
        <p class="card-text">Harga Total : <?= number_format($row['total_harga']) ?></p>

        <?php if ($row['status'] == "accept") : ?>
        <p class="btn btn-success" style="margin: 2px;"><?= $row['status'] ?></p>
        <?php elseif ($row['status'] == "batal") : ?>
        <p class="btn btn-danger" style="margin: 2px;"><?= $row['status'] ?></p>
        <?php else: ?>
        <p class="btn btn-warning" style="margin: 2px;"><?= $row['status'] ?></p>
        <?php endif; ?>

    </div>
    <?php endforeach; ?>
</div>
