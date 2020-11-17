<?php
error_reporting(0);
include('includes/session.php');
include('includes/header.php');
include('includes/siderbar.php');
include('includes/topbar.php');
include('includes/connection.php');
$id = $_GET['id'];
$row = mysqli_fetch_array(mysqli_query($conn, "SELECT first_name,last_name,title,comment,c.id as cid, u.id as uid, n.id as nid FROM comments AS c, users AS u, news AS n WHERE c.news_id=n.id AND c.user_id=u.id AND c.id='$id'"));
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <div class="card">
          <form id="RangeValidation" class="form-horizontal" action="update_comment.php?id=<?php echo $row['cid'] ?>" method="POST">
            <div class="card-header card-header-text" data-background-color="rose">
              <h4 class="card-title">Update Comment</h4>
            </div>

            <div class="card-content">
              <div class="row">
                <label class="col-sm-2 label-on-left">Name</label>
                <div class="col-lg-9 col-md-6 col-sm-2">
                  <select class="selectpicker" data-style="select-with-transition" name="user_id" data-size="7">
                    <option value="<?php echo $row['uid'] ?>"><?php echo $row['first_name'] . ' ' . $row['last_name']  ?></option>
                  </select>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 label-on-left">News</label>
                <div class="col-lg-9 col-md-6 col-sm-2">
                  <select class="selectpicker" data-style="select-with-transition" name="news_id" data-size="7">
                    <option value="<?php echo $row['nid'] ?>"><?php echo $row['title'] ?></option>
                  </select>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 label-on-left">Comment</label>

                <div class="col-sm-9">
                  <div class="form-group label-floating">
                    <label class="control-label"></label>
                    <input class="form-control" type="text" name="comment" value="<?php echo $row['comment'] ?>" />
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