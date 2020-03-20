<?php include 'includes/function.php'; ?>

<?php  ?>

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
	<div class="container">
		<h3>User Register Here </h3>
			
			<form>
				<div class="form-group">
					<label id="id"></label>
					<form>
						<div class="form-row">
						<div class="form-group col-md-2">
					      <label for="inputState">Role</label>
					      <select id="inputState" class="form-control">
					        <option selected>Student</option>
					        <option>Teacher</option>
					      </select>
					      </div>
					       <div class="form-group col-md-2">
					      <label for="inputSession">Session From</label>
					      <select id="inputState" class="form-control">
					        <option selected>2020</option>
					        <option>2021</option>
					        <option>2022</option>
					        <option>2023</option>
					        <option>2024</option>
					      </select>
					      </div >
					      <div class="form-group col-md-2">
					      <label for="inputSession">Session From</label>
					      <input class="form-control" id="disabledInput" type="text" placeholder="" disabled>
						</div>
					</div>


					      <!-- Student Basic Details Section -->
					      <label>Student Basic Details </label>
					      <div class="form-row">
					      <div class="form-group col-md-2">
					      	<label for="inputState">Full Name</label>
					      	<input type="text" class="form-control" id="inputName" placeholder="Full Name">
					      	
					      </div>
					       <div class="form-group col-md-2">
					       	<label for="inputState">Father's Name</label>
					      	<input type="text" class="form-control" id="inputFather" placeholder="Father's Name">
					      	
					      </div>
					      <div class="form-group col-md-2">
					       	<label for="inputState">Mother's Name</label>
					      	<input type="text" class="form-control" id="inputFather" placeholder="Mother's Name">
					  
					      </div>
					  </div>
					     

					<!-- Student Other Details Section  -->

						<label>Communication Details</label>
					  <div class="form-row">
					    <div class="form-group col-md-4">
					      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
					    </div>
					    <div class="form-group col-md-4">
					      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
					    </div>
					    <div class="form-group col-md-4">
					      <input type="text" class="form-control" id="inputMobile" placeholder="Mobile">
					    </div>
					  </div>

					  <!-- Address Section Here -->
					  <label>Address</label>
					  <div class="form-row">
					  <div class="form-group col-md-6">
					    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
					  </div>
					  <div class="form-group col-md-6">
					    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
					  </div>
					</div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputCity">City</label>
					      <input type="text" class="form-control" id="inputCity">
					    </div>
					    
					    </div>
					    <div class="form-group col-md-2">
					      <label for="inputZip">Zip</label>
					      <input type="text" class="form-control" id="inputZip">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="form-check">
					      <input class="form-check-input" type="checkbox" id="gridCheck">
					      <label class="form-check-label" for="gridCheck">
					        Check me out
					      </label>
					    </div>
					  </div>
					  <button type="submit" class="btn btn-primary">Sign in</button>
					</form>
				</div>
			</form>
			
	</div>
<br>
<?php 

	// $query = "SELECT * FROM login where username = 'admin'";
	// $result = mysqli_query($con, $query);

	// $row = mysqli_fetch_assoc($result);

	// echo $row['role'];



 ?>

</body>
</html>