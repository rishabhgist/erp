<?php include 'include/db.php'; ?>
<?php 
$empty_message = '';
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
		$address2 ='';

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

include 'include/header.php';
include 'include/navbar.php';

	if (isset($_POST['save'])) {
		


		/* Check Feilds Value*/


		if ($_POST['fname'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> First name is Empty!</div>';
		}elseif ($_POST['lname'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Last name is Empty!</div>';
		}elseif ($_POST['father'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Father name is Empty!</div>';
		}elseif ($_POST['mother'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Mother name is Empty!</div>';
		}elseif ($_POST['email'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Email is Empty!</div>';
		}elseif ($_POST['dob'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Date of Birth is Empty!</div>';
		}elseif ($_POST['course'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Course is Empty!</div>';
		}elseif ($_POST['sessionf'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Session From is Empty!</div>';
		}elseif ($_POST['sessiont'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Session To is Empty!</div>';
		}elseif ($_POST['address2'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Address is Empty!</div>';
		}elseif ($_POST['mobile'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Mobile is Empty!</div>';
		}elseif ($_POST['address1'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Address is Empty!</div>';
		}

		/*	Education Field Check */
						
		/*High School */

		elseif ($_POST['highschool_school'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> High School is Empty!</div>';
		}elseif ($_POST['highschool_board'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> High School Board is Empty!</div>';
		}elseif ($_POST['highschool_percent'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> High School Percent is Empty!</div>';
		}

		/*Intermediate*/

		elseif ($_POST['inter_school'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Intermediate School is Empty!</div>';
		}elseif ($_POST['inter_board'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert">Intermediate Board is Empty!</div>';
		}elseif ($_POST['inter_percent'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Intermediate Percentage is Empty!</div>';
		}

		/*Graduation*/

		elseif ($_POST['grad_school'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Graduation School is Empty!</div>';
		}elseif ($_POST['grad_board'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Graduation Board is Empty!</div>';
		}elseif ($_POST['grad_percent'] == '') {
			$empty_message = '<div class="alert alert-danger" role="alert"> Graduation Percentage is Empty!</div>';
		}




	}else {


		// Inserting Into Datavbase

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$father = $_POST['father'];
		$mother = $_POST['mother'];
		$email = $_POST['email'];
		$dob = $_POST['dob'];
		$course = $_POST['course'];
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

		/*Generating Login Id */

		$user = 025;

		$course = strtoupper($course);
		$loginId = $sessionf.$course.$user;
		$password = rand(1999,5999);

		/*Checking if LoginId already present or not */

		$user_check = "SELECT loginId FROM users";
		$result_user = mysqli_query($con,$user_check);
		$row = mysqli_fetch_assoc($result_user);
		

		if ($row['loginId'] == $loginId) {

			$user = $user + 1;
			$loginId = $sessionf.$course.$user;
		
		/*	Inserting Login Id and Password */

		}else{

			$user_save = "INSERT INTO users (loginId,password,role) VALUES ('$login','$password','$role')";
			$result_save = mysqli_query($con,$user_save);
			if (!$result_save) {

				header('Location:../error');
			}

			$user_data_save = "INSERT INTO userdata WHERE loginId='$loginId', fname='$fname', lname = '$lname', courseId ='course', father = '$father', mother ='$mother' emailID='$email',mobile = '$mobile', dob = '$dob',session_from = '$sessionf',session_to = '$sessiont'";

			$result_data_save = mysqli_query($con,$user_data_save);










			}
		}

	}
	

?>
<form method="post" class="form-group">
<div class="registration-details">
	<div class="profile-div">
	        <span class="profile-heading">Basic Details</span>
	</div>
	<div class="reg-detail">
	<div class="row mar-10">
		<div class="col-md-3">
		    <label for="select-role">Role For this User</label>
		    <select class="form-control" id="select-role">
		      <option>Student</option>
		      <option>Teacher</option>
		    </select>
		  </div>
		  <div class="col-md-3">
			<label>User Id for the User</label>
		    <input type="text" name="role" readonly class="form-control">
		 </div>
		 <div class="col-md-4">
		 	<?php echo $empty_message ?>
		 </div>
	</div>
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
			<input type="text" name="highschool_school" autofocus class="form-control" placeholder="School/Institute">	
			</div>
			<div class="col-md-3">
			<input type="text" name="highschool_board" autofocus class="form-control" placeholder="Board/University">	
			</div>
			<div class="col-md-3">
			<input type="text" name="highschool_percent" autofocus class="form-control" placeholder="Percentage">	
			</div>

	</div>
	</div>
	<div class="container">
			<div class="row mar-10">
	        <div class="col-md-2">
	        	<span class="mar-10">Intermediate</span>
			</div>
			<div class="col-md-3">
			<input type="text" name="inter_school" autofocus class="form-control" placeholder="School/Institute">	
			</div>
			<div class="col-md-3">
			<input type="text" name="inter_board" autofocus class="form-control" placeholder="Board/University">	
			</div>
			<div class="col-md-3">
			<input type="text" name="inter_percent" autofocus class="form-control" placeholder="Percentage">	
			</div>

	</div>
	</div>
	<div class="container">
			<div class="row mar-10">
	        <div class="col-md-2">
	        	<span class="mar-10"> Graduation</span>
			</div>
			<div class="col-md-3">
			<input type="text" name="grad_school" autofocus class="form-control" placeholder="School/Institute">	
			</div>
			<div class="col-md-3">
			<input type="text" name="grad_board" autofocus class="form-control" placeholder="Board/University">	
			</div>
			<div class="col-md-3">
			<input type="text" name="grad_percent" autofocus class="form-control" placeholder="Percentage">	
			</div>
			</div>
		</div>
			<div class="mar-20">
			<center><button class="btn-profile" name="save">Save</button></center>
			</div>
			</div>

</div>
</div>


</form>



<?php include 'include/footer.php'; ?>