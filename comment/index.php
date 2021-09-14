<?php

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="comment.css">

	<link rel="icon" href="paw.ico">

	<title>Comment Section</title>

	<style>

	body {
	    width: 100%;
	    min-height: 100vh;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    flex-direction: column;
	    background: linear-gradient(#EE9B00, #E9D8A6);
	}

	.wrapper .form .input-group .btn {
	    margin: 20px 0;
	    display: block;
	    padding: .7rem 2rem;
	    opacity: .8;
	    color: #FFF;
	    background: linear-gradient(#EE9B00, #CA6702);
	    border: none;
	    outline: none;
	    border-radius: 3px;
	    cursor: pointer;
	    font-size: 1rem;
	    transition: .3s ease-in;
	}

	.wrapper .form .input-group input, .wrapper .form .input-group textarea {
	    width: 100%;
	    height: 100%;
	    border: 1px solid #CA6702;
	    outline: none;
	    padding: 5px 10px;
	}

	</style>
</head>
<body>
	<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Feedback</label>
				<textarea id="comment" name="comment" placeholder="Enter your Feedback" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Feedback</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php

			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}

			?>
		</div>
	</div>
</body>
</html>
