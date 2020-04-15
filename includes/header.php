<?php include 'function.php'; 
	
  	session_start();
    $con = mysqli_connect("localhost","root","","erp");
    if ($_SESSION['username']) {
       $user = $_SESSION['username']; 
        $role = $_SESSION['role'];
        $student = "student";
        $teacher = "teacher";

        if ($role == $student || $role == $teacher ) {

                $query = "SELECT * FROM userdata WHERE loginId='$user'";
                $result = mysqli_query($con,$query);
                $user_detail = mysqli_fetch_assoc($result);
                $fname = $user_detail['fname'];
                $lname = $user_detail['lname'];

        }elseif ($role == 'admin') {
        $fname = "Jhon";
        $lname = "Doe";
            }
        }else{
                header('location:index.php');
            }
    
?>

<html>
<head>
	<link rel="icon" type="image/png" href="img/fav.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&family=Ubuntu:ital,wght@0,300;1,300;1,500&display=swap" rel="stylesheet">

    <title><?php echo $fname.' '.$lname ?></title>
</head>

