<?php 
include '../db.php';

if (isset($_GET['post_id']) && isset($_GET['delete'])) {
	
	echo $post_id = $_GET['post_id'];
	echo $reply_id = $_GET['delete'];



	$query = "DELETE FROM reply WHERE id = '$reply_id'";
	$result = mysqli_query($con,$query);
	if ($result) {

		header("Location:../../qna.php?post_id=$post_id");
		
	}

}


 ?>