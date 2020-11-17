<?php
session_start();
// CHECK AUTHORIZED USER
if (isset($_POST['submit'])) {
    // INCLUDING CONNECTION
    include('includes/connection.php');
    // RECIEVING FORM DATA
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // INSERT QUERY
    $sql = "INSERT INTO contactus (name,email,message) 
        VALUES('$name','$email','$message')";
    // CHECK RESULT
    if (mysqli_query($conn, $sql)) {
        $_SESSION['msg'] = "Data inserted successfully";
        header('location:contact.php');
    } else {
        $_SESSION['msg'] = "Something went wrong please try again";
        header('location:contact.php');
        // echo "Something went wrong please try again" . mysqli_error($conn);
    }
    // REDIRECT TO HOME PAGE
} else {
    header('location:index.php');
}
