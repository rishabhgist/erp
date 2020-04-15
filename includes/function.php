<?php 

$_SESSION['message'] = '';
$_SESSION['username'] = '';
$_SESSION['role'] = '';




if(isset($_POST['login'])) {
        
        login();
}

function login(){
        
        $con = mysqli_connect("localhost","root","","erp");

        $user = ($_POST['username']);
        $pass = ($_POST['password']);

        // Verify Userame and password

        $user = mysqli_real_escape_string($con,$user);
        $pass = mysqli_real_escape_string($con,$pass);


        // users role 

        $admin = "admin";
        $student = "student";
        $teacher = "teacher";

    $query = "SELECT * FROM users WHERE loginId = '$user' AND password = '$pass'";
    $result = mysqli_query($con, $query);
    $val = mysqli_num_rows($result);
    $role = mysqli_fetch_assoc($result);
    // redirect roles 

    if($val == 1) {

        if( $role['role'] == $admin ) {
            // admin role
            session_start();
            header('location:admin');
            $_SESSION['role'] = $admin;
            $_SESSION['username'] = $user;

        }elseif ($role['role'] == $student) {
            // student role 
            session_start();
            $_SESSION['username'] = $user;
            $_SESSION['role'] = $student;
            header('location:user');
            
        }elseif ($role['role'] == $teacher) {
            // teacher role
            session_start();
            $_SESSION['username'] = $user;
            $_SESSION['role'] = $teacher;
            header('location:user');
            
        }
    
    }else{

    
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">
  User not found!
</div>';
    }
}


?>