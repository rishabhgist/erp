<?php include 'includes/function.php'; ?>
<?php 

	if(isset($_POST['login'])) {
	 	
	 	login();
	 }


?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/loginStyle.css">
	<title>Login Form</title>
</head>
<body>
<div class="conatiner">
	<h1>Login</h1>

	<h3><?php echo $_SESSION['message'] ?></h3>
	<form class="form" action="login.php" method="post" autocomplete="off">
		<input type="text" name="username" placeholder="Enter username">
		<input type="password" name="password" placeholder="Enter password">
		<button class="button" name="login" >Login</button>
	</form>
</div>
</body>
</html>