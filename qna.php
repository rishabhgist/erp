<?php 
include 'includes/db.php';
include 'includes/header.php';
include 'includes/nav.php';

$user = $_SESSION['username'];

if (isset($_GET['post_id'])) {
	
 	$post_id = $_GET['post_id'];
 	
	$post_query = "SELECT * FROM post WHERE id = '$post_id'";
	$result = mysqli_query($con,$post_query);
	$row = mysqli_fetch_assoc($result);

	$posted_by = $row['posted_by'];
	$post_title = $row['post_title'];
	$post_date = $row['post_date'];
	$post_likes = $row['likes'];

	$find_user = "SELECT * FROM userdata WHERE loginId = '$posted_by'";
	$result2 = mysqli_query($con,$find_user);
	$row2 = mysqli_fetch_assoc($result2);

	$fname = $row2['fname'];
	$lname = $row2['lname'];

	$like_query = "SELECT * FROM likes WHERE user_id ='$user' AND post_id='$post_id'";
	$like_result = mysqli_query($con,$like_query);
	$like_row = mysqli_num_rows($like_result);

	
	if ($like_row == 1 && $post_likes >1) {

		$like_message = "You and ".($post_likes-1)." other like this post.";

	}elseif ($like_row == 1 && $post_likes == 1) {

		$like_message = "You like this post.";
	
	}
	else{

		$like_message = $post_likes." people like this ";
	}

}else{

	header('location:user.php');
}

$post_id = $_GET['post_id'];
$date = date("d/m/Y");



if (isset($_POST['save'])) {

	$reply_text = $_POST['reply_text'];

	/*Checking for previous reply*/

	$q = "SELECT * FROM reply WHERE reply_by='$user'";
	$r = mysqli_query($con,$q);
	$rw = mysqli_num_rows($r);
	if ($rw == 1) {

		echo $message= 'Already Replied';

	}else{

		$query_reply = "INSERT INTO reply(post_id,reply_by,reply,reply_date) VALUES ('$post_id','$user','$reply_text','$date')";
		$result_reply = mysqli_query($con,$query_reply);

	}

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
				<span class="like"><?php echo $like_message ?></span>
				<div class="row">
				<div class="col">
				<a href="includes/works/like.php?post_id=<?php echo $_GET['post_id'] ?>&user=<?php echo $user ?>"><button class="btn-react"><i class="fas fa-thumbs-up"></i> Like</button></a>

				</div>
				<div class="col" style="text-align: right;">
				<button class="btn-react"><i class="fas fa-share-square"></i> Share</button> 
					
				</div>
				</div>
				</div>
			<form method="post" class="form-group">
				<div class="row" style="margin: auto;">
					<div class="col-10">
						<input type="text" name="reply_text" placeholder="Your Answer Here" class="form-control">
					</div>
					<div class="col-2">
						<button class="btn-profile" name="save">Reply</button>
					</div>
				</div>
				
			</form>
			<hr class="hr-post">

			<span class="text-reply">Replies</span>

			<!-- Replies Here -->
				<?php 

				$q2 = "SELECT * FROM reply WHERE post_id = '$post_id'";
				$r2 = mysqli_query($con,$q2);
				while ($res = mysqli_fetch_assoc($r2)) {
					$reply_id = $res['id'];
					$reply = $res['reply'];
					$post_id = $res['post_id'];
					$reply_by = $res['reply_by'];


				 ?>
				<div class="container">
				<div class="row">
				<div class="col-md-1">
				<a href="user.php"><img src="img/profile.png" class="profile-pic-ico"></a>
				</div>
				<div class="col-md-10">
				<p class="reply">
					<?php echo $reply ?> 

				</p>
				</div>


				<?php if ($reply_by == $user) {
					
				?>
				<div class="col-1 reply-delete" style="padding: 0;">
				
				<a href="includes/works/deleteComment.php?post_id=<?php echo $_GET['post_id'];?>&delete=<?php echo $reply_id ?>"><button class="btn-react delete"><i class="fas fa-trash-alt fa-2x" style="text-align: left;"></i></button></a>
								
				</div>

			<?php } ?>
				
				</div>
				</div>
				<?php 

				} 

				?>
				



				
					

				</div>
		</div>
</div>
<?php include 'includes/footer.php'; ?>