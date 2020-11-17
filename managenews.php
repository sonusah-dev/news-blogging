<?php
error_reporting(0);
include('includes/session.php');
include('includes/header.php');
include('includes/siderbar.php');
include('includes/topbar.php');
include('includes/connection.php');
if ($_SESSION['user_type'] == 0) {
  $result = mysqli_query($conn, "SELECT * FROM news");
} else {
  $session_user = $_SESSION['id'];
  $result = mysqli_query($conn, "SELECT * FROM news WHERE user_id = '$session_user' ");
}
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card-content">
          <h4 class="card-title btn btn-info">Manage News</h4>
          <div class="table-responsive">
            <table class="table table-bordered table-shopping">
              <thead>
                <tr>
                  <th class="text-center">News Image</th>
                  <th>News Title</th>
                  <th>Description</th>
                  <!-- <th>Publisher</th> -->
                  <th class="text-right">Upload Time</th>
                  <th class="text-right">Last Update</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_array($result)) : ?>
                  <tr>
                    <td>
                      <div class="img-container">
                        <img src="<?php echo $row['photo'] ?>" alt="..." />
                      </div>
                    </td>
                    <td class="td-name">
                      <a href="#"><?php echo $row['title'] ?></a>
                    </td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['created_time'] ?></td>
                    <td><?php echo $row['last_time'] ?></td>
                    <td class="td-actions text-right">
                      <a href="editnews.php?id=<?php echo $row['id'] ?>" rel="tooltip" class="btn btn-success">
                        <i class="material-icons">edit</i>
                      </a>
                      <a href="delete_news.php?id=<?php echo $row['id'] ?>" rel=" tooltip" class="btn btn-danger">
                        <i class="material-icons">close</i>
                      </a>
                    </td>
                  </tr>
                <?php endwhile ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>