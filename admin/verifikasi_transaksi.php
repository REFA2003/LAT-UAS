<?php
require 'function.php';

$verifikasi = tampilkan_transaksi();

// $delete = query("SELECT * FROM transaksi");

?>
<?php include '../layout/navbar.php'; ?>

<div class="container">
    <table class="table table-borderless caption-top">
    <caption>List Transaksi</caption>
  <thead>
    <tr>
      <th class="th"  scope="col">No</th>
      <th class="th" scope="col">Nama User</th>
      <th class="th" scope="col">Nama Barang</th>
      <th class="th" scope="col">Tanggal Transaksi</th>
      <th class="th" scope="col">Jumlah Barang</th>
      <th class="th" scope="col">Harga Total</th>
      <th class="th" scope="col">Status Pembayaran</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1;
      foreach ($verifikasi as $data) : ?>
    <tr>
      <th class="td" scope="row"><?= $i++ ?></th>
      <td class="td" ><?= $data['id_user'] ?></td>
      <td class="td" ><?= $data['id_barang'] ?></td>
      <td class="td" ><?= $data['tgl_transaksi'] ?></td>
      <td class="td" ><?= $data['jumlah_barang'] ?></td>
      <td class="td" >Rp. <?= number_format($data['total_harga']) ?></td>
      <td class="td" >
        <?php if ($data['status'] == "accept") : ?>
        <p style="color: green; font-weight: bold"><?= $data['status'] ?></p>
        <?php elseif ($data['status'] == "batal") : ?>
        <p style="color: red; font-weight: bold;"><?= $data['status'] ?></p>
        <?php else: ?>
        <p><?= $data['status'] ?></p>
        <a href="process_accept.php?id=<?= $data['id_transaksi'] ?>" class="btn btn-success">Accept</a>
        <a href="process_batal.php?id=<?= $data['id_transaksi'] ?>" class="btn btn-danger"
        onclick="return confirm('Anda yakin ingin membatalkan proses transaksi ini?')">Batal</a>
        <?php endif;?>
      </td>
      <td>
      <a href="delete_transaksi.php?id=<?= $data['id_transaksi']; ?>" class="btn" 
      onclick="return confirm('Anda yakin ingin mengahapus produk ini?')">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
      </svg>
      </a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>