<?php 
include 'includes/db.php';
include 'includes/header.php';
include 'includes/nav.php';


if (isset($_GET['post_id'])) {
	
 	$post_id = $_GET['post_id'];
 	
	$post_query = "SELECT * FROM post WHERE id = '$post_id'";
	$result = mysqli_query($con,$post_query);
	$row = mysqli_fetch_assoc($result);

	$posted_by = $row['posted_by'];
	$post_title = $row['post_title'];
	$post_date = $row['post_date'];

	$find_user = "SELECT * FROM userdata WHERE loginId = '$posted_by'";
	$result2 = mysqli_query($con,$find_user);
	$row2 = mysqli_fetch_assoc($result2);

	$fname = $row2['fname'];
	$lname = $row2['lname'];

}else{

	header('location:user');
}


?>		
	<div>
	<div class="qna-details">
	<div class="profile-div">
			<div class="row" style="margin: auto;">
				<div class="col-md-9">
	        	<span class="profile-heading">Question & Answer</span>
				</div>
				<div class="col-md-3">
	        	<a href="post.php" class="modify-link"><button class="btn-ask-qna btn-profile">Ask Question</button></a>
					
				</div>
			</div>
		</div>
			<div class="row" style="margin: auto;">
			<img src="img/profile.png" class="profile-pic-ico">
			<div class="col-text">

			<a href="user.php" class="posted-name"><?php echo $fname.' '.$lname?></a><br>
			<span class="post-time"><?php echo $post_date ?></span>
			</div>
			</div>
			<p class="qna-title">
				<?php echo $post_title ?>
			</p>
				<div class="container container-react">
				<div class="row">
				<div class="col">
				<button class="btn-react"><i class="fas fa-thumbs-up"></i> Like</button>
				<button class="btn-react"><i class="fas fa-reply"></i> Reply</button> 
				</div>
				<div class="col" style="text-align: right;">
				<button class="btn-react"><i class="fas fa-share-square"></i> Share</button> 
					
				</div>
				</div>
				</div>
			<hr class="hr-post">

			<span class="text-reply">Replies</span>

			<!-- Replies Here -->

				<div class="container">
				<div class="row">
					<div class="col-md-1">
				<a href="user.php"><img src="img/profile.png" class="profile-pic-ico"></a>
				</div>
				<div class="col-md-11">
				<p class="reply">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
				</p>
				</div>
				</div>
				</div>
				<div class="container">
				<div class="row">
					<div class="col-md-1">
				<a href="user.php"><img src="img/profile.png" class="profile-pic-ico"></a>
				</div>
				<div class="col-md-11">
				<p class="reply">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
				</p>
				</div>
				</div>
				</div>

				<div class="container">
				<div class="row">
					<div class="col-md-1">
				<a href="user.php"><img src="img/profile.png" class="profile-pic-ico"></a>
				</div>
				<div class="col-md-11">
				<p class="reply">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
				</p>
				</div>
				</div>
				</div>
				<div class="container">
				<div class="row">
					<div class="col-md-1">
				<a href="user.php"><img src="img/profile.png" class="profile-pic-ico"></a>
				</div>
				<div class="col-md-11">
				<p class="reply">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
				</p>
				</div>
				</div>
				</div>

				<div class="container">
				<div class="row">
					<div class="col-md-1">
				<a href="user.php"><img src="img/profile.png" class="profile-pic-ico"></a>
				</div>
				<div class="col-md-11">
				<p class="reply">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
				</p>
				</div>
				</div>
				</div>



				
					

				</div>
		</div>
</div>
<?php include 'includes/footer.php'; ?>