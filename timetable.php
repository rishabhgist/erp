<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<!-- php for extract timetable -->
<?php 

  $query = "SELECT * FROM timetable WHERE id = '1'";
  $result = mysqli_query($con,$query);
  $subject_data = mysqli_fetch_assoc($result);

   $subject1 =  $subject_data['subject_one'];
   $subject2 =  $subject_data['subject_two'];
   $subject3 =  $subject_data['subject_three'];
   $subject4 =  $subject_data['subject_four'];
   $subject5 =  $subject_data['subject_five'];

   $one = $subject1;
   $two = $subject2;
   $three = $subject3;
   $four = $subject4;
   $five = $subject5;
   $save_button = '';
   $update_message = '';

if (isset($_POST['generate'])) {
    
      
   $two = ${"subject".rand(1,5)};
   $three = ${"subject".rand(1,5)};
   $four = ${"subject".rand(1,5)};
   $five = ${"subject".rand(1,5)};

   $query2 = "UPDATE timetable SET subject_two ='$two', subject_three = '$three', subject_four = '$four',subject_five = '$five' WHERE id = '2'";

    $update = mysqli_query($con,$query2);


   $save_button = '<button class="btn-profile" name="save">Save</button>';
  /*if (isset($_POST['save'])) {  
  

  if (!$update) {
      $update_message = '<div class="alert alert-danger" role="alert"> Can not updata Data </div>';
      
   } else{
      $update_message = '<div class="alert alert-danger" role="alert"> Update Succesfull </div>';


   }

}*/

}

 ?>
<!-- php end -->
<div class="tt-container">
<div class="profile-div">
  <center><span class="box-lable">Time Table</span></center>
</div>
<div class="row">
  <div class="col-md-4">
    <?php echo $update_message; ?>
  </div>
  
</div>
<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">I</th>
      <th scope="col">II</th>
      <th scope="col">III</th>
      <th scope="col">IV</th>
      <th scope="col">#</th>
      <th scope="col">V</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Monday</th>
        <td><?php echo $one ?></td>
        <td><?php echo $two?></td>
        <td><?php echo $three?></td>
        <td><?php echo $four?></td>
        <td>B</td>
        <td><?php echo $five?></td>
    </tr>
    <tr>
      <th scope="row">Tuesday</th>
      <td><?php echo $one ?></td>
      <td><?php echo $three?></td>
      <td><?php echo $five?></td>
      <td><?php echo $two?></td>
      <td>R</td>
      <td><?php echo $four?></td>
    </tr>
    <tr>
      <th scope="row">Wednesday</th>
      <td><?php echo $one ?></td>
      <td><?php echo $five?></td>
      <td><?php echo $two?></td>
      <td><?php echo $four?></td>
      <td>E</td>
      <td><?php echo $three?></td>
    </tr>
     <tr>
      <th scope="row">Thrusday</th>
      <td><?php echo $one ?></td>
      <td><?php echo $two?></td>
      <td><?php echo $four?></td>
      <td><?php echo $three?></td>
      <td>A</td>
      <td><?php echo $five?></td>
    </tr>
     <tr>
      <th scope="row">Friday</th>
      <td><?php echo $one ?></td>
      <td><?php echo $three?></td>
      <td><?php echo $five?></td>
      <td><?php echo $two?></td>
      <td>A</td>
      <td><?php echo $four?></td>
    </tr>
  </tbody>
</table>

<?php 

if ($_SESSION['role'] == 'admin') {

?>

<form action="post" action="timetable.php" class="generate-form">
  <button class="btn-profile" name="generate">Generate</button>
</form>
<?php  
}
?>
</div>
<?php include 'includes/footer.php'; ?>
