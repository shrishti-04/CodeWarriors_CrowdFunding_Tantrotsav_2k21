<!-- rzp_test_hwYwo9YcZdBnMT	 -->

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

  <nav class="navbar navbar-expand-lg navbar-dark" style="color:white">
    <a class="navbar-brand navbar-dark" style="font-size:25px; padding-left:15%; font-weight:700; font-size:30px">HelpRaise</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto" style="padding-right:15%; margin-left:50px">
        <li class="nav-item">
          <a class="nav-link" style="color:white" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:white" href="contribute.php">Contribution</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:white" href="comment/index.php">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:white" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="row detail">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <img class="abimg" src="images/colloborator.svg" style="height:400px; padding-left:80px; margin-top:30px" alt="about">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 para">
          <p style="color:white; font-size:20px; margin-right:80px; margin-top:90px">A major objective of many non-governmental organizations (NGOs) is welfare work in relation to poverty and
            disease or in respect to social groups such as the elderly or children. HelpRaise is an NGO platform which is used to help <thead>
              poor through funding. The Funds will be  collected  through this website and the amount will be transferred to this NGO.
            </thead> </p>

        </div>
      </div>


</section>
  </body>
</html>
