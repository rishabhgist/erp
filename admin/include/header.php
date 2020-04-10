<?php 
$_SESSION['message'] = '';
$admin = "admin";
session_start();
if ($_SESSION['role'] == $admin) {

}else{
	header('location:../user.php');
}
?>
<html>
<head>
	<link rel="icon" type="image/png" href="img/fav.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&family=Ubuntu:ital,wght@0,300;1,300;1,500&display=swap" rel="stylesheet">

    <title>Admin Panel</title>
</head>
