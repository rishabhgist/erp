<?php 


$_SESSION['message'] ='';

$con = mysqli_connect("localhost","root","","erp");

$fname ="Jhon";
$lname = "Doe";

// function role(){

//     $con = mysqli_connect("localhost","root","","erp");
//     $role = "SELECT * FROM login WHERE role";


// }


/*function logindetails(){
        $con = mysqli_connect("localhost","root","","erp");
        $user = ($_POST['username']);
        $pass = ($_POST['password']);

        // users role 

        $admin = "admin";
        $student = "student";
        $teacher = "teacher";

    $query = "SELECT * FROM login WHERE username = '$user' && password = '$pass'";
    $result = mysqli_query($con, $query);
    $val = mysqli_num_rows($result);
    $role =  mysqli_fetch_assoc($result);

    // redirect roles 

    if($val == 1) {
        session_start();
        if ( $role['role'] == $admin ) {
            // admin role
            header('location:admin.php');   

        }elseif ($role['role'] == $student) {
            // student role 
            header('location:student.php');
            
        }elseif ($role['role'] == $teacher) {
            // teacher role
            header('location:teacher.php');
            
        }
    
    }else{
        $_SESSION['message'] ='user not found';


    }
}

*/
?>