<html>
<head>
</head>
<body>
<?php
include "connect.php";
require "header.php";
$sql="SELECT * FROM applyforhome";
    $result=mysqli_query($conn,$sql);
    $c =0;


if(isset($_REQUEST['del123']))
{
    $delete_sql="DELETE FROM applyforhome  WHERE apid='".$_REQUEST['del123']."'";   
    $delete_result=mysqli_query($conn,$delete_sql); 
?>


<script type="text/javascript">
    window.location.href="manageapplyhome.php";
</script>

<?php
}

?>


  <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.png" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Dhyey pandya</h5>
                    
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
                      <a  href="userdetails.php">
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
                      <a class="active" href="manageapplyhome.php">
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
                  <li class="sub-menu" style="background-color: black;color:white;padding: 10px;">
                    <b>2018-2019 CITY Nest Admin pannel.  Design By:<i style="color:yellow;"> Dhyey Pandya</i> </b>
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
                <h2><i class="fa fa-home fa-lg"></i> Manage Apply Home</h2>
              </div><hr>
              <div class="custom-bar-chart">
                <div class="table-responsive">


                                <table class="table table-bordered table-hover">
                                     <tr>
                    <th>Serial No.</th>
                    <th>Home Address</th>
                    <th>Rent </th>
                    <th>Name</th>
                    <th>Phone No.</th>
                    <th>Email</th>
                    <th>Your Address</th>
                    <th>Apply Date</th>
                  </tr>
                  <?php while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){ 
                    $sql1="SELECT * FROM p_g_house WHERE houseid='".$row['pgid']."'";
                    $result1=mysqli_query($conn,$sql1);
                    $row1 = mysqli_fetch_array($result1,MYSQLI_BOTH);
                    ?>
                  <tr>
                    <td><?php echo ++$c; ?></td>
                    <td><?php echo $row1['address'] ?></td>
                    <td><?php echo $row1['hrent'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['mobile'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['appdate'] ?></td>
                  </tr>
                  <?php } ?> 
</table> </div> 
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

</body></html>              