<?php
session_start();
// CHECK AUTHORIZED USER
if (isset($_POST['update'])) {
    // INCLUDING CONNECTION
    include('includes/connection.php');
    // GETTING CONTACTUS ID
    $id = $_GET['id'];
    // RECIEVING FORM DATA
    $email = $_POST['email'];
    $message = $_POST['message'];
    $name = $_POST['name'];
    // INSERT QUERY
    $sql = "UPDATE contactus SET email='$email',message='$message',name='$name' WHERE id = $id ";
    // CHECK RESULT
    if (mysqli_query($conn, $sql)) {
        $_SESSION['msg'] = "Data inserted successfully";
        // echo "Data updated successfully";
        header('location:managecontactus.php');
    } else {
        $_SESSION['msg'] = "Something went wrong please try again";
        header('location:managecontactus.php');
        // echo mysqli_error($conn);
    }
    // REDIRECT TO HOME PAGE
} else {
    header('location:../index.php');
}
