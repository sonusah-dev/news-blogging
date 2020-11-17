<?php
error_reporting(0);
include('includes/session.php');
include('includes/header.php');
include('includes/siderbar.php');
include('includes/topbar.php');
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <div class="card">
          <form id="RangeValidation" class="form-horizontal" action="insert_user.php" method="POST">
            <div class="card-header card-header-text" data-background-color="rose">
              <h4 class="card-title">New User</h4>
            </div>

            <div class="card-content">
              <div class="row">
                <label class="col-sm-2 label-on-left">First Name</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="text" name="first_name" />
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 label-on-left">Last Name</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="text" name="last_name" />
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 label-on-left">User Type</label>
                <div class="col-sm-10">
                  <div class="radio checkbox-inline">
                    <label>
                      <input type="radio" name="gender" value="1" checked="true">
                      Author
                    </label>
                  </div>
                  <div class="radio checkbox-inline">
                    <label>
                      <input type="radio" name="gender" value="2">
                      Formal User
                    </label>
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 label-on-left">Email</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="email" name="email" />
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 label-on-left">Mobile No</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="text" name=mobile_no maxlength="10" />
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 label-on-left">Password</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="password" name="password" />
                  </div>
                </div>
              </div>
            </div>

            <div class="card-footer pull-right">
              <button type="submit" name="submit" class="btn btn-rose btn-fill">Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>