<?php
session_start();

require 'function.php';
$nama = $_SESSION['username'];
$transaksi = tampilkan_transaksi_user($nama);
?>

<?php include '../layout/navbar_user.php'; ?>

<div class="container">
  <div class="row">
    <?php foreach ($transaksi as $row) : ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"><?= $row["id_barang"]; ?></h5>
                <p>Nama User : <?= $row['id_user']?></p>
                <p class="card-text">Jumlah Barang : <?= $row["jumlah_barang"]; ?></p>
                <div style="margin-bottom: 0px;">
                  <p class="card-text">Harga Total : <?= $row["total_harga"]; ?></p>
                </div>
                <div>
                <?php if ($row['status'] == "accept") : ?>
        <p class="btn btn-success" style="margin: 2px;"><?= $row['status'] ?></p>
        <?php elseif ($row['status'] == "batal") : ?>
        <p class="btn btn-danger" style="margin: 2px;"><?= $row['status'] ?></p>
        <?php else: ?>
        <p class="btn btn-warning" style="margin: 2px;"><?= $row['status'] ?></p>
        <?php endif; ?>
                </div>
              </div>
      </div>
      </div>
      <?php endforeach; ?>
      </div>
</div> 