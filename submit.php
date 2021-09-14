<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

<link rel="stylesheet" href="styles.css">

<link rel="icon" href="paw.ico">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/7f429dfd1a.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<title>successful</title>
</head>
<body>
<h1 style="text-align: center; margin-top:80px; color:#0a9396">Your Payment done Succesfully...</h1>
<p style="text-align: center; font-size:20px">Your pet will be delivered soon before two days</p>
</body>
</html>

<?php
require('config.php');
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token = isset($_POST['stripeToken']);

	$data=\Stripe\Charge::create(array(
		"amount"=>1000,
		"currency"=>"inr",
		"description"=>"Programming with Vishal Desc",
		"source"=>$token,
	));

	echo "<pre>";

}
?>
