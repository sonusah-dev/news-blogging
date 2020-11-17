<?php
error_reporting(0);
include('includes/session.php');
include('includes/header.php');
include('includes/siderbar.php');
include('includes/topbar.php');
include('includes/connection.php');
$count = 1;
$result = mysqli_query($conn, "SELECT * FROM contactus");
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card-content">
          <h4 class="card-title btn btn-info">Manage Queries</h4>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th class="text-right">Message</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_array($result)) : ?>
                  <tr>
                    <td class="text-center"><?php echo $count ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td class="text-right"><?php echo $row['message'] ?></td>
                    <td class="td-actions text-right">
                      <a href="editcontactus.php?id=<?php echo $row['id'] ?>" rel="tooltip" class="btn btn-success">
                        <i class="material-icons">edit</i>
                      </a>
                      <a href="delete_contactus.php?id=<?php echo $row['id'] ?>" rel=" tooltip" class="btn btn-danger">
                        <i class="material-icons">close</i>
                      </a>
                    </td>
                    <?php $count++ ?>
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