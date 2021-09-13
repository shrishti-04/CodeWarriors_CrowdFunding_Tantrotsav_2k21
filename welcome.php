<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HelpRaise</title>

   <link rel="stylesheet" href="styles.css">

   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Montserrat:wght@900&family=PT+Serif:ital@1&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/7f429dfd1a.js" crossorigin="anonymous"></script>

  </head>
  <body>
    <section id="title">
    <div class="frontpage">
      <h1 style="font-size: 60px"><img src="images/logo.png" style="width:160px" class="pen-logo">     HelpRaise  <img src="images/logo.png" style="width:160px" class="logo"></h1>
    <h2>Help with smile...</h2>
    </div>

  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#CA6702">
    <a class="navbar-brand navbar-dark" style="font-size:25px">HelpRaise</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Buy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

<div id="profile-carousel" class="carousel slide" data-ride="carousel" data-interval="3000" style="background-color:#fff">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="title-img" style="width:100%" src="images/img1.jfif">
    </div>
    <div class="carousel-item">
      <img class="title-img" style="width:100%" src="images/img2.jfif">
    </div>
    <div class="carousel-item">
      <img class="title-img" style="width:100%" src="images/img4.jfif">
    </div>
  </div>
</div>

</section>
  </body>
</html>
