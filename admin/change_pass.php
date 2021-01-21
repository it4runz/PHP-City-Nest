<?php
	require "header.php";  
	require "menu.php";
	if (isset($_REQUEST['chid']) && !empty($_REQUEST['chid']) && $_REQUEST['chid']!=0)
	{
		$sql1="SELECT * FROM admin_log WHERE aid='".$_REQUEST['chid']."'";
		$result1=mysqli_query($conn,$sql1);
		$rows=mysqli_fetch_array($result1,MYSQLI_BOTH);

		if (isset($_REQUEST['save']))
		{
			$pass=$_REQUEST['oldpass'];
			if ($pass == $rows['password'])
			{
				$aid1=$_REQUEST['aid'];
				$newpass1=$_REQUEST['newpass'];
				$conpass1=$_REQUEST['conpass'];
				if ($newpass1 == $conpass1)
				{	
					$sql="UPDATE admin_log SET password='$newpass1' WHERE aid='".$aid1."'"; 
					$res=mysqli_query($conn,$sql);
				?><script type="text/javascript">window.location.href="index.php"</script>
	  			<?php
	  			} else {    
	  			?>
	  			<div style="color:white;background-color:red;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Please enter both password must be same.. Try agian..!!!</div>
	  			<?php
	  			}
			}
			else
			{
				?>
				<div style="color:white;background-color:red;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Old  Password is invalid.. Try agian..!!!</div>
				<?php
			}
		}
	}
?>
<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="index.php"><img src="assets/img/ui-sam.png" class="img-circle" width="60"></a></p>
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
                          <li><a href="change_pass.php?chid=<?php echo $row['aid']; ?>">Update Password</a></li>
                      </ul>
                  </li>                 
                  <li class="sub-menu">
                      <a href="logout.php">
                          <i class="fa fa-lock"></i>
                          <span>Logout</span>
                      </a>
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
                <h2><i class="fa fa-cogs fa-lg"></i> Update Password</h2>
              </div><hr>
						<form role="form" method="POST" enctype="multipart/form-data">

							<div class="form-group">
								<input type="hidden" class="user" name="aid" value="<?php echo $rows['aid']; ?>" placeholder="id">
								<label class="control-label">Old Password </label>
								<input type="password" class="form-control input-lg"  name="oldpass" placeholder="Old Password" required>	
							</div>
															
							<div class="form-group">
								<label class="control-label"> New Password </label>
								<input type="password" class="form-control input-lg" name="newpass" placeholder="New Password" required>
							</div>
							<div class="form-group">
								<label class="control-label"> Confirm Password </label>
								<input type="password" class="form-control input-lg" name="conpass" placeholder="Confirm Password" required>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-info btn-md" value="Update" name="save" />
								<a href="index.php"><input type="button" name="reset" value="Cancel" class="btn btn-danger btn-md"></a>
							</div>
						</form>	
				</div><!-- /row --> 
          </section>
      </section>
      <br>
      <!--main content end-->	
