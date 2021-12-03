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
<section>
    <div style="display: flex;">
<div class="card mt-5 m-5" style="width: 18rem;">
  <img src="../foto/SEAGATE.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card mt-5 m-5" style="width: 18rem;">
  <img src="../foto/VGEN.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</section>