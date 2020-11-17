<?php error_reporting(0); ?>
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
  <title>News Blog | Contact Us</title>
</head>

<body>
  <!-- top navigation -->
  <?php include('navbar.php') ?>
  <!-- contact form -->

  <div class="container-fluid d-flex justify-content-center">
    <form action="insert_contactus.php" class="contact-form" method="POST">
      <h1 class="text-center mb-5">Contact Us</h1>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input name="name" type="text" class="form-control" id="inputPassword">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input name="email" type="text" class="form-control" id="inputPassword">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Message</label>
        <div class="col-sm-10">
          <textarea name="message" class="form-control" id="inputPassword" cols="81" rows="4"></textarea>
        </div>
      </div>
      <div class="d-flex justify-content-end my-4">
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
      </div>
    </form>

  </div>

  <!-- footer -->
  <footer class="container-fluid py-4">
    <div class="row">
      <div class="col-md-3">
        <h1 class="text-white">NewsBlog</h1>
      </div>
      <div class="col-md-9">
        <nav class="nav">
          <a class="nav-link text-primary" href="index.php">HOME</a>
          <a class="nav-link text-primary" href="about.php">ABOUT</a>
          <a class="nav-link text-primary" href="contact.php">CONTACT US</a>
        </nav>
      </div>
      <hr />
      <p class="text-center text-white">©2020 Gradlic Media Corporation Ltd.</p>
    </div>
  </footer>

  <!-- Option 1: Bootstrap Bundle with Popper.js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</body>

</html>