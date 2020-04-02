<?php include 'includes/function.php'; ?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<title>Registration Panel</title>
</head>
<body>
	<nav class="navbar navbar-expand bg-dark">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a href="#home" class="nav-link">Home</a>
			</li>
			<li class="nav-item">
				<a href="#home" class="nav-link">Student</a>
			</li>
			<li class="nav-item">
				<a href="#home" class="nav-link">Teacher</a>
			</li>
			<li class="nav-item">
				<a href="#home" class="nav-link">Report</a>
			</li>
			<li class="nav-item">
				<a href="#home" class="nav-link">LogOut</a>
			</li>
	
		</ul>
	</nav>
	<div class="container-test">
		<h3>User Register Here </h3>
			<form id="role" class="form">
				<div class="form-group">
					
					<form>
						      <label for="inputState">Role</label>
							      <select id="inputState" class="form-control">
							        <option selected>Student</option>
							        <option>Teacher</option>
						      </select>
					<button onclick="changeForm();"><img src="img/icon.png" class="buttonNext"></button>
				</form>
			</div>
		</form>
		<form id="detail" class="display">
				<div class="form-group">
					
					<form>
						<label>Details</label>
						<div class="form-row">
						  
						<div class="form-group col-md-4">
							  <input type="text" name="fname" class="form-control" placeholder="Name">
					     </div>
					     <div class="form-group col-md-4">
							  <input type="text" name="mobile" class="form-control" placeholder="Mobile">
					     </div>
					</div>
					<button onclick="changeForm();"><img src="img/icop.png" class="buttonNext"></button>
					<button onclick="changeForm();"><img src="img/icon.png" class="buttonNext"></button>

				</form>
			</div>
		</form>
			
			
	</div>
<br>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

<script type="text/javascript">

	


	function changeForm(){

		$('detail').removeClass('display');
		alert();


	}



</script>
</body>
</html>