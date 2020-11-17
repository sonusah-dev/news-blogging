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
          <form id="RangeValidation" class="form-horizontal" action="insert_comment.php" method="POST">
            <div class="card-header card-header-text" data-background-color="rose">
              <h4 class="card-title">Add Comment</h4>
            </div>

            <div class="card-content">

              <div class="row">
                <label class="col-sm-2 label-on-left">Name</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="text" name="user_id" />
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 label-on-left">News</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="text" name="news_id" />
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 label-on-left">Comment</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="text" name="comment" />
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