<?php include 'include/db.php'; ?>
<?php 


$year = '2017';
$course = 'BCA';
$user = 29;


if (isset($_POST['save'])) {


	$user_check = "SELECT * FROM users";
	$result_user = mysqli_query($con,$user_check);

	$value = $year.$course.'0'.$user;

			while ($row = mysqli_fetch_assoc($result_user)) {
				$login = $row['loginId'];

				if ($value == $login) {

					$user = $user + 1;
					if ($user >= 30) {

						echo $value = $year.$course.$user;
						
					}else{

						echo $value = $year.$course.'0'.$user;
					}

			}
			
			}

}

		


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Test</title>
 </head>
 <body>

 	<form method="post">
 		<input type="text" name="username">

 		<button name="save">Generate</button>

 		<p><?php  ?></p>
 	
 	</form>
 
 </body>
 </html>