<?php
error_reporting(0);
include('includes/session.php');
include('includes/header.php');
include('includes/siderbar.php');
include('includes/topbar.php');
include('includes/connection.php');
$id = $_GET['id'];
$row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM news WHERE id = $id"));
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <div class="card">
          <form id="RangeValidation" class="form-horizontal" action="update_news.php?id=<?php echo $row['id'] ?>" method="POST" enctype="multipart/form-data">
            <div class="card-header card-header-text" data-background-color="rose">
              <h4 class="card-title">Update News</h4>
            </div>

            <div class="card-content">
              <div class="row">
                <div class="col-md-4 col-sm-2 text-center" style="margin-left: 250px">
                  <legend>News Image</legend>
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail">
                      <img src="<?php echo $row['photo'] ?>" alt="..." />
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-round btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="photo" />
                      </span>
                      <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 label-on-left">Title</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="text" name="title" value="<?php echo $row['title'] ?>" />
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 label-on-left">Description</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="10"><?php echo $row['description'] ?></textarea>
                    <!-- <input class="form-control" type="text" name="description" value="" /> -->
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