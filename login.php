<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
 <title> Login </title>
 <link rel="stylesheet" a href="stylesheet.css">
 <link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
 <div class="container">
	<img src="avatar.png"/>
	<h1>Login Here</h1>
		<form  method="post" action="login.php">
			<!-- Login -->
			<div class="form-input fa fa-user">
				<input type="text" name="username" placeholder="User Name" required='required'/> 
			</div>
			<!-- Password -->
			<div class="form-input fa fa-lock">
				<input type="password" name="password" placeholder="Password" required='required'/>
			</div>
			<!-- Login Button -->
				<input type="submit" name="login_user" value="LOGIN" class="btn-login"/>
					<!-- Link to Create Account -->
					<center><h4><a style="color:#fff; font-size:17px">Don't have an account?</a></h4></center>
					<u><center><h4><a href="create_account.php" style="color:#fff; font-size:17px">Click here to create an account</a></h4></center></u>
		</form>
 </div>
 
 
</body>
</html>