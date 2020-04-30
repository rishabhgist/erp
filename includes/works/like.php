<?php 
include '../db.php';


	if (isset($_GET['post_id']) && isset($_GET['user'])) {
				
			$post_id = $_GET['post_id'];
			$user = $_GET['user'];

			/*Checking for user likes*/


			$check_like = "SELECT * FROM likes WHERE user_id='$user' AND post_id='$post_id'";
			$res = mysqli_query($con,$check_like);
			$row = mysqli_num_rows($res);

			if ($row == 1) {
				
				header("Location:../../qna.php?post_id=$post_id");

			}else{

				/*Insert Like*/
				
				$like = 1;

				$like_insert = "INSERT INTO likes(post_id,user_id,likes) VALUES ('$post_id','$user','$like')";
				$result_insert = mysqli_query($con,$like_insert);

				// Checking for present likes 

				$post_like = "SELECT likes FROM post WHERE id = '$post_id'";
				$post_like_result = mysqli_query($con,$post_like);

				$post = mysqli_fetch_assoc($post_like_result);


				$post_like = $post['likes'];

				/*Incrementing like*/

				$post_like = $post_like + 1;

				/*Inserting new like*/

				$post_insert = "UPDATE post SET likes ='$post_like' WHERE id='$post_id'";
				$post_insert_result  = mysqli_query($con,$post_insert);

				if ($post_insert_result) {
					header("Location:../../qna.php?post_id=$post_id");
				}




			}



	}




 ?>