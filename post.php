

<?php 
include 'includes/db.php';
include 'includes/header.php';
include 'includes/nav.php';

$user = $_SESSION['username'];
$message = '';


/*Saving Questions*/

if (isset($_POST['save'])) {

	$question = $_POST['question'];
	if ($question == '') {
		$message = '<div class="alert alert-danger btn-ask" role="alert"> Question is Empty!</div>';
	}else{

		$query = "INSERT INTO post (posted_by, post_title) VALUES ('$user','$question')";
		$result = mysqli_query($con,$query);

		if (!$result) {

		$message = '<div class="alert alert-danger btn-ask" role="alert">Cannot add your Question!</div>';
			
		}else{
		header('location:post');
		$message = '<div class="alert alert-success btn-ask" role="alert"> Question added Succesfully!</div>';
		}

	}	
}

/*Deleting Questions*/

	if (isset($_GET['delete'])) {

		$post_id = $_GET['delete'];
		$delete_query = "DELETE FROM post WHERE id = '$post_id'";
		$result_delete = mysqli_query($con,$delete_query);

		if (!$result_delete) {
		$message = '<div class="alert alert-danger btn-ask" role="alert"> Cannot Delete !</div>';
		}else{
		header('location:post.php');
		$message = '<div class="alert alert-success btn-ask" role="alert"> DeletedSuccesfully!</div>';
		}


	}

/*Update Question*/

	if (isset($_GET['edit'])) {

		$post_id = $_GET['edit'];
		$update_query = "UPDATE post SET post_title='$question' WHERE id = '$post_id'";
		$result_update = mysqli_query($con,$update_query);
		if (!$result_update) {
		$message = '<div class="alert alert-danger btn-ask" role="alert"> Cannot Update !</div>';
		}else{
		header('location:post.php');
		}
	}
?>		

<div>
	<div class="post-details">
	<div class="profile-div">
		
	        <span class="profile-heading">Post Your Question</span>
	</div>
	<form class="form-group" method="post">
		<input type="text" name="question" class="form-control" placeholder="Enter your question here !" value="">
		<div class="row" style="margin: auto;">
			<div class="col-md-2">
				<button class="btn-ask btn-profile" name="save">Post Question</button>
			</div>
			<div class="col-md-4">
				<?php echo $message ?>
			</div>
		</div>
	</form>
	
	<div class="container">
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th colspan="3">Your Questions</th>
		      <th scope="col">Modify</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php 

			/*all the question fetch*/

			$all_question = "SELECT *  FROM post WHERE posted_by ='$user'";
			$result2 = mysqli_query($con,$all_question);

			while ($row = mysqli_fetch_assoc($result2)) {

				$id = $row['id'];
				$question = $row['post_title'];
			
			?>
		    <tr>
		      <td colspan="3"><?php echo $question ?></td>
		      <td><a href="post.php?edit=<?php echo $id?>" class="modify-link" >Edit</a>&nbsp;<a href="post.php?delete=<?php echo $id?>" class="modify-link">Delete</a></td>
		    </tr>

		<?php } ?>
		    
		  </tbody>
		</table>
	</div>
<span class="text-muted"> * Once your question is verfied after the submission. Please do no post an incorrect question </span><br>
<span class="text-muted">or it will be rejected by the teacher.</span>
</div>

<?php include 'includes/footer.php'; ?>