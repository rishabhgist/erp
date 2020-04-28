<?php include 'include/db.php'; ?>
<?php 
$empty_message = '';

include 'include/header.php';
include 'include/navbar.php';


setcookie("UserFormData", serialize($_POST), time()+120);

	if (isset($_POST['save'])) {
		
		

		/* Check Feilds Value*/

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
		}
		else{

		// Inserting Into Database

		$role = $_POST['roles'];
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

		



		

		/*User Regestration Check*/

		$user_check2 = "SELECT * FROM userdata";
		$result_user2 = mysqli_query($con,$user_check2);
		$row2 = mysqli_fetch_assoc($result_user2);

		
		if ($row2['fname']==$fname && $row2['father']==$father) {

			header('location:error.php');
			$_SESSION['message'] = "User Already Resgistered";
			$_SESSION['user_id'] = $row2['loginId'];

		}else{


			$user_check = "SELECT id FROM users ORDER BY id DESC LIMIT 1";
			$result_user = mysqli_query($con,$user_check);
			$row = mysqli_fetch_assoc($result_user);
			$id = $row['id'];

			/*Generating Login Id */

				$id = $id + 1;
				$course = strtoupper($course);
				$password = rand(1999,5999);

				if ($id >= 100) {
					
					$loginId = $sessionf.$course.$id;

				}else{

					$loginId = $sessionf.$course.'0'.$id;
				}
			
			
				/*Saving User Data -- Login Details*/

			$user_save = "INSERT INTO users (id,loginId,password,role) VALUES ('$id','$loginId','$password','$role')";
			$result_save = mysqli_query($con,$user_save);

				/*Saving User Data -- Personal Details*/

			$user_data_save = "INSERT INTO userdata 
			(id,loginId,fname,lname,course,father,mother,email,mobile,dob,session_from,session_to,address1,address2) 
			VALUES 
			('$id','$loginId','$fname','$lname','$course','$father','$mother', '$email','$mobile','$dob','$sessionf','$sessiont','$address1','$address2')";

			$result_data_save = mysqli_query($con,$user_data_save);


				/*Saving User Data -- Education Details*/

			$education_save = "INSERT INTO education 
			(id,loginId,highschool_school,highschool_board,highschool_percent,inter_school,inter_board,inter_percent,grad_school,grad_board,grad_percent) VALUES ('$id','$loginId','$highschool_school','$highschool_board','$highschool_percent','$inter_school','$inter_board','$inter_percent','$grad_school','$grad_board','$grad_percent')";
			
			$result_education = mysqli_query($con,$education_save);

			header('location:success.php');
			$_SESSION['message'] = "User Added Succefully";
			$_SESSION['user_id'] = $loginId;
			$_SESSION['password'] = $password;
	
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
		    <label for="select-role">Role For this User </label>
		    <select class="form-control" name="roles">
		      <option value="student">Student</option>
		      <option value="teacher">Teacher</option>
		    </select>
		  </div>
		  <div class="col-md-3">
			<label>User Id for the User</label>
		    <input type="text" name="userid" readonly class="form-control">
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


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script type="text/javascript">

$(document).ready(function (){


})

	
</script>
<?php include 'include/footer.php'; ?>