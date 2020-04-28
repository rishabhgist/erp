<?php 
include 'db.php';

$_SESSION['username'];

	$post_query = "SELECT * FROM post ORDER BY id DESC";
	$result = mysqli_query($con,$post_query);
 

/*Like button Functionality*/

if (isset($_GET['like'])) {

	$id = $_GET['like'];
	$user = $_SESSION['username'];
	$query = "SELECT * FROM likes WHERE user_id = '$user' AND post_id = '$id'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($result);
	$val = mysqli_num_rows($result);


	$curr_like = $row['likes'];	

	if ($val == 0) {

		$curr_like = $curr_like + 1;
		$like = "INSERT INTO likes (likes,post_id,user_id) VALUES ('$curr_like','$id','$user')";
		$res_like = mysqli_query($con,$like);

		/*	Check Likes*/

		$check_like = "SELECT likes FROM post WHERE id = '$id'";
		$res_like = mysqli_query($con,$check_like);
		$rw = mysqli_fetch_assoc($res_like);

			$curr = $rw['likes'];

		/*inserting like*/

		$save_like = "INSERT INTO post(likes) VALUES('$curr+1')";
		$rsave_like = mysqli_query($con,$save_like);
		
		header('location:user');
	}
}





?>

<div class="qa-post col-md-5">

		<?php 
				$i = 0 ;
				$i_max = 4;
				while (($row = mysqli_fetch_assoc($result)) and ($i < $i_max)) {
						
						$id = $row['id'];
						$posted_by = $row['posted_by'];
						$post_title = $row['post_title'];
						$post_date = $row['post_date'];
						$post_like = $row['likes'];


						$find_user = "SELECT * FROM userdata WHERE loginId = '$posted_by'";
						$result2 = mysqli_query($con,$find_user);
						$row2 = mysqli_fetch_assoc($result2);

						$fname = $row2['fname'];
						$lname = $row2['lname'];

						$like = "SELECT * FROM likes WHERE post_id = '$id'";
						$res = mysqli_query($con,$like);

						$i++;


			?>

			<div class="post">
			<div class="row">
			<div class="col-md-1">
			<img src="img/profile.png" class="post-profile">
			</div>
			<div class="col-md-11">	

						<a href="user.php" class="posted-name"><?php echo $fname.' '.$lname;?></a><br>
			<span class="post-time"><?php echo $post_date ?></span>
			</div>
			</div>
			<hr class="post-hr">
			<a href="qna.php?post_id=<?php echo $id;?>" class="profile-link"><h3 class="post-title"><?php echo $post_title ?></h3></a>
			<span><?php echo $post_like?></span>
			
			<hr class="hr-post">
				<div class="row">
					<div class="col">
				<a href="user.php?like=<?php echo $id ?>"><button class="btn-react"><i class="fas fa-thumbs-up"></i> Like</button></a>
				<a href="qna.php?post_id=<?php echo $id;?>"><button class="btn-react"><i class="fas fa-reply"></i> Reply</button> </a>
				</div>
				<div class="col" style="text-align: right;">
				<button class="btn-react"><i class="fas fa-share-square"></i> Share</button> 
					
				</div>
				</div>


			</div>	
		
			<?php
			}
				

			?>
		
</div>
