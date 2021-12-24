<!--
Author : Aguzrybudy
Created : Jum'at, 14-April-2017
Title : Login dengan Bcrypt
-->

<?php 
session_start();
if (!empty($_SESSION['username'])):
	header('location:home.php');
endif;
?>
<!DOCTYPE html>
<html lang="">
	<head>
	 	<!-- Required meta tags always come first -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Secure Login PHP</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<style>
			#wrapper{
				position: relative;
				display: block;
				margin: auto;
				background:#f5f5f5;
				width:500px;
				height: auto;
				padding:30px;
				margin-top:5%;
			}
		</style>
	</head>
	<body>
		
		<div id="wrapper">
			<form action="process.php" method="post" accept-charset="utf-8">

				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" name="username" placeholder="Username or Email">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="text" class="form-control" name="password" placeholder="Password">
				</div>

				<div class="form-group">
					<input type="reset" value="Cancel" class="btn btn-danger">
					<input type="submit" value="Login" class="btn btn-primary">
				</div>

			</form>
			<a href="register.php">Register</a>
		</div>

		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>