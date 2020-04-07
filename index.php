<?php include 'includes/function.php'; ?>
<?php 

	if(isset($_POST['login'])) {
	 	
	 	login();
	 }


?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&family=Ubuntu:ital,wght@0,300;1,300;1,500&display=swap" rel="stylesheet">

    <title>Login ERP</title>
</head>
<body class="bg">
	<div class="page">
	<div class="brand">
		<img src="img/login.png" class="login-img">
	</div>
	<div class="login-form">
		<div class="container-login">
				<center><h3 class="login-h3">Login to ERP </h3></center>

					<form id="role" class="form">
						<div class="form-group">
							<form>
									<label class="placeholder">Username</label>
									<input type="text" name="username" class="input form-control" autofocus>
									<label class="placeholder">Password </label>
									<input type="password" name="password"  class="input form-control" autofocus>
									<center><button class="btn-profile" id="login">Login</button></center>
							</form>
						</div>
						<div class="forget-div">
								<a href="" class="profile-link">Forget Passowrd?</a>
							</div>
					</form>
		</div>
	</div>
		
<!-- footer -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

<?php include 'includes/footer.php'; ?>