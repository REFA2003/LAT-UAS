<?php

session_start();

require '../koneksi.php';

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
?>

<?php include '../layout/navbar_user.php'; ?>

<div class="main">
    <h3>Selamat datang Para User</h3>
</div>