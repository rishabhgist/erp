<?php 
include 'includes/db.php';
include 'includes/header.php'; 
include 'includes/nav.php';

$user = $_SESSION['username'];
$role = $_SESSION['role'];
$err_message = '';

if ($_SESSION['username']) {

                $query = "SELECT * FROM userdata WHERE loginId='$user'";
                $result = mysqli_query($con,$query);
                $user_detail = mysqli_fetch_assoc($result);

                /*User Data Retrive*/


                $userid = $user_detail['loginId'];
                $fname = $user_detail['fname'];
                $lname = $user_detail['lname'];
                $father = $user_detail['father'];
                $mother = $user_detail['mother'];
                $course = $user_detail['course'];
                $dob = $user_detail['dob'];
                $email = $user_detail['email'];
                $mobile = $user_detail['mobile'];

                if ($role == "student") {
                	$sessionf= $user_detail['session_from'];
                	$sessiont= $user_detail['session_to'];
                }
                $address1 = $user_detail['address1'];
                $address2 = $user_detail['address2'];

                /*Fecthing Education Details*/

                $query2 = "SELECT * FROM education WHERE loginId='$user'";
                $result2 = mysqli_query($con,$query2);
                $edu_detail = mysqli_fetch_assoc($result2);

                $highschool_school = $edu_detail['highschool_school'];
				$highschool_board = $edu_detail['highschool_board'];
				$highschool_percent = $edu_detail['highschool_percent'];
				$inter_board = $edu_detail['inter_board'];
				$inter_school = $edu_detail['inter_school'];
				$inter_percent = $edu_detail['inter_percent'];
				$grad_school = $edu_detail['grad_school'];
				$grad_board = $edu_detail['grad_board'];
				$grad_percent = $edu_detail['grad_percent'];


        }else{

            header('Location:error');
            $_SESSION['profile_error'] = "Profile not found";
        }

if (isset($_POST['save'])) {
	
	$old = $_POST['oldPassword'];
	$new = $_POST['newPassword'];

	$old = mysqli_real_escape_string($con,$old);
	$new = mysqli_real_escape_string($con,$new);

	$check_password = "SELECT password FROM users WHERE loginId='$user'";
	$check_result = mysqli_query($con,$check_password);
	$row = mysqli_fetch_assoc($check_result);
	$db_pwd = $row['password'];

	if ($old == $db_pwd) {
		

		$update_password = "UPDATE users SET password = '$new' WHERE loginId='$user'";
		$result_update = mysqli_query($con,$update_password);
		$err_message = '<div class="alert alert-success" role="alert">Password Updated</div>';

	}else{

		$err_message = '<div class="alert alert-danger" role="alert"> Old Password Incorrect !!</div>';
	}



}
?>

<div class="basic-details">
	<div class="profile-div">
	        <span class="profile-heading">Basic Details</span>
	</div>
	<div class="profile-detail">
		<div class="row">
		<div class="col-md-3">
		<img src="img/profile.png" class="profile-pic">
	    </div>
	    	<div class="col-md-9">
	    		<div class="row">
	    			<div class="col-sm-3 title">User Id</div>
	    			<div class="col-sm-3 data"><?php echo $userid ?></div>
	    			<div class="col-sm-3 title">Name</div>
	    			<div class="col-sm-3 data"><?php echo $fname.' '.$lname ?></div>
	    		</div>
	    		<div class="row">
	    			<div class="col-md-3 title">Father's Name</div>
	    			<div class="col-md-3 data"><?php echo $father ?></div>
	    			<div class="col-md-3 title">Mother's Name</div>
	    			<div class="col-md-3 data"><?php echo $mother ?></div>
	    		</div>
	    		<div class="row">
	    			<div class="col-md-3 title">Course</div>
	    			<div class="col-md-3 data"><?php echo $course ?></div>

	    			<?php 

	    			if ($role == "student") {
	    			?>
	    				<div class="col-md-3 title">Session</div>
	    				<div class="col-md-3 data"><?php echo $sessionf.'-'.$sessiont?></div>
	    			<?php
	    			}
	    			 ?>
	    			
	    		</div>
	    		<div class="row">
	    			<div class="col-md-3 title">Date of Birth</div>
	    			<div class="col-md-3 data"><?php echo $dob ?></div>
	    
	    		</div>
	    	</div>
	    </div>
	</div>
	<div class="row" style="margin: auto">
		<div class="col-3">
		<button class="btn-profile btn-change" onclick="formactive();" id="cng-btn">Change Password</button>
		</div>
		<?php echo $err_message; ?>
		<div class="col-9 display" id="passwordChangeForm" >
		<form class="form-group row" method="post" >			
			<div class="col-4">
			<input type="password" name="oldPassword" class="form-control" placeholder="Enter Old Password ">
			</div>
			<div class="col-4">
			<input type="password" name="newPassword" class="form-control" placeholder="Enter New Password">
			</div>
			<div class="col-3">
			<button class="btn-profile" name="save">Save</button>
			</div>
		</form>
		</div>
	</div>

 </div>

 <div class="basic-details">
	<div class="profile-div">
        <span class="">Communication Details</span>
	</div>
    <div class="container-com">
    	<div class="row">
    		<div class="col-md-3 title">Contact Number </div>
    		<div class="col-md-3 data">+91 - <?php echo $mobile ?> </div>
    		<div class="col-md-3 title">Email</div>
    		<div class="col-md-3 data email"><?php echo $email ?></div>

    	</div>
    	<div class="row">
    		<div class="col-md-3 title">Address</div>
    		<div class="col-md-3 data"><?php echo $address1 ?> <br> <?php echo $address2 ?> </div>
    		<div class="col-md-3 title">Father's Contact</div>
    		<div class="col-md-3 data">+91 - <?php echo $mobile ?></div>
 
    	</div>
    </div>
 </div>

<div class="basic-details">
	<div class="profile-div">
        <span>Educational Details Details</span>
	</div>
	<div class="container-edu">
		<div class="row">
			<div class="col-md-3 title">Studies</div>
			<div class="col-md-3 title">Institute/School</div>	
			<div class="col-md-3 title">University/Board</div>			
			<div class="col-md-3 title">Percentage</div>		
		</div>
		<div class="row">
			<div class="col-md-3 data">High School</div>
			<div class="col-md-3 data"><?php echo $highschool_school ?></div>	
			<div class="col-md-3 data"><?php echo $highschool_board ?></div>			
			<div class="col-md-3 data"><?php echo $highschool_percent ?> %</div>	
		</div>
		<div class="row">
			<div class="col-md-3 data">Intermediate</div>
			<div class="col-md-3 data"><?php echo $inter_school ?></div>	
			<div class="col-md-3 data"><?php echo $inter_board ?></div>			
			<div class="col-md-3 data"><?php echo $inter_percent ?> %</div>		
		</div>
		<div class="row">
			<div class="col-md-3 data">Graduation</div>
			<div class="col-md-3 data"><?php echo $grad_school ?></div>	
			<div class="col-md-3 data"><?php echo $grad_board ?></div>			
			<div class="col-md-3 data"><?php echo $grad_percent ?> %</div>	
		</div>
	</div>
 </div>


<?php include 'includes/footer.php'; ?>
<script type="text/javascript">
	
	function formactive() {

		$('#cng-btn').addClass("display");
		$('#passwordChangeForm').removeClass("display");
	}
</script>