<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="main-wrapper">
	
		<center><h2>Welcome <?php echo $_SESSION['username']; ?> </h2></center>
		<center><h4>Now you are a student of Virtual Classroom Network</h4></center>
                 

		
		<form action="index.html" method="post">
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<a href="facultyhome.php"><button type="button" class="login_button"> Visit Virtual Classroom </button></a>
				<button class="logout_button" type="submit">Log Out</button>	
			</div>
		</form>
	</div>
</body>
</html>