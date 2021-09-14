<?php
require('confige.php');
?>
<form action="submit.php" method="post">
	<script
												src="https://checkout.stripe.com/checkout.js" class="stripe-button" style="background:#000"
												data-key="<?php echo $publishableKey?>"
												data-amount="12000"
												data-name="HelpRaise"
												data-description="Help with smile."
												data-image="https://saveanimals.io/img/logo.png"
												data-currency="inr"
												data-email= <?php echo $_POST['email']; ?>
											>
											</script>

</form>
