<?php
error_reporting(0);
include('includes/session.php');
include('includes/header.php');
include('includes/siderbar.php');
include('includes/topbar.php');
include('includes/connection.php');
$count = 1;
if ($_SESSION['user_type'] == 0) {
  $result = mysqli_query($conn, "SELECT * FROM users");
} else {
  $session_user = $_SESSION['id'];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$session_user' ");
}
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card-content">
          <h4 class="card-title btn btn-info">Manage Account</h4>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>First Name</th>
                  <th>User Type</th>
                  <th>Email</th>
                  <th>Mobile No</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_array($result)) : ?>
                  <tr>
                    <td class="text-center"><?php echo $count ?></td>
                    <td><?php echo $row['first_name'] ?></td>
                    <td><?php echo ($row['user_type'] == 0) ? "Admin" : (($row['user_type'] == 1) ? "Author" : "Casual User") ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['mobile_no'] ?></td>
                    <td class="td-actions text-center">
                      <a href="edituser.php?id=<?php echo $row['id'] ?>" rel="tooltip" class="btn btn-success">
                        <i class="material-icons">edit</i>
                      </a>
                      <?php if (!($row['id'] == $_SESSION['id'])) : ?>
                        <a href="delete_user.php?id=<?php echo $row['id'] ?>" rel=" tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </a>
                      <?php endif ?>
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