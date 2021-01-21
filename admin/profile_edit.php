<?php
	require "header.php"; 
	if (isset($_REQUEST['aid']) && !empty($_REQUEST['aid']) && $_REQUEST['aid']!=0)
	{
			$sql1="SELECT * FROM admin_log WHERE aid='".$_REQUEST['aid']."'";
			$result1=mysqli_query($conn,$sql1);
			$rows=mysqli_fetch_array($result1,MYSQLI_BOTH);
	}
	if (isset($_REQUEST['save']))
	{
		$aid1=$_REQUEST['aid'];
		$firstname=$_REQUEST['firstname'];
		$uname=$_REQUEST['uname'];
		$sql="UPDATE admin_log SET firstname='$firstname',username='$uname' 
				WHERE aid='".$aid1."' ";
		$result=mysqli_query($conn,$sql);
?>
	<script type="text/javascript">window.location.href="index.php"</script>
  <?php    
  }
?>

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.png" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $row['firstname']; ?></h5>
                    
                  <li class="">
                      <a  href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="homedetails.php">
                          <i class="fa fa-home"></i>
                          <span> Manage Homes</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="userdetails.php">
                          <i class="fa fa-users"></i>
                          <span>User Management</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="feedbackdetails.php">
                          <i class="fa fa-bell"></i>
                          <span>Manage Feedback</span>
                      </a>
                  </li> 
                 <li class="sub-menu">
                      <a href="manageapplyhome.php">
                          <i class="fa fa-home"></i>
                          <span>Apply Home</span>
                      </a>
                  </li> 
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Setting</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="profile_edit.php?aid=<?php echo $row['aid']; ?>">Update Profile</a></li>
                          <li><a  href="change_pass.php?chid=<?php echo $row['aid']; ?>">Update Password</a></li>
                      </ul>
                  </li>                 
                  <li class="sub-menu">
                      <a href="logout.php">
                          <i class="fa fa-lock"></i>
                          <span>Logout</span>
                      </a>
                  </li>   
                  <li class="sub-menu" style="background-color: black;color:white;padding: 10px;">
                    <b>2018-2019 CITY Nest Admin pannel.  Design By:<i style="color:yellow;"> Dhyey Pandya</i> </b>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <div class="row mt">
              <!--CUSTOM CHART START -->
              <div class="border-head">
                <h2><i class="fa fa-cogs fa-lg"></i> Update Profile</h2>
              </div><hr>
						<form role="form" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<input type="hidden" class="user" name="aid" value="<?php echo $rows['aid']; ?>" placeholder="id">
								<label class="control-label"> First Name</label>
								<input type="text" class="form-control input-lg" name="firstname" value="<?php echo $rows['firstname']; ?>" placeholder="Firstname">
							</div>
							<div class="form-group">
								<label class="control-label">User Name:</label>
								<input type="text" name="uname" rows="5" placeholder="Enter User name...." class="form-control input-lg" value="<?php echo $rows['username']; ?>" required>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-info btn-md" value="Update" name="save" />
								<a href="index.php"><input type="button" name="reset" value="Cancel" class="btn btn-danger btn-md "></a>
							</div>
						</form>
					</div><!-- /row --> 
          </section>
      </section>
      <br>
      <!--main content end-->
<?php 
	require "footer.php";  
?>