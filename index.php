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
	<center><b><h2><p style="margin-top:40px;">Contact List</p></b></h2></center>

<!-- Search Box -->
			<form class="form-inline my-2 my-lg-0" style="margin-left:800px">
				<input class="form-control mr-sm-2" type="search" placeholder="Search Name" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0 fa fa-search" type="submit" style="margin-left:-7px; height:38px"></button>
			</form>

<!-- Table List -->
		<div class="container">
			<table class="table table-striped" style="margin-top:20px">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">Name</th>
				<th scope="col">Mobile Number</th>
				<th scope="col">Options</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<th scope="row">1</th>
				<td>Mark Marks</td>
				<td>09072471811</td>
				<td><a class="fa fa-edit" href="#"> Edit</a> | <a class="fa fa-trash" href ="#" data-toggle="modal" data-target="#exampleModal"> Delete</a></td>
				</tr>
				<tr>
				<th scope="row">2</th>
				<td>Jacob Jacobs</td>
				<td>09129808585</td>
				<td><a class="fa fa-edit" href="#"> Edit</a> | <a class="fa fa-trash" href ="#" data-toggle="modal" data-target="#exampleModal"> Delete</a></td>
				</tr>
				<tr>
				<th scope="row">3</th>
				<td>Larry Larrys</td>
				<td>09358651548</td>
				<td><a class="fa fa-edit" href="#"> Edit</a> | <a class="fa fa-trash" href ="#" data-toggle="modal" data-target="#exampleModal"> Delete</a></td>
				</tr>
			</tbody>
			</table>
		</div>	
</div>

<!-- Delete Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel" style="color:red; font-size:20px">Delete Contact</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body fa fa-info-circle" style="font-size:20px; color:darkgreen">
			Confirm deleting this contact?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light fa fa-close" style="font-size:15px" data-dismiss="modal"> Cancel</button>
				<button type="button" class="btn btn-success fa fa-check" style="font-size:15px"> Confirm</button>
			</div>
			</div>
			</div>
		</div>
<!-- Dropdown Menus Activation -->
<script src="bootstrap/js/jquery-slim.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>