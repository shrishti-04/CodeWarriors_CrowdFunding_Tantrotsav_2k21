<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Donate</title>
		<link rel="stylesheet" href="contribute.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Montserrat:wght@900&family=PT+Serif:ital@1&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   <script src="https://kit.fontawesome.com/7f429dfd1a.js" crossorigin="anonymous"></script>

	 <style>
	 	body{
	 		text-align: center;
	 	}
	 </style>

	</head>
	<body>

		<h1 style="text-align:center; color:white; margin-top:40px">FUND RAISING</h1>

		<div class="row detail">
	        <div class="col-lg-6 col-md-12 col-sm-12">
	          <img class="abimg" src="images/contribute.svg" style="height:400px; padding-left:80px; margin-top:30px" alt="about">
	        </div>
	        <div class="col-lg-6 col-md-12 col-sm-12 para">
	          <p style="color:white; font-size:20px; margin-right:80px; margin-top:90px">
						 Funding is the main requirement for NGOs to implement their plans in social sector.
						  NGOs India has been helping NGOs for getting funds and grants by various informations, knowledge-base and disseminating useful resources to enhance and improve programmes and activities.
							For funding strategy NGOs have to create a plan that should include the way and methods of fund raising. NGOs always need funds even when if already running any project, but after the project ends, they need for more funding to sustain their programme. And it is not easy to get the desired support from donors all the time.
							 NGOs should keep the funding strategy ready to avoid tasks from such situations.
	          </p>

	        </div>
	      </div>

	</body>
</html>

<?php
require('confige.php');
?>
<form style="margin-top:50px" action="submit.php" method="post">
	<script
												src="https://checkout.stripe.com/checkout.js" class="stripe-button" style="background:#000"
												data-key="<?php echo $publishableKey?>"
												data-amount="12000"
												data-name="HelpRaise"
												data-description="Help with smile."
												data-image="https://www.nicepng.com/png/full/195-1957002_union-of-helping-hands-gender-issues-and-human.png"
												data-currency="inr"
												data-email= <?php echo $_POST['email']; ?>
											>
											</script>

</form>
