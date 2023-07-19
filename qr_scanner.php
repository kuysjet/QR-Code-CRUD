


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Code Scanner</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- include the library -->
  <script src="https://unpkg.com/html5-qrcode"></script>
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css">
  
  <script src="js/qr_scanner.js"></script>

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

</head>
<body class="bg-light">
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
  <div id="table-container">
    <div class="align-middle">
      <div class="container resized-container">
        <div class="card px-2 py-3">
          <div class="win text-center">
            <h4 class="intro pt-2"><b>QR CODE SCANNER</b></h4>
          </div>
        <div class="row justify-content-center">
          <div class="col-12">
            <div id="qr-reader"></div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12">
            <table id="qr-result-table" class="table table-bordered table-striped table-hover mb-0">
              <thead class="text-light">
                <tr>
                  <th>Decoded Text</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody class="text-center" id="qr-result-body"></tbody>
            </table>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <!-- <script src="js/jquery.min.js"></script> -->
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</html>