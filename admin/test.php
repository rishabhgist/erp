<?php include 'include/db.php'; ?>
<?php 

if (isset($_POST['save'])) {

	$new= $_POST['username'];

	$row = '0';
	$q = "SELECT id FROM users";
	$r = mysqli_query($con,$q);
	$row = mysqli_fetch_assoc($r);


	if ($new = $row['id']) {
				

				
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