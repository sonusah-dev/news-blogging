<?php error_reporting(0);
session_start();  ?>
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
  <title>News Blog | Home</title>
</head>

<body>
  <!-- top navigation -->
  <?php
  include('navbar.php');
  include('includes/connection.php');
  $result = mysqli_query($conn, "SELECT * FROM news")
  ?>

  <!-- main content -->
  <div class="container my-4">
    <div class="row">
      <?php while ($row = mysqli_fetch_array($result)) : ?>
        <!-- news part -->
        <div class="col-md-8 pb-2">

          <div class="post">
            <div class="image-post mb-3">
              <a href="post.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $row['photo'] ?>" alt="image post" /></a>
            </div>
            <a class="h3" href="post.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a>
            <p class="mt-3">
              <?php echo substr($row['description'], 0, 175) . " . . ." ?>
            </p>
            <a href="post.php?id=<?php echo $row['id'] ?>" class="btn btn-read-more">Read More <i class="fas fa-arrow-right ml-3"></i></a>
          </div>
          <hr />

        </div>
        <!-- sidecontent -->
        <aside class="col-md-4">
          <div class="popular-post">
            <h3>Popular Post</h3>
            <div class="post mt-5">
              <div class="image-post mb-3">
                <a href="post.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $row['photo'] ?>" alt="image post" /></a>
              </div>
              <a class="h6" href="post.html"><?php echo $row['title'] ?></a>
            </div>
          </div>
        </aside>
      <?php endwhile ?>
    </div>
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