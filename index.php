    <?php

    session_start();

    require 'function.php';

    $barang = tampilkan();

    
    ?>

    <?php include 'navbar_index.php'; ?>

    <div style="display:flex;">
    <?php foreach($barang as $data) : ?>
    <div class="card mt-5 m-5" style="width: 18rem;">
    <img src="foto/<?= $data['foto']; ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $data['nama_barang']; ?></h5>
        <p class="card-text"><?= $data['jenis_barang']; ?></p>
        <p class="card-text">Rp <?= number_format($data['harga_satuan']); ?></p>
        <p class="card-text">Stok : <?= $data['stok_barang']; ?></p>
        <a href="login/index.php?id=<?= $data['id_barang']; ?>" class="btn btn-primary"
        onclick="return confirm('Silahkan Log In terlebih dahulu')">Beli Barang</a>
    </div>
    </div>
    <?php endforeach; ?>
    </div>