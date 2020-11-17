<?php
error_reporting(0);
include('includes/session.php');
include('includes/header.php');
include('includes/siderbar.php');
include('includes/topbar.php');
include('includes/connection.php');
$id = $_GET['id'];
$row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM contactus WHERE id = $id"));
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <div class="card">
          <form id="RangeValidation" class="form-horizontal" action="update_contactus.php?id=<?php echo $row['id'] ?>" method="POST">
            <div class="card-header card-header-text" data-background-color="rose">
              <h4 class="card-title">Contact Us</h4>
            </div>

            <div class="card-content">
              <div class="row">
                <label class="col-sm-2 label-on-left">Name</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="text" name="name" value="<?php echo $row['name'] ?>" />
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 label-on-left">Email</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="email" name="email" value="<?php echo $row['email'] ?>" />
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 label-on-left">Message</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="text" name="message" value="<?php echo $row['message'] ?>" />
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer pull-right">
              <button type="submit" name="update" class="btn btn-rose btn-fill">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>