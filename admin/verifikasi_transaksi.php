<?php
require 'function.php';

$verifikasi = tampilkan_transaksi();

?>
<?php include '../layout/navbar.php'; ?>

<div class="container">
    <table class="table table-borderless caption-top">
    <caption>List Pesanan</caption>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama User</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Tanggal Transaksi</th>
      <th scope="col">Jumlah Barang</th>
      <th scope="col">Harga Total</th>
      <th scope="col">Status Pembayaran</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1;
      foreach ($verifikasi as $data) : ?>
    <tr>
      <th scope="row"><?= $i++ ?></th>
      <td><?= $data['id_user'] ?></td>
      <td><?= $data['id_barang'] ?></td>
      <td><?= $data['tgl_transaksi'] ?></td>
      <td><?= $data['jumlah_barang'] ?></td>
      <td>Rp. <?= number_format($data['total_harga']) ?></td>
      <td>
        <?php if ($data['status'] == "accept") : ?>
        <p style="color: green; font-weight: bold"><?= $data['status'] ?></p>
        <?php elseif ($data['status'] == "batal") : ?>
        <p style="color: red; font-weight: bold;"><?= $data['status'] ?></p>
        <?php else: ?>
        <p><?= $data['status'] ?></p>
        <a href="process_accept.php?id=<?= $data['id_transaksi'] ?>" class="btn btn-success">Accept</a>
        <a href="process_batal.php?id=<?= $data['id_transaksi'] ?>" class="btn btn-danger">Batal</a>
        <?php endif;?>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>