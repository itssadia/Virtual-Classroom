<?php
	$msg = "";

	if (isset($_POST['submit'])) {
		$con = new mysqli('localhost', 'root', '', 'studentdb');

		$username = $con->real_escape_string($_POST['username']);
		$email = $con->real_escape_string($_POST['email']);
		$password = $con->real_escape_string($_POST['password']);
		$cPassword = $con->real_escape_string($_POST['cPassword']);

		if ($password != $cPassword)
			$msg = "Please Check Your Passwords!";
		if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						
		else {
			$hash = password_hash($password, PASSWORD_BCRYPT);
			$con->query("INSERT INTO user (username,email,password) VALUES ('$username', '$email', '$hash')");
			$msg = "You have been registered!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign Up Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body style=" background:url(imgs/background.jpg)">
	<div class="container" style="margin-top: 100px;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<img src="images/logo3.jpg"><br><br>

				

				<form method="post" action="trialform.php">
					<input class="form-control" minlength="3" name="username" placeholder="Name:"><br>
					<input class="form-control" name="email" type="email" placeholder="Email:"><br>
					<input class="form-control" minlength="5" name="password" type="password" placeholder="Password:"><br>
					<input class="form-control" minlength="5" name="cPassword" type="password" placeholder="Confirm Password:"><br>
					<input class="btn btn-primary" name="submit" type="submit" value="Sign up"><br>
				<a href="index.php"><input class="btn btn-secondary" name="Back" type="button" value="Back to login"><br></a>
				</form>

			</div>
		</div>
	</div>
	
	</div>
</body>
</html>