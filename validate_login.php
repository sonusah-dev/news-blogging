<?php

session_start();
// CHECK FOR AUTHORIZED USER
if (isset($_POST['login'])) {
    // INCLUDING CONNECTION
    include('includes/connection.php');
    // RECIEVING FORM DATA
    $email = $_POST['email'];
    $password = $_POST['password'];
    // SELECT QUERY
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
    // FETCH ARRAY
    $result = (mysqli_query($conn, $sql));

    // VALIDATE RESULT
    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);
        // STORING SESSION VARIABLE
        $_SESSION['id'] = $row['id'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['mobile_no'] = $row['mobile_no'];
        $_SESSION['create_date'] = $row['create_date'];
        $_SESSION['last_update'] = $row['last_update'];
        // REDIRECT TO DASHBOARD
        header('location:index.php');
    } else {
        $_SESSION['msg'] = "Incorrect email or password";
        header('location:login.php');
    }
}
// REDIRECT TO HOME PAGE
else {
    header('location:index.php');
}
