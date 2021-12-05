<?php
session_start();

require 'function.php';

$id = $_GET['id'];
if (isset($_GET['id'])) {
    // membuat variable untuk menampilkan per id
    $product = tampilkan_per_id($id);
    while ($row = mysqli_fetch_assoc($product)) {
        $id_barang = $row['id_barang'];
        $nama_barang = $row['nama_barang'];
        $jenis_barang = $row['jenis_barang'];
        $foto = $row['foto'];
        $harga_satuan = $row['harga_satuan'];
        $stok_barang = $row['stok_barang'];
    }
}


if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nama_barang = $_POST['nama_barang'];
    $tanggal_transaksi = $_POST['tanggal'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $harga_satuan = $_POST['harga_satuan'];
    $harga_total = $harga_satuan*$jumlah_barang;

    if (!empty($tanggal_transaksi) && !empty($jumlah_barang)) {
        if (checkout($nama, $nama_barang, $tanggal_transaksi, $jumlah_barang, $harga_total)) {
            echo "<script>
                alert('Pembelian Berhasil');
                location='yourOrder.php';
            </script>";
        } else{
            $error = "terjadi kesalahan";
        }
    } else{
        $error = "data harus diisi";
    }
}
?>

<?php include '../layout/navbar_user.php'; ?>

<div style="display: flex">
<div>
    <img src="../foto/<?= $foto?>" alt="" class="image">
</div>

<div class="cart">
    <form action="" method="post">
    <label for="nama">Nama User</label>
    <input type="text" id="nama" name="nama" class="form-barang" value="<?= $_SESSION['username'] ?>" readonly>

    <label for="nama_barang">Nama Barang</label>
    <input type="text" id="nama_barang" name="nama_barang" class="form-barang" value="<?= $nama_barang?>" readonly>

    <label for="tanggal">Tanggal Transaksi</label>
    <input type="date" id="tanggal" name="tanggal" class="form-barang">

    <label for="jumlah_barang">Jumlah Barang</label>
    <input type="number" min="1" id="jumlah_barang" name="jumlah_barang" value="1" class="form-barang">

    <label for="harga_satuan">Harga Barang</label>
    <input type="text" id="harga_satuan" name="harga_satuan" class="form-barang" value="<?= $harga_satuan ?>" readonly><br><br>
            <button type="submit" name="submit" class="btn btn-primary btn-barang" style="border-radius: 30px">Checkout</button>
    </form>
</div>
</div>