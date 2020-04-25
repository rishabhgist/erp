

<?php 
include 'includes/db.php';
include 'includes/header.php';
include 'includes/nav.php';

$user = $_SESSION['username'];
$message = '';


/*Updating Questions*/

if ($_GET['edit']) {
	
	$post_id = $_GET['edit'];

	$query = "SELECT * FROM post WHERE id = '$post_id'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($result);

	$post_title = $row['post_title'];

}else{

	header('location:post.php');
}

if (isset($_POST['save'])) {

	$post_title = $_POST['question'];
	$date = date("d/m/Y");
	$query = "UPDATE post SET post_title = '$post_title',post_date = '$date' WHERE id = '$post_id'";
	$result = mysqli_query($con,$query);
	if ($result) {

		header('location:post.php');
	}else{
		
		$message = '<div class="alert alert-danger btn-ask" role="alert"> Question not Saved !</div>';

	}
}




?>		

<div>
	<div class="post-details">
	<div class="profile-div">
		
	        <span class="profile-heading">Update Your Question</span>
	</div>
	<form class="form-group" method="post">
		<input type="text" name="question" class="form-control" value="<?php echo $post_title ?>">
		<div class="row" style="margin: auto;">
			<div class="col-md-2">
				<button class="btn-ask btn-ask-update btn-profile" name="save">Update Question</button>
			</div>
			<div class="col-md-4">
				<?php echo $message ?>
			</div>
		</div>
	</form>
	
</div>

<?php include 'includes/footer.php'; ?>