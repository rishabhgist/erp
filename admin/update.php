<?php 
include 'include/db.php';
include 'include/header.php';
include 'include/navbar.php';
$message = '';
$role = '';

/*Setting Blank Variables*/

				$fname = '';
				$lname = '';
				$father = '';
				$mother = '';
				$email = '';
				$dob = '';
				$course = '';
				$sessionf = '';
				$sessiont = '';
				$mobile = '';
				$address1 = '';
				$address2 = '';
				$username = '';

				$highschool_school = '';
				$highschool_board = '';
				$highschool_percent = '';
				$inter_board = '';
				$inter_school = '';
				$inter_percent = '';
				$grad_school = '';
				$grad_board = '';
				$grad_percent = '';

/*Searching for user */

if (isset($_POST['search'])) {

	$username = $_POST['userid'];
		
	if ($_POST['userid'] == '') {

		$message = '<div class="alert alert-danger btn-ask" role="alert">Please Enter UserId!</div>';
		
	}else{
		/*User Search*/

		$user_check = "SELECT * FROM users WHERE loginId = '$username'";
		$result_user = mysqli_query($con,$user_check);
		$count = mysqli_num_rows($result_user);
		if ($count == 1) {
					
				$row = mysqli_fetch_assoc($result_user);
				$role = $row['role'];
				$role = ucfirst($role);
				// Getting Values from Database

				/*User Basic Details*/

				$q_u = "SELECT * FROM userdata WHERE loginId = '$username'";
				$res = mysqli_query($con,$q_u);
				$rw = mysqli_fetch_assoc($res);


				$fname = $rw['fname'];
				$lname = $rw['lname'];
				$father = $rw['father'];
				$mother = $rw['mother'];
				$email = $rw['email'];
				$dob = $rw['dob'];
				$course = $rw['course'];
				$sessionf = $rw['session_from'];
				$sessiont = $rw['session_to'];
				$mobile = $rw['mobile'];
				$address1 = $rw['address1'];
				$address2 = $rw['address2'];

				/*Education Details */

				$q_e = "SELECT * FROM education WHERE loginId ='$username'";
				$res_e  = mysqli_query($con,$q_e);
				$rew = mysqli_fetch_assoc($res_e);

				$highschool_school = $rew['highschool_school'];
				$highschool_board = $rew['highschool_board'];
				$highschool_percent = $rew['highschool_percent'];
				$inter_board = $rew['inter_board'];
				$inter_school = $rew['inter_school'];
				$inter_percent = $rew['inter_percent'];
				$grad_school = $rew['grad_school'];
				$grad_board = $rew['grad_board'];
				$grad_percent = $rew['grad_percent'];

		
		}else{

			$message = '<div class="alert alert-danger btn-ask" role="alert">User not found!</div>';
			

		}	
	}
}

	/*Updating into database*/

