<?php 
include 'include/db.php';
include 'include/header.php';
include 'include/navbar.php';
$message = '';
$role = '';
if (isset($_POST['search'])) {
		

	$username = $_POST['userid'];
		/*User Search*/

		$user_check = "SELECT * FROM users";
		$result_user = mysqli_query($con,$user_check);
		
		while ($row = mysqli_fetch_assoc($result_user)) {
				$login = $row['loginId'];

				if ($username == $login) {

					$role = $row['role'];

				}else{

					$message = 'User not found';

				}


}
}

?>
<form method="post" class="form-group">
<div class="registration-details">
	<div class="profile-div">
	        <span class="profile-heading">Basic Details</span><?php echo $message ?>
	</div>
	<div class="reg-detail">
		<div class="row mar-10">
		<div class="col-md-3">
			<input type="text" name="userid" autofocus class="form-control" placeholder="Enter User Id">
		</div>
		<div class="col-md-3">
				<button class="btn-profile" name="search">Search</button>
		</div>
		<div class="col-md-2">
			<label>Role of the User</label>
		  </div>
		<div class="col-md-4">
		    <input type="text" name="role" value="<?php echo $role ?>" readonly class="form-control">
		 </div>
		</div>
		<hr class="hr-post">
	<div class="row mar-10">
		<div class="col-md-3">
			<label for="fname">First Name</label>
			<input type="text" name="fname" autofocus class="form-control">
		</div>
		<div class="col-md-3">
			<label for="lname">Last Name</label>
			<input type="text" name="lname" autofocus class="form-control">
		</div>
		<div class="col-md-3">
			<label for="dob">Date of Birth</label>
			<input type="text" name="dob" autofocus class="form-control" placeholder="dd-mm-yy">
		</div>
		<div class="col-md-3">
			<label for="course">Course</label>
			<input type="text" name="course" autofocus class="form-control">
		</div>
	</div>
	<div class="row mar-10">
		<div class="col-md-3">
			<label for="sessionf">Session From</label>
			<input type="text" name="sessionf" autofocus class="form-control">
		</div>
		<div class="col-md-3">
			<label for="sessiont">Session To</label>
			<input type="text" name="sessiont" autofocus class="form-control">
		</div>
		<div class="col-md-3">
			<label for="father">Father's Name</label>
			<input type="text" name="father" autofocus class="form-control">
		</div>
		<div class="col-md-3">
			<label for="mother">Mother's Name</label>
			<input type="text" name="mother" autofocus class="form-control">
		</div>
	</div>



 	</div>
 	<div class="profile-div">
	        <span class="profile-heading">Communication Details</span>
	</div>
	<div class="reg-detail">
	<div class="row mar-10">
		<div class="col-md-3">
			<label for="mobile">Contact Number</label>
			<input type="text" name="mobile" autofocus class="form-control" placeholder="Without 0 or 91">
		</div>
		<div class="col-md-3">
			<label for="email">Email</label>
			<input type="text" name="email" autofocus class="form-control" placeholder="email@erp.com">
		</div>
		<div class="col-md-3">
			<label for="fatherContact">Father's Contact</label>
			<input type="text" name="fatherContact" autofocus class="form-control" placeholder="Without 0 or 91">
		</div>
	</div>
	<div class="row mar-10">
		<div class="col-md-4">
			<label for="address1">Address</label>
			<input type="text" name="address1" autofocus class="form-control" placeholder="Address Line 1">
		</div>
		<div class="col-md-4">
			<label for="address2">Address</label>
			<input type="text" name="address2" autofocus class="form-control" placeholder="Address Line 2">
		</div>
	</div>
</div>
	<div class="profile-div">
	        <span class="profile-heading">Education Details</span>
	</div>
	<div class="edu-container">
	 		<div class="container">
			<div class="row mar-10">
	        <div class="col-md-2">
	        	<span class="mar-10"> High School</span>
			</div>
			<div class="col-md-3">
			<input type="text" name="school" autofocus class="form-control" placeholder="School/Institute">	
			</div>
			<div class="col-md-3">
			<input type="text" name="board" autofocus class="form-control" placeholder="Board/University">	
			</div>
			<div class="col-md-3">
			<input type="text" name="percentage" autofocus class="form-control" placeholder="Percentage">	
			</div>

	</div>
	</div>
	<div class="container">
			<div class="row mar-10">
	        <div class="col-md-2">
	        	<span class="mar-10">Intermediate</span>
			</div>
			<div class="col-md-3">
			<input type="text" name="school" autofocus class="form-control" placeholder="School/Institute">	
			</div>
			<div class="col-md-3">
			<input type="text" name="board" autofocus class="form-control" placeholder="Board/University">	
			</div>
			<div class="col-md-3">
			<input type="text" name="percentage" autofocus class="form-control" placeholder="Percentage">	
			</div>

	</div>
	</div>
	<div class="container">
			<div class="row mar-10">
	        <div class="col-md-2">
	        	<span class="mar-10"> Graduation</span>
			</div>
			<div class="col-md-3">
			<input type="text" name="school" autofocus class="form-control" placeholder="School/Institute">	
			</div>
			<div class="col-md-3">
			<input type="text" name="board" autofocus class="form-control" placeholder="Board/University">	
			</div>
			<div class="col-md-3">
			<input type="text" name="percentage" autofocus class="form-control" placeholder="Percentage">	
			</div>
			</div>
		</div>
			<div class="mar-20">
			<center>
				<button class="btn-profile" name="save">Update</button>
			</center>
			</div>
			</div>

</div>
</div>


</form>



<?php include 'include/footer.php'; ?>