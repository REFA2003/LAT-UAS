<?php
require 'function.php';

$tampil1 = tampilkan_data();

?>
<?php include '../layout/view_data.php'; ?>

<div class="container">
    <table class="table table-borderless caption-top">
    <thead>
    <tr>
      <th class="th"  scope="col">NO</th>  
      <th class="th"  scope="col">NIP</th>
      <th class="th" scope="col">NDEP</th>
      <th class="th" scope="col">NBLK</th>
      <th class="th" scope="col">JK</th>
      <th class="th" scope="col">ALAMAT</th>
      <th class="th" scope="col">TELP</th>
      <th class="th" scope="col">JABATAN</th>
      <th class="th" scope="col">GAJI</th>
      <th class="th" scope="col">NOCAB</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
      foreach ($tampil1 as $data) : ?>
    <tr>
        <th class="td" scope="row"><?= $i++ ?></th>
        <td class="td" ><?= $data['nip'] ?></td>
        <td class="td" ><?= $data['ndep'] ?></td>
        <td class="td" ><?= $data['nblk'] ?></td>
        <td class="td" ><?= $data['jk'] ?></td>
        <td class="td" ><?= $data['alamat'] ?></td>
        <td class="td" ><?= $data['telp'] ?></td>
        <td class="td" ><?= $data['jabatan'] ?></td>
        <td class="td" ><?= $data['gaji'] ?></td>
        <td class="td" ><?= $data['nocab'] ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
    </table>
</div>