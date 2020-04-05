<?php include 'includes/function.php'; ?>


<?php 

include 'includes/header.php';
include 'includes/nav.php';

 ?>
	<div class="coverContainer">
		<img src="img/cover.jpg" class="coverImage center-fit">
		<h3 class="head">Hello, <?php echo $fname; ?></h3>
		<h3 class="headDate">23 July, 2020 </h3>
		<img src="img/profile.png" class="profilePic">

	</div>	
	<br>
	<div class="row" style="margin: auto;">
		<div class="col-md-4">
			<div class="container-profile">
				<a href="profile.php" class="profile-link"><h3><?php echo $fname.' '.$lname; ?></h3></a>
				<p><i class="fas fa-birthday-cake ico"></i> 7 Jan, 1999</p>
				<p><i class="fas fa-envelope ico"></i> email@erp.com</p>
				<p><i class="fas fa-mobile ico"></i> +91 - <span> 7988223352</span></p>

				<button class="btn-profile">Edit Profile</button>
			</div>
		</div>
		<div class="qa-post col-md-5">
			<div class="post">
			<h3>What is C Language ?</h3>
			<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 

			</p>
				
				<span>42</span>
				<button class="btn-react"><i class="fas fa-thumbs-up"></i></button>
				<button class="btn-react"><i class="fas fa-reply"></i></button> 


			</div>	
			<div class="post">
			<h3>What is Java?</h3>
			<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 

			</p>
				
				<span>42</span>
				<button class="btn-react"><i class="fas fa-thumbs-up"></i></button>
				<button class="btn-react"><i class="fas fa-reply"></i></button>

			</div>
			<div class="post">
			<h3>What is Python?</h3>
			<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 

			</p>
				
				<span>42</span>
				<button class="btn-react"><i class="fas fa-thumbs-up"></i></button>
				<button class="btn-react"><i class="fas fa-reply"></i></button>

			</div>

		</div>
		<div class="col-md-2">
		<h5>Trending Post</h5>
		<ul>
			<li>What is C ?</li>
			<li>Whats is Java?</li>
			<li>What is Python</li>
		</ul>
		</div>
	</div>

<?php include 'includes/footer.php'; ?>