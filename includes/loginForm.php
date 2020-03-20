<?php 

$_SESSION['message'] ='';

$db = mysqli_connect("localhost","root","","erp");


if(isset($_POST['login'])) {
    $user = ($_POST['username']);
    $pass = ($_POST['password']);

    $query = "SELECT * FROM login WHERE username = '$user' && password = '$pass'";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) == 1) {
        
        header("location:admin/index.php");    
    }else{
        $_SESSION['message'] ='user not found';


    }

}
?>
    <div class="col">
		<div class="container login-form bg-light">
	    	<img src="img/login.png" class="login-img">
            
		<form class="login" action="index.php" method="post">
    		<div class="form-group">
    		<input class="form-control" type="text" id="username" name="username" placeholder="Enter Your Username" required autofocus>
    		</div>
    		<div class="form-group">
    		<input class="form-control" type="password" id="password" name="passowrd" placeholder="Enter Your Password" required autofocus>
    		</div>
    		<button class="btn btn-lg btn-block btn-login btn-light" name="login">Login</button>
    		<button type="button" class="btn btn-link" >Forgotten your passowrd ?</button>
    	</form>

	    </div>
	</div>