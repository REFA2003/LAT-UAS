<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page User</title>
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand logo" href="#">
      <img src="../png/techsvg.svg" alt="">
    </a>
    <div class="collapse navbar-collapse nav" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Your Order</a>
        </li>
      </ul>
    </div>
    <form class="d-flex logout">
      <a href="../logout.php" class="btn btn-outline-primary" type="submit">
        Log Out
      </a>
    </form>
  </div>
</nav>
</body>
</html>