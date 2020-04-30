<?php 
include 'includes/db.php';
include 'includes/header.php';
include 'includes/nav.php';

$user = $_SESSION['username'];

if (isset($_POST['search'])) {

	$search_text = $_POST['search_text'];

	$query = "SELECT * FROM post WHERE post_title LIKE '%$search_text%'";
	$result = mysqli_query($con,$query);



}else{

	header('location:user.php');
}


?>
<div class="search-result">
	

 <div class="qna-details">
	<div class="profile-div">
			<div class="row" style="margin: auto;">
				<div class="col">
	        	<span class="profile-heading">Search Result</span>
				
			</div>
		</div>
		</div>
	        	<!-- -->	
				<?php if (mysqli_num_rows($result) == 0) {
							
						?>
			<div class="no-result">
				<center>
				<img src="img/robot.png" class="err-img" readonly>
				<p>
				<span class="qna-title">No result Found !!</span>
				</p>
				<p>
				<a href="post.php" class="modify-link"><button class="btn-ask-qna btn-profile">Ask This Question ?</button></a>
				</p>
				</center>
			</div>
			<?php 

				}else{

					while ($row =mysqli_fetch_assoc($result)) {
						$post_id = $row['id'];
						$post_title = $row['post_title'];
						$post_date = $row['post_date'];
						$posted_by = $row['posted_by'];
						$post_like = $row['likes'];

						$find_user = "SELECT fname,lname FROM userdata WHERE loginId = '$posted_by'";
						$res_user = mysqli_query($con,$find_user);
						$user_data = mysqli_fetch_assoc($res_user);

						$fname = $user_data['fname'];
						$lname = $user_data['lname'];

						$like_message = $post_like." People like this.";
 				

			 ?>
		
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
				<hr class="hr-post">

				<div class="row">
				<div class="col">
				<a href="includes/works/like.php?post_id=<?php echo $post_id ?>&user=<?php echo $user ?>"><button class="btn-react"><i class="fas fa-thumbs-up"></i> Like</button></a>
				<a href="qna.php?post_id=<?php echo $post_id;?>"><button class="btn-react"><i class="fas fa-reply"></i> Reply</button> </a>
				</div>
				<div class="col" style="text-align: right;">
				<button class="btn-react"><i class="fas fa-share-square"></i> Share</button> 
					
				</div>
				</div>
				</div>
			
			<?php 
					}//  While Loop End	
				}//else statement end
			?>

				
				</div>

</div>
<?php include 'includes/footer.php'; ?>