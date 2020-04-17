<?php include 'include/header.php'; ?>
<?php include 'include/navbar.php'; ?>

<?php 
$_SESSION['message'] ='';
$message ='';
$user_id = '';

if ($_SESSION['message']) {

	$message = $_SESSION['message'];
	$user_id = $_SESSION['user_id'];

}



?>
<div class="con-success">

<p>
	
	<?php echo $message ?>
</p>
<p>
	

	Your User id is <?php echo $user_id ?>

</p>
	


</div>




<?php include 'include/footer.php'; ?>