<?php

session_start();

if(!isset($_SESSION["username"])){
    echo "
        <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
        </script>
        ";
}

if($_SESSION["role"] !="admin"){
    echo "
        <script type='text/javascript'>
        alert('Anda bukan customer ')
        window.location = '../login/index.php';
        </script>
        ";
}

require '../function.php';

$barang = query("SELECT * FROM barang");

?>

<?php include '../layout/navbar.php'; ?>
<div class="main">
    <center><h3>Data Barang</h3></center>

    <a href="tambah_barang.php" class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 18 18">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg>
        Tambah Barang
    </a>
    <table>
        <tr>
        <th>No</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Foto</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php $i =1;?>
        <?php foreach($barang as $data) : ?>
        
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data['nama_barang']; ?></td>
                <td><?= $data['jenis_barang']; ?></td>
                <td><img src="../foto/<?= $data['foto']; ?>" width="80px" alt=""></td>
                <td><?= number_format($data['harga_satuan']); ?></td>
                <td><?= $data['stok_barang']; ?></td>
                <td>
                    <a href="edit_barang.php?url=edit_barang&id=<?php echo $data['id_barang']; ?>" class="">
                    Edit</a>
                    <a href="hapus_barang.php?id=<?= $data['id_barang']; ?>" class=""
                    >Hapus</a>
                </td>
            </tr>
            <?php $i++ ;?>
            <?php endforeach; ?>
    </table>
</div>