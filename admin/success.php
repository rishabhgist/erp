<?php include 'include/header.php'; ?>
<?php include 'include/navbar.php'; ?>

<?php 
$message ='';
$user_id = '';
$password = '';

if ($_SESSION['username']) {

	$message = $_SESSION['message'];
	$user_id = $_SESSION['user_id'];
	$password = $_SESSION['password'];

}



?>
<div class="con-success">

<p>
	
	<?php echo $message ?>
</p>
<p>
	

	Your User id is &nbsp; <?php echo $user_id ?>

</p>
<p> Your Password is &nbsp; <?php echo $password ?></p>
	


</div>




<?php include 'include/footer.php'; ?>