<?php
require 'process.php';

if(isset($_POST["register"])){
    
    if(proses($_POST) > 0){
        echo "
        <script type='text/javascript'>
        alert('Register berhasil, Selamat berbelanja')
        window.location = '../tampil/tampil1.php';
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
        alert('Mohon maaf, Pendaftaran gagal')
        window.location = 'index.php';
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Register</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<div class="container-box2">
    <center><h2>Register</h2></center>

    <form action="" method="POST">
        
        <label>nip</label>
        <input type="text" name="nip" class="form-control"><br /> <br/>
        <label>Nama depan</label>
        <input type="text" name="ndep" class="form-control"><br /> <br/>
        <label>Nama belakang</label>
        <input type="text" name="nblk" class="form-control"><br /> <br/>
        <label>jenis kelamin</label>
        <input type="text" name="jk" class="form-control"><br /> <br/>
        <label>alamat</label>
        <input type="text" name="alamat" class="form-control"><br /> <br/>
        <label>telp</label>
        <input type="text" name="telp" class="form-control"><br /> <br/>
        <label>jabatan</label>
        <input type="text" name="jabatan" class="form-control"><br /> <br/>
        <label>gaji</label>
        <input type="text" name="gaji" class="form-control"><br /> <br/>
        <label>nocab</label>
        <input type="text" name="nocab" class="form-control"><br /> <br/>

        <button type="submit" name="register">Register</button>
        <center><p>Sudah Punya Akun? <a href="../login/index.php" >Log in</a></p></center>
        

    </form>
</div>
</body>
</html>