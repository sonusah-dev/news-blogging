<?php
session_start();
// CHECK AUTHORITY
if (isset($_POST['submit'])) {
    // INCLUDE CONNECTION
    include('includes/connection.php');
    // RECIEVING FORM DATA
    $photo = $_FILES['photo'];
    $user_id = $_SESSION['id'];
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
    $sql = "INSERT INTO news (user_id,photo,title,description) 
        VALUES('$user_id','$target_file','$title','$description')";
    // CHECK RESULT
    if (mysqli_query($conn, $sql)) {
        $_SESSION['msg'] = "Data inserted successfully";
        header('location:managenews.php?ok=success');
    } else {
        $_SESSION['msg'] = "Something went wrong please try again";
        // header('location:managenews.php');
        echo "Something went wrong" . mysqli_error($conn);
    }
    // REDIRECT TO HOME PAGE
} else {
    header('location:index.php');
}
