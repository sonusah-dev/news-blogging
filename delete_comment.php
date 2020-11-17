<?php
session_start();
// INCLUDING CONNECTION
include('includes/connection.php');
// GETTING COMMENT ID
$id = $_GET['id'];
// DELETE QUERY
$sql = "DELETE FROM comments WHERE id =$id";
// CHECK RESULT
if (mysqli_query($conn, $sql)) {
    $_SESSION['msg'] = "Data deleted successfully";
    header('location:managecomments.php');
} else {
    // echo mysqli_error($conn);
    $_SESSION['msg'] = "Something went wrong please try again";
    header('location:managecomments.php');
}
