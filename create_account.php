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
	<h1>Sign Up Here</h1>
		<form  method="post" action="create_account.php">
			<!-- user_name -->
			<div class="form-input fa fa-user">
				<input type="text" name="username" required='required' placeholder="User Name"/> 
			</div>
			<!-- Password -->
			<div class="form-input fa fa-lock">
				<input type="password" name="password_1" required='required' placeholder="Password"/>
			</div>
			<div class="form-input fa fa-lock">
				<input type="password" name="password_2" required='required' placeholder="Verify Password"/>
			</div>
			<!-- sign up Button -->
				<input type="submit" name="create_account" value="SIGN UP" class="btn-login"/>
					<!-- Link to Create Account -->
					<u><center><h4><a href="login.php" style="color:#fff; font-size:17px">I already have an account</a></h4></center></u>
		</form>
 </div>
 
</body>
</html>