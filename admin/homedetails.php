<?php
require 'header.php';
require 'menu.php';
$sql="SELECT * FROM p_g_house";
$result=mysqli_query($conn,$sql);
$count =0;
if (isset($_REQUEST['del'])) {
  $del = "DELETE FROM p_g_house WHERE houseid='".$_REQUEST['del']."'";
  $delres = mysqli_query($conn,$del);
?>
<script type="text/javascript">
  window.location.href="homedetails.php";
</script>
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
                      <a class="active" href="homedetails.php">
                          <i class="fa fa-home"></i>
                          <span> Manage Homes</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a  href="userdetails.php">
                          <i class="fa fa-users"></i>
                          <span>User Management</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a  href="feedbackdetails.php">
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
                          <span>Settings</span>
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
                <h2><i class="fa fa-home fa-lg"></i>House Manager</h2>
              </div><hr>
              <a class="btn btn-success" href="homeform.php">Add House</a>
              <div class="custom-bar-chart">
                <div class="table-responsive">
                  <table class="table table-hover" id="dev-table">
                  <tr >
                    <th>Serial No.</th>
                    <th>Address</th>
                    <th>Rent</th>
                    <th>Floor</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  <?php while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) { ?>
                  <tr>
                    <td><?php echo ++$count; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['hrent']; ?></td>
                    <td><?php echo $row['hfloor']; ?></td>
                    <td><img src="<?php echo $row['himg']; ?>" height="80px" width="80px"></td>
                    <td>
                      <a class="btn btn-info btn-md " href="homeedit.php?eid=<?php echo $row['houseid']; ?>"> <i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger btn-md " href="homedetails.php?del=<?php echo $row['houseid']; ?>"> <i class="fa fa-trash-o"></i></a>
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
      <br><br><br><br>
      <!--main content end-->
 <?php
 require 'footer.php';
 ?>