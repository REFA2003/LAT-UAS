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

if($_SESSION["role"] !="user"){
    echo "
        <script type='text/javascript'>
        alert('Anda bukan customer')
        window.location = '../login/index.php';
        </script>
        ";
}

$barang = view();

?>

<?php include '../layout/navbar_user.php'; ?>

<div style="display:flex;">
<?php foreach($barang as $data) : ?>
<div class="card mt-5 m-5" style="width: 18rem;">
  <img src="../foto/<?= $data['foto']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $data['nama_barang']; ?></h5>
    <p class="card-text"><?= $data['jenis_barang']; ?></p>
    <p class="card-text">Rp <?= number_format($data['harga_satuan']); ?></p>
    <p class="card-text">Stok : <?= $data['stok_barang']; ?></p>
    <a href="detail_barang.php?id=<?= $data['id_barang']; ?>" class="btn btn-primary">Beli Barang</a>
  </div>
</div>
<?php endforeach; ?>
</div>