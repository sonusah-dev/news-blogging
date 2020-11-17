<?php error_reporting(0);
session_start() ?>
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
  include('includes/connection.php');
  include('navbar.php');
  $id = $_GET['id'];
  $row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM news as n, users as u WHERE n.user_id=u.id and n.id='$id'"));
  ?>

  <!-- main content -->
  <div class="container my-4">
    <div class="row px-lg-5">
      <div class="col-12 px-lg-5">
        <!-- title of the post -->
        <h1><?php echo $row['title'] ?></h1>
        <!-- image of the post -->
        <div class="image-post mb-3">
          <a href="post.php?id=<?php echo $id ?> "><img src="<?php echo $row['photo'] ?>" alt="image post" /></a>
        </div>
        <div class="row mt-4">
          <!-- share on social -->
          <div class="col-md-4">
            <h4 class="my-3 pub">SHARE</h4>
            <div class="mb-4 d-flex">
              <div class="share-on bg-f border d-flex justify-content-center align-items-center mr-3">
                <a href="#"><i class="fab fa-facebook-f text-white"></i></a>
              </div>
              <div class="share-on d-flex justify-content-center align-items-center bg-t border mr-3">
                <a href="#"><i class="fab fa-twitter text-white"></i></a>
              </div>
              <div class="share-on d-flex justify-content-center align-items-center bg-l border mr-3">
                <a href="#"><i class="fab fa-linkedin-in text-white"></i></a>
              </div>
            </div>
            <hr />
            <!-- writter -->
            <div class="my-4">
              <h4 class="pub">WRITTEN BY</h4>
              <div class="d-flex writter mt-3">
                <img src="assets/Blog-post/user1.jpg" alt="author image" />
                <p class="h5 ml-3"><?php echo $row['first_name'] . " " . $row['last_name'] ?></p>
              </div>
            </div>
            <hr />
            <!-- published time -->
            <h4 class="text-muted pub" class="text-muted">Last Updated : <?php echo $row['last_time'] ?></h4>
            <hr />
          </div>
          <!-- news content -->
          <div class="col-lg-8">
            <p><?php echo $row['description'] ?></p>
          </div>
        </div>
        <hr />
        <!-- comment section -->
        <div class="comments">
          <h5>Comments</h5>
          <div class="col-md-6">
            <form action="insert_comment.php?id=<?php echo $id ?>" method="POST">
              <textarea name="comment" cols="60" rows="3"></textarea>
              <button type="submit" name="submit" class="btn btn-success">Post</button>
            </form>
            <hr />
            <?php
            $result = mysqli_query($conn, "SELECT * FROM comments as c, users as u WHERE c.user_id = u.id AND c.news_id = '$id' ");
            while ($row = mysqli_fetch_array($result)) :
            ?>
              <div class="d-flex writter mt-3">
                <img src="assets/Blog-post/user1.jpg" alt="user image" />
                <div class="ml-4 shadow comment-box w-100 p-3">
                  <h5 style="color: #243f47"><?php echo $row['first_name'] . " " . $row['last_name'] ?></h5>
                  <p>
                    <?php echo $row['comment'] ?>
                  </p>
                  <div>
                    <h6 class="text-muted" style="color: #243f47">Time</h6>
                    <p><?php echo $row['create_time'] ?></p>
                  </div>
                </div>
              </div>
            <?php endwhile ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer class="container-fluid py-4">
    <div class="row">
      <div class="col-md-3">
        <h1>NewsBlog</h1>
      </div>
      <div class="col-md-9">
        <nav class="nav">
          <a class="nav-link" href="index.php">HOME</a>
          <a class="nav-link" href="about.php">ABOUT</a>
          <a class="nav-link" href="contact.php">CONTACT US</a>
        </nav>
      </div>
      <hr />
      <p class="text-center">©2020 Gradlic Media Corporation Ltd.</p>
    </div>
  </footer>

  <!-- Option 1: Bootstrap Bundle with Popper.js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</body>

</html>