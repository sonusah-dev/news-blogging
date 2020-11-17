<?php
session_start();
// INCLUDING CONNECTION
include('includes/connection.php');
// GETTING NEWS ID
$id = $_GET['id'];
// DELETE QUERY
$sql = "DELETE FROM users WHERE id =$id";
// CHECK RESULT
if (mysqli_query($conn, $sql)) {
    $_SESSION['msg'] = "Data deleted successfully";
    header('location:manageusers.php');
} else {
    // echo "Something went wrong" . mysqli_error($conn);
    $_SESSION['msg'] = "Something went wrong please try again";
    header('location:manageusers.php');
}
