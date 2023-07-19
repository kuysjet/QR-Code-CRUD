


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css">
    <title>api - QRcode</title>
  </head>

  <style>
h5{
	letter-spacing: 1px;
	text-align: center;
	font-weight: bold;
}
.panel-heading{
	background-color:  #283747;
}
.panel-footer{
	background-color: white;
}
.panel{
	border: 1px solid #d1d1d1;
}
.row{
	margin-top: 100px;
}
.input-group {
  padding-bottom: 1%;
}
.getBtn{
	background-color: #283747;
	color: #ddd;
	letter-spacing: 2px;
	font-size: 16px;
	height: 50px;
}

.getBtn:hover{
	background-color: #ddd;
}
input[type="text"] {
  background-color : /*#d1d1d1; */ transparent;
  border: 2px solid white;
  border-bottom: 1px solid #d1d1d1;
  padding: 10px;
  letter-spacing: 1px;
  width: 100%;
  font-size:16px;
  color:black;
}
.qrCode{
	color: black;
}
/* #displayQR{

} */
/* li{
	padding: 5px;
} */
input[type="textarea"] {
  background-color : /*#d1d1d1; */ transparent;
  border: 2px solid white;
  border-bottom: 1px solid #d1d1d1;
  padding: 10px;
  letter-spacing: 2px;
  width: 100%;
  color:black;
  font-size:16px;

}
.glyphicon{
	background-color: transparent;
	border: 1px solid white;
}
.qrCode{
	color:black;
}
#displayQR img {
    /*margin-left:15%;*/
    margin-left:20px;
    margin-top:36px;
}
.panel{
	 box-shadow: 5px 5px 5px #888888;
}
form{
	background-color: white;
	
	margin-top: -10px;
}
input [type="text"]{
	width: 400px;
}
.title,.navbar-brand {
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
    <div class="container">
      <div class="row d-flex justify-content-center" style="vertical-align: middle; margin-top:180px" >
        <div class="col-md-5 col-md-offset-1 ">
          <div class="panel p-3">
            <div class="panel-heading px-4 py-3" style="background-color: #172c4d;">
              <h5 class="title text-light">Generate QR code with message</h5>
            </div>
            <div class="panel-body">

            </div>
            <div class="panel-footer">
              <form action="javascript:getQR()"> 
                
              <div class="row mt-5">
                <div class="col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-phone pt-2">
                      <i class="fa-solid fa-phone" style="color: #d3d4d4;"></i>
                    </span>
                    <input type="text" class="inputs form-control" id="mobile" placeholder="Phone number" required="required">
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon glyphicon glyphicon-pencil">
                      <i class="fa-solid fa-message" style="color: #d3d4d4;"></i>
                    </span>
                    <textarea type="text" class="w-auto form-control" id="message" placeholder="Message" required="required"></textarea>
                  </div>
                </div>
              </div>

                <input type="submit" value="Generate QR Code" class="btn form-control getBtn mt-4" style="background-color: #172c4d;"></input>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6 text-center m-0">
           <div id="displayQR" class="qr m-0">
             <h4 class="qrCode">Your QR code will be displayed here!</h4>
           </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script>
  function getQR(){

      var mobile = $('#mobile').val();
      var message = $('#message').val();
      var theLink = 'mobile='+mobile+'message='+message;
      var link = encodeURIComponent(theLink);
      var qrCode="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data="+link;

      $('#displayQR').html('<h4 class="qrCode">Generated QR code</h4><img src="'+qrCode+'"></img>');
      $('#displayQR').effect('pulsate',{times:3}, 200);

    }
    </script>

  </body>
</html>