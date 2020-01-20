<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="navbar.css"/>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<style>
		    .btn {
			background-color: #343A40;
			color: white;
			padding: 13px;
			font-size: 13px;
			border: none;
			margin-right:15px
			}
			
			.dropbtn {
			background-color: #343A40;
			color: white;
			padding: 13px;
			font-size: 13px;
			border: none;
			margin-right:15px
			}
			
			.dropdown {
			position: relative;
			display: inline-block;
			}
			
			.dropdown-content {
			display: none;
			position: absolute;
			background-color: #717D87;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
			}
			
			.dropdown-content a {
			color: black;
			padding: 12px 18px;
			text-decoration: none;
			display: block;
			}
			
			.dropdown-content a:hover {background-color: #65717C;}
			
			.dropdown:hover .dropdown-content {display: block;}
			
			.dropdown:hover .dropbtn {background-color: #717D87;}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">Tutor Hub</a>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="btn" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="btn" href="../AboutUs/page1">About us</a>
					</li>
					<li class="nav-item dropdown">
						<div class="dropdown">
							<button class="dropbtn">Q/A </button>
							<div class="dropdown-content">
								<a href="#">Post Questions</a>
								<a href="#">Answer Questions</a>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown">
						<div class="dropdown">
							<button class="dropbtn">MyAccount </button>
							<div class="dropdown-content">
								<a class="dropdown-item" href="#">Personal Information</a>
								<a class="dropdown-item" href="#">Payment Method</a>
								<a class="dropdown-item" href="#">Your Questions</a>
								<a class="dropdown-item" href="#">Your Answers</a>
								<a class="dropdown-item" href="#">Time Sechules</a>
							</div>
						</div>
					</li>
				</ul>
			</div>	
			<?php $loginstatus = $_SESSION["loginstatus"];
			if ($loginstatus == "0") {
			  echo "<a href ='/Homepage/Homepage.php'>Sign in</a>";
			  echo "  \"  ";
			  echo "<a href ='../Signup'>Sign up</a>";
			} else {
		      $username = $_SESSION["username"]; 
			  echo "<a href ='/Homepage/Homepage.php'>$username</a>";
			  echo "             ||                ";
			  echo "<a href ='/Homepage/Homepage.php'>Sign out</a>";
			}
			?>
		</nav>
		
		<nav class="navbar fixed-bottom navbar-dark bg-dark">
			<a class="navbar-brand" href="#">@2018 by JIAHUI ZOU</a>
		</nav>
	</body>
</html>
