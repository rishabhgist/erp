<?php include 'include/db.php'; ?>
<?php 

if (isset($_POST['save'])) {

	$new= $_POST['username'];

	$row = '0';
	$q = "SELECT * FROM users";
	$r = mysqli_query($con,$q);
	$row = mysqli_fetch_assoc($r);
		 $id = $row['id'];
		 $max_id = 0;

		while (($row = mysqli_fetch_assoc($r)) AND ($new != $id) AND ($max_id <= 1))  {
			

			$new++;
			echo $new;
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

 	
 	</form>
 
 </body>
 </html>