<?php
session_start();
// INCLUDING CONNECTION
include('includes/connection.php');
// GETTING NEWS ID
$id = $_GET['id'];
// DELETE QUERY
$sql = "DELETE FROM news WHERE id =$id";
// CHECK RESULT
if (mysqli_query($conn, $sql)) {
    $_SESSION['msg'] = "Data deleted successfully";
    header('location:managenews.php');
} else {
    $_SESSION['msg'] = "Something went wrong please try again";
    header('location:managenews.php');
}
