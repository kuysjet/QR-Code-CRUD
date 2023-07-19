<?php
  include 'actioncrud.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CRUD App</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- Fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css">
</head>

<style>
  .navbar-brand {
   background: linear-gradient(
         to right,
         #833ab4 20%,
         #fd1d1d 30%,
         #fcb045 70%,
         #458efc 80%
     );
     -webkit-background-clip: text;
     background-clip: text;
     -webkit-text-fill-color: transparent;
     text-emphasis-color: transparent;
     background-size: 500% auto;
     animation: textShine 5s ease-in-out infinite alternate;
 }
 
 
 @keyframes textShine {
   0% {
       background-position: 0% 50%;
   }
   100% {
       background-position: 100% 50%;
   }
  }
</style>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="home.php">CRUD App</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="qrGenerator.php"><i class='bx bx-qr'></i> Generator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="qr_scanner.php"><i class='bx bx-qr-scan' ></i> Scanner</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="./logout.php"><i class="fa-solid fa-right-from-bracket" style="color: #d2d7e0;"></i> Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-3 bg-secondary p-4 rounded shadow">
        <h2 class="bg-light p-2 rounded text-center text-dark">ID : <?= $vid; ?></h2>
        <div class="text-center">
          <img src="<?= $vphoto; ?>" width="300" height="300" class="img-thumbnail">
        </div>
        <h5 class="text-light">Name : <?= $vname; ?></h5>
        <h5 class="text-light">Email : <?= $vemail; ?></h5>
        <h5 class="text-light">Phone : <?= $vphone; ?></h5>
      </div>
    </div>
  </div>
</body>

</html>