<?php 

include 'include/db.php';
include 'include/header.php'; 

?>
<?php include 'include/navbar.php'; ?>
<?php 


if (isset($_GET['id'])) {
	
	if ($_GET['id'] == '1') {
		
		$role ="Student Report";
		$all_students = "SELECT * FROM users WHERE role ='student'";
		$result = mysqli_query($con,$all_students);

	}elseif ($_GET['id'] == '2') {
		
		$role ="Teacher Report";
		$all_teacher = "SELECT * FROM users WHERE role ='teacher'";
		$result = mysqli_query($con,$all_teacher);

	}
else{

	header('location:../admin');
}
}



 ?>
<div class="container-report">
	<div class="profile-div">
		<span ><?php echo $role ?></span>
		</div>
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th colspan="3">User Id</th>
		      <th scope="col">Name Of User</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php 

			/*all the question fetch*/

			while ($row = mysqli_fetch_assoc($result)) {

				$id = $row['id'];
				$user_id = $row['loginId'];
				$name = "SELECT * FROM userdata WHERE loginId = '$user_id'";
				$res = mysqli_query($con,$name);
				$ress = mysqli_fetch_assoc($res);

				$fname = $ress['fname'];
				$lname = $ress['lname'];
			
			?>
		    <tr>
		      <td colspan="3"><?php echo $user_id ?></td>
		      <td><?php echo $fname.' '.$lname;?></td>
		    </tr>

		<?php } ?>
		    
		  </tbody>
		</table>
</div>
















<?php include 'include/footer.php'; ?>




