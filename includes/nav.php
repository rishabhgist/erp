<?php 

if ($_SESSION['role'] == 'student' || $_SESSION['role'] == 'teacher') {
 $user = 'user';
}else{

  $user = 'admin';
}

 ?>

<?php 

if ($_SESSION['role'] == 'student' || $_SESSION['role'] == 'admin' ) {
  
  if ($_SESSION['role'] == 'student') {
    $user = "user.php";
  }elseif ($_SESSION['role'] == 'admin') {
    $user="admin";
  }

?>

<nav class="navbar fixed-top navbar-expand row">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="<?php echo $user ?>" class="nav-link">HOME</a>
            </li>
            <li class="nav-item">
                <a href="notice.php" class="nav-link">NOTICE</a>
            </li>
            <li class="nav-item">
                <a href="library.php" class="nav-link">LIBRARY</a>
            </li>
            <li class="nav-item">
                <a href="post.php" class="nav-link">Ask Question</a>
            </li>
          </ul>
<?php 
}elseif ($_SESSION['role'] == 'teacher' || $_SESSION['role'] == 'admin') {

   if ($_SESSION['role'] == 'teacher') {
      $user = "user.php";
    }elseif ($_SESSION['role'] == 'admin') {
      $user="admin";
    }
  
 ?>         <nav class="navbar fixed-top navbar-expand row">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="<?php echo $user ?>" class="nav-link">HOME</a>
            </li>
            <li class="nav-item">
                <a href="notice.php" class="nav-link">NOTICE</a>
            </li>
            <li class="nav-item">
                <a href="library.php" class="nav-link">LIBRARY</a>
            </li>
            <li class="nav-item">
                <a href="post.php" class="nav-link">Ask Question</a>
            </li>
            <li class="nav-item">
                <a href="timetable.php" class="nav-link">Timetable</a>
            </li>

            
        </ul>
<?php } ?>
        <ul class="col-md-2 nav-profile">
           <li class="nav-item nav-profile">
            <div class="dropdown-container">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                    <img src="img/profile.png" class="profilePicNav">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="profile.php">Profile</a>
                  <a class="dropdown-item" href="#">Helpdesk</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php">LogOut</a>
                </div>
              </div>
             </li>
          </ul>
    </nav>
  <body class="bg">
<div class="page">