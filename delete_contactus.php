<?php
session_start();
// INCLUDING CONNECTION
include('includes/connection.php');
// GETTING CONTACTUS ID
$id = $_GET['id'];
// DELETE QUERY
$sql = "DELETE FROM contactus WHERE id =$id";
// CHECK RESULT
if (mysqli_query($conn, $sql)) {
    $_SESSION['msg'] = "Data deleted successfully";
    header('location:managecontactus.php');
} else {
    $_SESSION['msg'] = "Something went wrong please try again";
    header('location:managecontactus.php');
}
