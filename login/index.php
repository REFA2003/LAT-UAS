<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Login</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<div class="container-box">
    <center><h2>LOGIN</h2></center>

    <form action="process.php" method="POST">
        <label>Username</label>
        <input type="text" name="username" class="form-control"><br /> <br/>

        <label>Password</label>
        <input type="password" name="password" class="form-control"><br /> <br/>
        <br><br>
        <button type="submit">Log in</button>
        <br><br>
        <center><a href="../register/index.php" >Register</a></center>

    </form>
</div>
</body>
</html>