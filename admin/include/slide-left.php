<?php 
include 'db.php';

$user_count ='0';
$post_count = '0';
$reply_count='0';
$notice_count ='0';
	
	/*User Count*/
	$user = "SELECT * FROM users";
	$user_res = mysqli_query($con,$user);
	$user_count = mysqli_num_rows($user_res);

	/*Post Count*/
	$post = "SELECT * FROM post";
	$post_res = mysqli_query($con,$post);
	$post_count = mysqli_num_rows($post_res);

	/*Replies Count*/
	$reply = "SELECT * FROM reply";
	$reply_res = mysqli_query($con,$reply);
	$reply_count = mysqli_num_rows($reply_res);


 ?>
  	<div class="container-pane">
  	<div class="row" style="margin: auto">
  	<div class="col-md-3">
	<div class="left-slide">
		<div class="profile-div">
		<span >Admin Panel</span>
		</div>
		<div class="admin-links">
		<li class="admin-item"><a href="index.php" class="profile-link"><i class="fas fa-home ico"></i>Home</a></li>
		
		<li class="admin-item"><a href="report.php?id=1" class="profile-link"><i class="fas fa-user-graduate ico"></i>Student Report</a></li>
		<li class="admin-item"><a href="report.php?id=2" class="profile-link"><i class="fas fa-chalkboard-teacher ico"></i>Teacher Report</a></li>
		<li class="admin-item"><a href="qnarepo.php" class="profile-link"><i class="fas fa-retweet ico"></i>QnA Report</a></li>
		</div>
	</div>
	</div>
	<div class="col-md-9">
	<div class="right-slide">
		<div class="row justify-content-md-center">
			<div class="col align-self-center">
			<div class="con">
				<label class="box-lable">Total Users</label><br>
				<label class="box-count"><?php echo $user_count ?></label><i class="fas fa-arrow-up ico"></i>
				<br><br><br>
				<button class="btn-profile"> View Details</button>
			</div>
			</div>
			<div class="col">
				<div class="con">
				<label class="box-lable">Total Notice</label>
				<br>
				<label class="box-count"><?php echo $notice_count ?></label><i class="fas fa-arrow-up ico"></i>
				<br><br><br>
				<button class="btn-profile"> View Details</button>
			</div>
			</div>
		</div>
		<div class="row align-center">
			<div class="col">
			<div class="con">
				<label class="box-lable">Total QnA</label>
				<br>
				<label class="box-count"><?php echo $post_count ?></label><i class="fas fa-arrow-up ico"></i>
				<br><br><br>
				<button class="btn-profile"> View Details</button>
			</div>
			
			</div>
			<div class="col">
				<div class="con">
				<label class="box-lable">Total Replies</label>
				<br>
				<label class="box-count"><?php echo $reply_count ?></label><i class="fas fa-arrow-up ico"></i>
				<br><br><br>
				<button class="btn-profile"> View Details</button>
			</div>
			
			</div>
		</div>

	</div>
	</div>
	</div>
</div>