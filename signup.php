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

  <!-- navbar -->
  <?php include('navbar.php') ?>
  <!-- Signup section -->
  <div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="login-box shadow p-4">
      <form action="insert_user.php" method="POST" class="mb-4">
        <input type="text" class="w-100 mt-5 px-3" name="first_name" placeholder="First name" />
        <input type="text" class="w-100 mt-3 px-3" name="last_name" placeholder="Last name" />
        <select name="user_type" class="w-100 mt-3 px-3 form-select">
          <option selected> USER TYPE </option>
          <option value="1">Author</option>
          <option value="2">User</option>
        </select>
        <input type="text" class="w-100 mt-3 px-3" name="mobile_no" placeholder="Phone number" />
        <input type="text" class="w-100 mt-3 px-3" name="email" placeholder="Email address" />
        <input type="password" class="w-100 mt-3 px-3" name="password" placeholder="Password" />
        <button type="submit" name="submit" class="btn btn-success w-100 mt-4">Sign Up</button>
        <p class="mt-3 text-muted" style="font-size: 14px">
          Already have an account? <a href="login.html" class="text-primary">Login</a>
        </p>
      </form>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper.js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</body>

</html>