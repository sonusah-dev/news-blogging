<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />
  <!-- fontawesome icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css" />
  <title>News Blog | Login</title>
</head>

<body>
  <?php include('navbar.php') ?>
  <!-- login section -->
  <div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="login-box shadow p-4">
      <form action="validate_login.php" method="POST" class="mb-4">
        <input type="text" class="w-100 mt-5 px-3" name="email" placeholder="Email address" />
        <input type="password" class="w-100 mt-3 px-3" name="password" placeholder="Password" />
        <h6><?php echo $_SESSION['msg']; ?></h6>
        <button type="submit" name="login" class="btn btn-primary w-100 mt-4">Login</button>
        <a href="signup.html" class="btn btn-success w-100 mt-4"> Create Account</a>
      </form>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper.js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</body>

</html>