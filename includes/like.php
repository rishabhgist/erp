<?php include 'db.php';
include 'header.php'; ?>

<?php 

$user = $_SESSION['username'];

if (isset($_GET['id'])) {

	$id = $_GET['id'];
	
	$query = "SELECT * FROM likes WHERE user_id = '$user' AND post_id = '$id'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($result);
	$val = mysqli_num_rows($result);


	$curr_like = $row['likes'];	


	if ($val == 0) {

		$curr_like = $curr_like + 1;
		$like = "INSERT INTO likes (likes,post_id,user_id) VALUES ('$curr_like','$id','$user')";
		$res_like = mysqli_query($con,$like);

		$l = "SELECT likes FROM post WHERE id = '$id'";
		



	}else{

	}

}




 ?>