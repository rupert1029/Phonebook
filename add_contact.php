<html>
<head>
<title>Create Account</title>
	<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
   <!-- Navigations -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-success" style="margin-top:20px">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarText">
				<a class="navbar-brand mb-0" style="font-size:30px; color:white;">Phonebook</a>
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link fa fa-list" href="index.php" style="font-size:18px; margin-top:5px"> Contact List<span class="sr-only">(current)</span></a>
		      </li>
			  <li class="nav-item active">
		        <a class="nav-link fa fa-user-plus" href="add_contact.php" style="font-size:18px; margin-top:5px"> Add Contacts<span class="sr-only">(current)</span></a>
		      </li>
			 
<!-- User Profile and Logout Button -->
			<div class="btn-group" style="margin-left:590px">
				<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:25px;">
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item fa fa-power-off" href="login.php"> Logout</a>
				</div>
			</div>
         
		</div>
	</nav>
	
<!-- Heading -->		
	<center><b><h2><p style="margin-top:40px">Add Contacts</p></b></h2></center>
 
<!-- Add Contact Form --> 
	<div class="container" style="margin-left:265px">
	<form>
		<div class="form-column">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Name</label>
				<input type="text" class="form-control" id="inputName" placeholder="Full Name">
			</div>
			<div class="form-group col-md-6">
				<label for="inputPassword4">Phone Number</label>
				<input type="text" class="form-control" id="inputPhoneNumber" placeholder="Phone Number">
			</div>
		</div>
		<!-- Add Contact Button -->
		<button type="submit" class="btn btn-success" style="margin-left:220px; margin-top:30px">Add Contact</button>
	</form>
	</div>
</div>

<!-- Dropdown Menus Activation -->
<script src="bootstrap/js/jquery-slim.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>