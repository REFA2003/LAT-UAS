<?php

require 'process.php';

if(isset($_POST["register"])){
    
    if(tambahUser($_POST) > 0){
        echo "
        <script type='text/javascript'>
        alert('Register berhasil, Selamat berbelanja')
        window.location = '../login/index.php';
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
        <label>Nama Lengkap</label>
        <input type="text" name="nama_user" class="form-control2"><br /> <br/>

        <label>Username</label>
        <input type="text" name="username" class="form-control2"><br /> <br/>

        <label>Password</label>
        <input type="password" name="password" class="form-control2"><br /> <br/>

        <label>Role</label>
        <select name="role" class="form-control2">
            <option value="admin">Admin</option>
            <option value="user">Customer</option>
        </select>
        <br><br>
        <button type="submit" name="register">Register</button>
        <center><p>Sudah Punya Akun? <a href="../login/index.php" >Log in</a></p></center>
        

    </form>
</div>
</body>
</html>