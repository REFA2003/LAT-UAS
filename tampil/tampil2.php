<?php
require 'function.php';

$tampil2 = tampilkan_hasil();

?>
<?php include '../layout/view_data.php'; ?>

<div class="container">
    <table class="table table-borderless caption-top">
    <thead>
    <tr>
      <th class="th"  scope="col">NO</th>  
      <th class="th"  scope="col">NIP</th>
      <th class="th" scope="col">USERNAME</th>
      <th class="th" scope="col">PASSWORD</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
      foreach ($tampil2 as $data) : ?>
    <tr>
        <th class="td" scope="row"><?= $i++ ?></th>
        <td class="td" ><?= $data['nip'] ?></td>
        <td class="td" ><?= $data['username'] ?></td>
        <td class="td" ><?= $data['password'] ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
    </table>
</div>