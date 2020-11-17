<?php
error_reporting(0);
include('includes/session.php');
include('includes/header.php');
include('includes/siderbar.php');
include('includes/topbar.php');
include('includes/connection.php');
$count = 1;
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
$row = mysqli_fetch_array($result);
// if (!$check1_res) {
//   printf("Error: %s\n", mysqli_error($conn));
//   exit();
// }
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <div class="card">
          <form id="RangeValidation" class="form-horizontal" action="update_user.php?id=<?php echo $row['id']; ?>" method="POST">
            <div class="card-header card-header-text" data-background-color="rose">
              <h4 class="card-title">Update User</h4>
            </div>

            <div class="card-content">
              <div class="row">
                <label class="col-sm-2 label-on-left">First Name</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="text" name="first_name" value="<?php echo $row['first_name'] ?>" />
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 label-on-left">Last Name</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="text" name="last_name" value="<?php echo $row['last_name'] ?>" />
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 label-on-left">Gender</label>
                <div class="col-sm-10">
                  <div class="radio checkbox-inline">
                    <label>
                      <input type="radio" name="gender" value="0" checked="true" />
                      Male
                    </label>
                  </div>
                  <div class="radio checkbox-inline">
                    <label>
                      <input type="radio" name="gender" value="1" />
                      Female
                    </label>
                  </div>
                  <div class="radio checkbox-inline">
                    <label>
                      <input type="radio" name="gender" value="2" />
                      Others
                    </label>
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
                <label class="col-sm-2 label-on-left">Password</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="text" name="password" value="<?php echo $row['password'] ?>" />
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 label-on-left">Mobile No</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="text" name="mobile_no" maxlength="10" value="<?php echo $row['mobile_no'] ?>" />
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