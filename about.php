<?php error_reporting(0); ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
  <!-- fontawesome icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css">
  <title>News Blog | About</title>
</head>

<body>


  <!-- top navigation -->
  <?php include('navbar.php') ?>

  <!-- about section -->
  <div class="container about my-5">
    <h1 class="text-center">About</h1>
    <p class="mt-5">
      Launched on July 30, 2005, in Mumbai, dna is an English broadsheet daily owned by Diligent Media Corporation, an Essel Group company.
    </p>
    <p>
      Through news, views, analyses and interactivity, dna provides readers with a composite unbiased picture of the city, the country and the world around them. Today, dna is the second most read English broadsheet daily in the city of Mumbai and is the preferred choice of 15.06 lakh readers in Mumbai alone (based on total readership for Q4 2012 from Indian Readership Survey).
    </p>
    <p>
      Different Strokes for Different Folks: Having a diverse range of products and sections dna is for everyone in the family. With a diversified portfolio including some of the most famous titles like dna Money, dna After Hrs, the Sunday Mag, etc, dna has ensured that there is something for everybody in it.
    </p>
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