<?php
require 'header.php';
$sql   = "SELECT * FROM user";
$res   = mysqli_query($conn,$sql);
$count = 0;
if (isset($_REQUEST['del'])) {
  $del = "DELETE FROM user WHERE uid='".$_REQUEST['del']."'";
  $delres = mysqli_query($conn,$del);
?>
<script type="text/javascript">
  window.location.href="userdetails.php";
</script>
<?php
}
?>  


     
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
                      <a class="active" href="userdetails.php">
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
                      <a href="javascript:;" >
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
                   
              </ul>
             
          </div>
      </aside>
      <!--sidebar end-->    
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <div class="row mt">
              <!--CUSTOM CHART START -->
              <div class="border-head">
                <h2><i class="fa fa-users fa-lg"></i> Users Manager</h2>
              </div><hr>
              <div class="custom-bar-chart">
                <div class="table-responsive">
                  <table class="table table-hover" id="dev-table">
                  <tr >
                    <th>Serial No.</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  <?php while($row = mysqli_fetch_array($res,MYSQLI_BOTH)) { ?>
                  <tr>
                    <td><?php echo ++$count; ?></td>
                    <td><?php echo $row['uname']; ?></td>
                    <td><?php echo $row['ucontact']; ?></td>
                    <td><?php echo $row['uemail']; ?></td>
                    <td>
                    <a class="btn btn-danger btn-md " href="userdetails.php?del=<?php echo $row['uid']; ?>"> <i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                <?php } ?>
                  </table>
                </div> 
              </div>
              <!--custom chart end-->
  					</div><!-- /row -->	
					</section>
      </section>
      <br>
      <!--main content end-->
 <?php
 require 'footer.php';
 ?>