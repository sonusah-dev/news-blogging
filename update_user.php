<?php
session_start();
// CHECK AUTHORIZED USER
if (isset($_POST['update'])) {
    // INCLUDING CONNECTION
    include('includes/connection.php');
    // GETTING USER ID
    $id = $_GET['id'];
    // RECIEVING FORM DATA
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile_no = $_POST['mobile_no'];
    // $create_date = $_POST['create_date'];
    // $last_update = $_POST['last_update'];
    // UPDATE QUERY
    $sql = " UPDATE users SET first_name ='$first_name',last_name='$last_name',gender='$gender',email='$email',
    password='$password',mobile_no='$mobile_no'";
    // CHECK RESULT
    if (mysqli_query($conn, $sql)) {
        $_SESSION['msg'] = "Data updated successfully";
        header('location:manageusers.php');
    } else {
        $_SESSION['msg'] = "Something went wrong please try again";
        header('location:manageusers.php');
        // echo mysqli_error($conn);
    }
    // REDIRECT TO HOME PAGE
} else {
    header('location:../index.php');
}
