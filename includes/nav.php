<?php 

if ($_SESSION['role'] == 'student' || $_SESSION['role'] == 'admin' ) {
  

?>


<nav class="navbar fixed-top navbar-expand row">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="#home" class="nav-link">HOME</a>
            </li>
            <li class="nav-item">
                <a href="notice.php" class="nav-link">NOTICE</a>
            </li>
            <li class="nav-item">
                <a href="library.php" class="nav-link">LIBRARY</a>
            </li>
            <li class="nav-item">
                <a href="qna.php" class="nav-link">Q/A</a>
            </li>
          </ul>
<?php 
}elseif ($_SESSION['role'] == 'teacher' || $_SESSION['role'] == 'admin') {
  
 ?>         <nav class="navbar fixed-top navbar-expand row">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="#home" class="nav-link">HOME</a>
            </li>
            <li class="nav-item">
                <a href="notice.php" class="nav-link">NOTICE</a>
            </li>
            <li class="nav-item">
                <a href="library.php" class="nav-link">LIBRARY</a>
            </li>
            <li class="nav-item">
                <a href="qna.php" class="nav-link">Q/A</a>
            </li>
            <li class="nav-item">
                <a href="timetable.php" class="nav-link">Timetable</a>
            </li><li class="nav-item">
                <a href="#" class="nav-link">teacher</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">student</a>
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