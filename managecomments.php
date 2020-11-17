<?php
error_reporting(0);
include('includes/session.php');
include('includes/header.php');
include('includes/siderbar.php');
include('includes/topbar.php');
include('includes/connection.php');
$count = 1;
if ($_SESSION['user_type'] == 0) {
  $result = mysqli_query($conn, "SELECT first_name, last_name, title, c.id as cid, u.id as uid, n.id as nid, comment FROM comments AS c, users AS u, news AS n WHERE c.news_id=n.id and c.user_id=u.id");
} else {
  $session_user = $_SESSION['id'];
  $result = mysqli_query($conn, "SELECT first_name, last_name, title, c.id as cid, u.id as uid, n.id as nid, comment FROM comments as c, news as n, users as u WHERE c.news_id=n.id and c.user_id=u.id and c.user_id = '$session_user' ");
}
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card-content">
          <h4 class="card-title btn btn-info">Manage Comments</h4>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>News</th>
                  <th>User</th>
                  <th>Comment</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_array($result)) : ?>
                  <tr>
                    <td class="text-center"><?php echo $count ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['first_name'] . " " . $row['last_name'] ?></td>
                    <td><?php echo $row['comment'] ?></td>
                    <td class="td-actions text-center">
                      <a href="editcomment.php?id=<?php echo $row['cid'] ?>" rel="tooltip" class="btn btn-success">
                        <i class="material-icons">edit</i>
                      </a>
                      <a href="delete_comment.php?id=<?php echo $row['cid'] ?>" rel=" tooltip" class="btn btn-danger">
                        <i class="material-icons">close</i>
                      </a>
                    </td>
                    <?php $count++; ?>
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