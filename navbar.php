<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">News<span>Blog</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <?php if (!isset($_SESSION['id'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                <?php endif ?>
                <?php if (isset($_SESSION['id'])) : ?>
                    <?php if (($_SESSION['user_type'] == 0) || ($_SESSION['user_type'] == 1)) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="manageusers.php">Dashboard</a>
                        </li>
                    <?php endif ?>
                <?php endif ?>
                <?php if (isset($_SESSION['id'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                <?php endif ?>
            </ul>

            <div class="d-flex social">
                <a href="#"><i class="fab fa-facebook-f mr-3"></i></a>
                <a href="#"><i class="fab fa-instagram mr-3"></i></a>
                <a href="#"><i class="fab fa-twitter mr-3"></i></a>
                <a href="#"><i class="fab fa-youtube mr-3"></i></a>
            </div>

        </div>
    </div>
</nav>