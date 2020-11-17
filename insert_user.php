<?php
session_start();
// CHECK AUTHORIZED USER
if (isset($_POST['submit'])) {
    // INCLUDE CONNECTION
    include('includes/connection.php');
    // RECIEVING FORM DATA
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $user_type = $_POST['user_type'];
    $password = $_POST['password'];
    $mobile_no = $_POST['mobile_no'];
    // INSERT QUERY
    $sql = "INSERT INTO users (first_name,last_name,email,password,mobile_no,user_type) 
        VALUES('$first_name','$last_name','$email','$password','$mobile_no','$user_type')";
    // CHECK RESULT
    if (mysqli_query($conn, $sql)) {
        if ($_SESSION['user_type'] == 0) {
            header('location:manageusers.php');
        }
        $_SESSION['msg'] = "Data inserted successfully";
        header('location:login.php');
    } else {
        $_SESSION['msg'] = "Something went wrong please try again";
        header('location:signup.php');
        // echo "Something went wrong please try again" . mysqli_error($conn);
    }
    // REDIRECT TO HOME PAGE
} else {
    header('location:index.php');
}
