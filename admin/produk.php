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
            <th class="th">Nama Barang</th>
            <th class="th">Jenis Barang</th>
            <th class="th">Foto</th>
            <th class="th">Harga</th>
            <th class="th">Stok</th>
            <th class="th">Aksi</th>
        </tr>

        <?php $i =1;?>
        <?php foreach($barang as $data) : ?>
        
            <tr>
                <td class="td"><?= $i; ?></td>
                <td class="td"><?= $data['nama_barang']; ?></td>
                <td class="td"><?= $data['jenis_barang']; ?></td>
                <td class="td"><img src="../foto/<?= $data['foto']; ?>" width="80px" alt=""></td>
                <td class="td">Rp. <?= number_format($data['harga_satuan']); ?></td>
                <td class="td"><?= $data['stok_barang']; ?></td>
                <td class="td">
                    <a href="edit_barang.php?id=<?= $data["id_barang"]; ?>" class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    </a>
                    <a href="hapus_barang.php?id=<?= $data['id_barang']; ?>" class="btn"
                    onclick="return confirm('Anda yakin ingin mengahapus produk ini?')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                    </svg>
                    </a>
                </td>
            </tr>
            <?php $i++ ;?>
            <?php endforeach; ?>
    </table>
</div>

<a href=""></a>
</b>