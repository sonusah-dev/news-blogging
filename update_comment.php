<?php
session_start();
// CHECK AUTHORIZED USER
if (isset($_POST['update'])) {
    // INCLUDING CONNECTION
    include('includes/connection.php');
    // GETTING COMMENT ID
    $id = $_GET['id'];
    // RECIEVING FORM DATA
    $user_id = $_POST['user_id'];
    $news_id = $_POST['news_id'];
    $comment = $_POST['comment'];
    // INSERT QUERY
    $sql = "UPDATE comments SET user_id='$user_id',news_id='$news_id',comment='$comment' WHERE id=$id";
    // CHECK RESULT
    if (mysqli_query($conn, $sql)) {
        // $_SESSION['msg'] = "Data inserted successfully";
        // echo "Data inserted successfully";
        header('location:managecomments.php');
    } else {
        // $_SESSION['msg'] = "Something went wrong please try again";
        header('location:managecomments.php');
        // echo mysqli_error($conn);
    }
    // REDIRECT TO HOME PAGE
} else {
    header('location:../index.php');
}