if (isset($_POST['update'])) {


		$username = $_POST['userid'];
		
		/*Checking Blank Fields First*/

		if ($_POST['fname'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> First Name is Empty!</div>';
		}elseif ($_POST['lname'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Last Name is Empty!</div>';
		}elseif ($_POST['father'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Father Name is Empty!</div>';
		}elseif ($_POST['mother'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Mother Name is Empty!</div>';
		}elseif ($_POST['email'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Email is Empty!</div>';
		}elseif ($_POST['dob'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Date of Birth is Empty!</div>';
		}elseif ($_POST['course'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Course is Empty!</div>';
		}elseif ($_POST['sessionf'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Session From is Empty!</div>';
		}elseif ($_POST['sessiont'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Session To is Empty!</div>';
		}elseif ($_POST['mobile'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert">Mobile is Empty!</div>';
		}elseif ($_POST['address1'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Address is Empty!</div>';
		}elseif ($_POST['address2'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Address is Empty!</div>';
		}

		/*Education Field Check */

		elseif ($_POST['highschool_school'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> High School School is Empty!</div>';
		}
		elseif ($_POST['highschool_board'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> High School Board is Empty!</div>';
		}elseif ($_POST['highschool_percent'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> High School Percentage is Empty!</div>';
		}
		elseif ($_POST['inter_school'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Intermediate School is Empty!</div>';
		}
		elseif ($_POST['inter_board'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Intermediate Board is Empty!</div>';
		}elseif ($_POST['inter_percent'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Intermediate Percentage is Empty!</div>';
		}elseif ($_POST['grad_school'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Graduation School is Empty!</div>';
		}elseif ($_POST['grad_board'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Graduation Board is Empty!</div>';
		}elseif ($_POST['grad_percent'] == '') {
			$empty_message = '<div class="alert alert-danger btn-ask" role="alert"> Graduation Percentage is Empty!</div>';
		}else{

		// Inserting Into Variables

		/*Basic Details*/

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$father = $_POST['father'];
		$mother = $_POST['mother'];
		$email = $_POST['email'];
		$dob = $_POST['dob'];
		$sessionf = $_POST['sessionf'];
		$sessiont = $_POST['sessiont'];
		$mobile = $_POST['mobile'];
		$address1 = $_POST['address1'];
		$address2 = $_POST['address2'];

		/*Education Details */

		$highschool_school = $_POST['highschool_school'];
		$highschool_board = $_POST['highschool_board'];
		$highschool_percent = $_POST['highschool_percent'];
		$inter_board = $_POST['inter_board'];
		$inter_school = $_POST['inter_school'];
		$inter_percent = $_POST['inter_percent'];
		$grad_school = $_POST['grad_school'];
		$grad_board = $_POST['grad_board'];
		$grad_percent = $_POST['grad_percent'];

		/*Updation Query Basic Details*/

		$query_basic = "UPDATE userdata SET fname='$fname',lname='$lname',father='$father',mother='$mother',email= '$email',dob = '$dob',session_from = '$sessionf',session_to ='$sessiont',mobile='$mobile',address1='$address1',address2='$address2' WHERE loginId='$username'";
		$result_basic = mysqli_query($con,$query_basic);

		$query_edu = "UPDATE education SET highschool_school = '$highschool_school',highschool_board='$highschool_board',highschool_percent='$highschool_percent',inter_school='$inter_school',inter_board='$inter_board',inter_percent='$inter_percent',grad_school='$grad_school',grad_board='$grad_board',grad_percent='$grad_percent' WHERE loginId='$username'";
		
		$result_edu = mysqli_query($con,$query_edu);

		if ($result_basic && $result_edu) {
			$message = '<div class="alert alert-success btn-ask" role="alert">Data Saved Successfully!</div>';
		}else{

			$message = '<div class="alert alert-danger btn-ask" role="alert">Data not saved!</div>';

		}



	}
}

?>
<form class="form-group" method="post">
<div class="registration-details">
	<div class="profile-div">
	        <span class="profile-heading">Basic Details</span>
	</div>
	<div class="reg-detail">
		<div class="row mar-10">
		<div class="col-md-3">
			<input type="text" name="userid" autofocus class="form-control" placeholder="Enter User Id" value="<?php echo $username ?>">
		</div>
		<div class="col-md-3">
				<button class="btn-profile" name="search">Search</button>
		</div>
		<div class="col-md-4">
			<?php echo $message ?>
		 </div>
		</div>
		<hr class="hr-post">
	

	<div class="row mar-10" >
		<div class="col-md-3">
			<label for="fname">First Name</label>
			<input type="text" name="fname" autofocus class="form-control" value="<?php echo $fname ?>">
		</div>
		<div class="col-md-3">
			<label for="lname">Last Name</label>
			<input type="text" name="lname" autofocus class="form-control"value="<?php echo $lname ?>">
		</div>
		<div class="col-md-3">
			<label for="dob">Date of Birth</label>
			<input type="text" name="dob" autofocus class="form-control" placeholder="dd-mm-yy" value="<?php echo $dob ?>">
		</div>
		<div class="col-md-3">
			<label for="course">Course</label>
			<input type="text" name="course" autofocus class="form-control" readonly value="<?php echo $course ?>">
		</div>
	</div>
	<div class="row mar-10">
		<div class="col-md-3">
			<label for="sessionf">Session From</label>
			<input type="text" name="sessionf" autofocus class="form-control" value="<?php echo $sessionf ?>">
		</div>
		<div class="col-md-3">
			<label for="sessiont">Session To</label>
			<input type="text" name="sessiont" autofocus class="form-control" value="<?php echo $sessiont ?>">
		</div>
		<div class="col-md-3">
			<label for="father">Father's Name</label>
			<input type="text" name="father" autofocus class="form-control" value="<?php echo $father ?>">
		</div>
		<div class="col-md-3">
			<label for="mother">Mother's Name</label>
			<input type="text" name="mother" autofocus class="form-control" value="<?php echo $mother ?>">
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
			<input type="text" name="mobile" autofocus class="form-control" placeholder="Without 0 or 91" value="<?php echo $mobile ?>">
		</div>
		<div class="col-md-3">
			<label for="email">Email</label>
			<input type="text" name="email" autofocus class="form-control" placeholder="email@erp.com" value="<?php echo $email ?>">
		</div>
		<div class="col-md-3">
			<label for="fatherContact">Father's Contact</label>
			<input type="text" name="fatherContact" autofocus class="form-control" placeholder="Without 0 or 91" value="<?php echo $mobile ?>">
		</div>
		<div class="col-md-3">
			<label for="fatherContact">Role of the user</label>
		    <input type="text" name="role" value="<?php echo $role ?>" readonly class="form-control">
		</div>

	</div>
	<div class="row mar-10">
		<div class="col-md-4">
			<label for="address1">Address</label>
			<input type="text" name="address1" autofocus class="form-control" placeholder="Address Line 1" value="<?php echo $address1 ?>">
		</div>
		<div class="col-md-4">
			<label for="address2">Address</label>
			<input type="text" name="address2" autofocus class="form-control" placeholder="Address Line 2" value="<?php echo $address2 ?>">
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
			<input type="text" name="highschool_school" autofocus class="form-control" placeholder="School/Institute" value="<?php echo $highschool_school ?>">	
			</div>
			<div class="col-md-3">
			<input type="text" name="highschool_board" autofocus class="form-control" placeholder="Board/University" value="<?php echo $highschool_board ?>">	
			</div>
			<div class="col-md-3">
			<input type="text" name="highschool_percent" autofocus class="form-control" placeholder="Percentage" value="<?php echo $highschool_percent ?>">	
			</div>

	</div>
	</div>
	<div class="container">
			<div class="row mar-10">
	        <div class="col-md-2">
	        	<span class="mar-10">Intermediate</span>
			</div>
			<div class="col-md-3">
			<input type="text" name="inter_school" autofocus class="form-control" placeholder="School/Institute" value="<?php echo $inter_school ?>">	
			</div>
			<div class="col-md-3">
			<input type="text" name="inter_board" autofocus class="form-control" placeholder="Board/University" value="<?php echo $inter_board ?>">	
			</div>
			<div class="col-md-3">
			<input type="text" name="inter_percent" autofocus class="form-control" placeholder="Percentage" value="<?php echo $inter_percent ?>">	
			</div>

	</div>
	</div>
	<div class="container">
			<div class="row mar-10">
	        <div class="col-md-2">
	        	<span class="mar-10"> Graduation</span>
			</div>
			<div class="col-md-3">
			<input type="text" name="grad_school" autofocus class="form-control" placeholder="School/Institute" value="<?php echo $grad_school ?>">	
			</div>
			<div class="col-md-3">
			<input type="text" name="grad_board" autofocus class="form-control" placeholder="Board/University" value="<?php echo $grad_board ?>">	
			</div>
			<div class="col-md-3">
			<input type="text" name="grad_percent" autofocus class="form-control" placeholder="Percentage" value="<?php echo $grad_percent ?>">	
			</div>
			</div>
		</div>
			<div class="mar-20">
			<center>
				<button class="btn-profile" name="update">Update</button>
			</center>
			</div>
			</div>

</div>
</div>

</form>



<?php include 'include/footer.php'; ?>