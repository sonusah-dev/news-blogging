<?php
session_start();
// CHECK AUTHORIZED USER
if (isset($_POST['submit'])) {

    if (!isset($_SESSION['id'])) {
        header('location:login.php');
    } else {
        // INCLUDING CONNECTION
        include('includes/connection.php');
        // RECIEVING FORM DATA
        $id = $_GET['id'];
        $user_id = $_SESSION['id'];
        $news_id = $id;
        $comment = $_POST['comment'];
        // INSERT QUERY
        $sql = "INSERT INTO comments (user_id,news_id,comment) 
        VALUES('$user_id','$news_id','$comment')";
        // CHECK RESULT
        if (mysqli_query($conn, $sql)) {
            $_SESSION['msg'] = "Data inserted successfully";
            header("location:post.php?id=" . $id);
        } else {
            $_SESSION['msg'] = "Something went wrong please try again";
            header('location:post.php?id=' . $id);
            // echo "Something went wrong please try again" . mysqli_error($conn);
        }
    }
    // REDIRECT TO HOME PAGE
} else {
    header('location:index.php');
}
