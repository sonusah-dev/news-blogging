<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="../../assets/img/sidebar-1.jpg">

  <div class="logo">
    <a href="index.php" class="simple-text logo-normal text-center">Newsblog</a>
  </div>

  <div class="sidebar-wrapper">
    <div class="user">
      <div class="photo">
        <img src="assets/img/default-avatar.png" />
      </div>
      <div class="info">
        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
          <span>
            <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'] ?>
            <b class="caret"></b>
          </span>
        </a>
        <div class="clearfix"></div>
        <div class="collapse" id="collapseExample">
          <ul class="nav">
            <?php if ($_SESSION['user_type'] == 1) : ?>
              <li>
                <a href="./manageusers.php">
                  <span class="sidebar-normal"> Profile </span>
                </a>
              </li>
            <?php endif ?>
            <li>
              <a href="./logout.php">
                <span class="sidebar-normal"> Logout </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <ul class="nav">
      <li>
        <a data-toggle="collapse" href="#newsExample">
          <i class="material-icons">satellite</i>
          <p>
            News
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="newsExample">
          <ul class="nav">
            <li>
              <a href="./addnews.php">
                <span class="sidebar-normal">Add News</span>
              </a>
            </li>
            <li>
              <a href="./managenews.php">
                <span class="sidebar-normal">Manage News</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <?php if ($_SESSION['user_type'] == 0) : ?>
        <li>
          <a data-toggle="collapse" href="#userExample">
            <i class="material-icons">people</i>
            <p>
              Users
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="userExample">
            <ul class="nav">
              <li>
                <a href="./adduser.php">
                  <span class="sidebar-normal">Add Users</span>
                </a>
              </li>
              <li>
                <a href="./manageusers.php">
                  <span class="sidebar-normal">Manage Users</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      <?php endif ?>
      <li>
        <a href="managecomments.php">
          <i class="material-icons">comment</i>
          <p>
            Comments
          </p>
        </a>
      </li>
      <?php if ($_SESSION['user_type'] == 0) : ?>
        <li>
          <a href="managecontactus.php">
            <i class="material-icons">content_paste</i>
            <p>
              ContactUs Query
            </p>
          </a>
        </li>
      <?php endif ?>
    </ul>
  </div>
</div>
<div class="main-panel">