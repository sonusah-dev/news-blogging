<?php
session_start();
// CHECK AUTHORITY
if (isset($_POST['update'])) {
    // INCLUDE CONNECTION
    include('includes/connection.php');
    // GETTING NEWS ID
    $id = $_GET['id'];
    // RECIEVING FORM DATA
    $user_id = $_SESSION['id'];
    $photo = $_FILES['photo'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    // FILE TRANSFER OF IMAGES
    $photo_name = $photo['name'];
    $photo_path = $photo['tmp_name'];
    $photo_error = $photo['error'];

    if ($photo_error == 0) {
        $target_file = 'uploads/' . $photo_name;
        move_uploaded_file($photo_path, $target_file);
    }

    // INSERT QUERY
    $sql = "UPDATE news SET user_id='$user_id',photo='$target_file',title='$title',description='$description' WHERE id = '$id'";
    // CHECK RESULT
    if (mysqli_query($conn, $sql)) {
        $_SESSION['msg'] = "Data updated successfully";
        header('location:managenews.php');
    } else {
        $_SESSION['msg'] = "Something went wrong please try again";
        // header('location:managenews.php');
        echo mysqli_error($conn);
    }
    // REDIRECT TO HOME PAGE
} else {
    header('location:index.php');
}
