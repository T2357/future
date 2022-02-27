<?php
session_start();
 ?>
<DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Online Document Sharing</title>
  <link rel="stylesheet" type="text/css" href="index.css"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body style="background-color:whitesmoke;">
  <?php include 'navbar.php' ?>
</div> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </head>
<body>
<h4 class="text-left" style="font-size:20px; color:blue"> Welcome User
            <?php echo $_SESSION['EMAIL']; ?>
          </h4>
<style>
   .carousel-inner img {
     width: 90%;
     height: 100%;
     padding-left: 150px;
   }
   </style>
  <div id="demo" class="carousel slide" data-ride="carousel">

   <!-- Indicators -->
   <ul class="carousel-indicators">
     <li data-target="#demo" data-slide-to="0" class="active"></li>
     <li data-target="#demo" data-slide-to="1"></li>
     <li data-target="#demo" data-slide-to="2"></li>
   </ul>

   <!-- The slideshow -->
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img src="images/book1.png" alt="" width="1100" height="300">
     </div>
     <div class="carousel-item">
       <img src="images/book2.png" alt="" width="1100" height="300">
     </div>
     <div class="carousel-item">
       <img src="images/book3.png" alt="" width="1100" height="300">
     </div>
   </div>

   <!-- Left and right controls -->
   <a class="carousel-control-prev" href="#demo" data-slide="prev">
     <span class="carousel-control-prev-icon"></span>
   </a>
   <a class="carousel-control-next" href="#demo" data-slide="next">
     <span class="carousel-control-next-icon"></span>
   </a>
 </div>
 <div class="container">
   <h1 style="color: #AF002A;">Educational Document Centre</h1>
   <h5 style="color:blueviolet;">Allow teachers and students to upload and download documents of various fields. This site is created to strenghten educational community by inter-sharing of various notes , documents ,question papers,etc. </h5>
 </div>
<?php include 'footer.php'?>   
  </body>
  </html>
