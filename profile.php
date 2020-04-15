<?php 
include 'includes/db.php';
include 'includes/header.php'; 
include 'includes/nav.php';

$user = $_SESSION['username'];
$role = $_SESSION['role'];

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
                $course = $user_detail['courseId'];
                $dob = $user_detail['dob'];
                $email = $user_detail['emailID'];
                $mobile = $user_detail['mobile'];

                if ($role == "student") {
                	$sessionf= $user_detail['session_from'];
                	$sessiont= $user_detail['session_to'];
                }


        }else{

            header('Location:error');
            $_SESSION['profile_error'] = "Profile not found";
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
	<div>
		<button class="btn-profile btn-change">Change Password</button>
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
    		<div class="col-md-3 data">B 61, Gokul Vihar <br> Rohta Road, Meerut </div>
    		<div class="col-md-3 title">Father's Contact</div>
    		<div class="col-md-3 data">+91 - 7983294650</div>
 
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
			<div class="col-md-3 data">Meerut Public School</div>	
			<div class="col-md-3 data">CBSE</div>			
			<div class="col-md-3 data">82 %</div>		
		</div>
		<div class="row">
			<div class="col-md-3 data">Intermediate</div>
			<div class="col-md-3 data">Meerut Public School</div>	
			<div class="col-md-3 data">Cbse</div>			
			<div class="col-md-3 data">80 %</div>		
		</div>
		<div class="row">
			<div class="col-md-3 data">BCA</div>
			<div class="col-md-3 data">Dewan Institute of Managment Studies</div>	
			<div class="col-md-3 data">Chaudhary Charan Singh</div>			
			<div class="col-md-3 data">70 %</div>		
		</div>
	</div>
 </div>


<?php include 'includes/footer.php'; ?>