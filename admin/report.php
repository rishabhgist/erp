<?php 

include 'include/db.php';
include 'include/header.php'; 
 include 'include/navbar.php'; 
?>
<?php 
$message='';

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
	
}
else{

		header('location:../admin');
	}
if (isset($_GET['delete'])) {
	
	$user_id = $_GET['delete'];

	$user_delete_login = "DELETE FROM users WHERE loginId='$user_id'";
	$user_delete_basic = "DELETE FROM userdata WHERE loginId='$user_id'";
	$user_delete_edu = "DELETE FROM education WHERE loginId='$user_id'";
	$user_delete_post = "DELETE FROM post WHERE posted_by ='$user_id'";
	$user_delete_reply = "DELETE FROM reply WHERE reply_by ='$user_id'";
	$user_delete_like = "DELETE FROM likes WHERE user_id='$user_id'";

	$result_login = mysqli_query($con,$user_delete_login);
	$result_basic = mysqli_query($con,$user_delete_basic);
	$result_edu = mysqli_query($con,$user_delete_edu);
	$result_post = mysqli_query($con,$user_delete_post);
	$result_reply =mysqli_query($con,$user_delete_reply);
	$result_like = mysqli_query($con,$user_delete_like);


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
		      <th scope="col">Modify</th>
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
		      <td><a href="report.php?id=<?php echo $_GET['id']?>&delete=<?php echo $user_id ?>">Delete User</a></td>
		    </tr>

		<?php } ?>
		    
		  </tbody>
		</table>
		<?php echo $message ?>
</div>
















<?php include 'include/footer.php'; ?>




