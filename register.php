<?php
	session_start();
	require('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign Up Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background:url(imgs/background.jpg)" ;>
	<div id="main-wrapper">
	<center><h2>Sign Up Form</h2></center>
		<form class="myform"   action="register.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/logo3.jpg" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" class="inputvalues" >
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" class="inputvalues" >
				<label><b>Confirm Password</b></label>
				<input type="password" placeholder="Enter Password" name="cpassword" class="inputvalues" >
                                
				<input  name="submit_btn"  class="login_button" type="submit" id="signup_btn" value="Sign Up"/><br>
				
				<a href="student_index.php"><button type="button" class="back_btn"><< Back to Login</button></a>
			</div>
		</form>
		
		<?php
			if(isset($_POST['submit_btn']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from user where username='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{$hash = password_hash($password, PASSWORD_BCRYPT);
							$query = "insert into user values('$username','$hash')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								header( "Location: homepage.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>
	</div>
</body>
</html>