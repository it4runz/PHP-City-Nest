<?php
require 'header.php';
require 'menu.php';
if (isset($_REQUEST['eid']))
   {
    $sql1="SELECT * FROM p_g_house WHERE 1 ='".$_REQUEST['hid']."' ";
    $result1=mysqli_query($conn,$sql1);
    $rows=mysqli_fetch_array($result1,MYSQLI_BOTH);
   }
if (isset($_REQUEST['save']))
  {
    //Normal field call
    $naid1=$_REQUEST['naid'];
    $address=$_REQUEST['address'];
    $floor=$_REQUEST['floor'];
    $rent=$_REQUEST['rent'];
    $details=$_REQUEST['details'];
    
    //Image field call use this code
    //$image1 variable stored image name
    //$move1 variable combine path and image name.
    //last function is stored image you define image path.
    $image1=$_FILES['img']['name'];
      $move1="upload/".$image1;
      move_uploaded_file($_FILES['img']['tmp_name'],$move1);
   
    if ($image1=='')
    {
    //insert query 
    $sql="UPDATE p_g_house SET hdesciption='$description',address='$address',hfloor='$floor',hrent='$rent' WHERE houseid='".$naid1."'";
    }else{
      $sql="UPDATE p_g_house SET hdesciption='$description',address='$address',hfloor='$floor',hrent='$rent',himg='$move1' WHERE houseid='".$naid1."'";
    }
    $result=mysqli_query($conn,$sql);
    //call another page use this script to re-locate the page.
  ?>
  <script type="text/javascript">window.location.href="homedetails.php"</script>
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
                  <h2><i class="fa fa-edit fa-lg"></i> Update House</h2>
              </div><hr>
              <div class="custom-bar-chart">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                  <fieldset>
                    <div class="form-group">
                      <input type="hidden" name="naid" value="<?php echo $rows['houseid']; ?>">
                      <div class="col-md-12">
                        <label class="col-md-2 control-label"> Address:
                        <span class="text-danger">*</span></label>
                        <div class="col-md-10">  
                          <textarea name="address" placeholder="Enter Address...." class="form-control" required rows="3"><?php echo $rows['address']; ?></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-12">
                        <label class="col-md-2 control-label"> Floor:
                        <span class="text-danger">*</span></label>
                        <div class="col-md-4">  
                          <input type="text" name="floor" placeholder="Enter Floor...." class="form-control" required value="<?php echo $rows['hfloor']; ?>">
                        </div>
                        <label class="col-md-2 control-label"> Rent:
                        <span class="text-danger">*</span></label>
                        <div class="col-md-4">  
                          <input type="text" name="rent" placeholder="Enter Rent...." class="form-control" required value="<?php echo $rows['hrent']; ?>">
                        </div>
                      </div>
                    </div>

                    
                    <div class="form-group">
                      <div class="col-md-12">
                          <label class="col-md-2 control-label"> Choose Image:</label>
                          <div class="col-md-10">  
                            <input type="file" name="img" class="form-control"><br>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <label class="col-md-2 control-label"> Details:
                        <span class="text-danger">*</span></label>
                        <div class="col-md-10">  
                          <textarea name="details" placeholder="Enter Details...." class="form-control" required rows="5"><?php echo $rows['hdesciption']; ?></textarea>
                        </div>
                      </div>
                    </div>
                      <div class="form-group">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                          <input type="submit" value="Update" name="save" class="btn btn-info btn-md">
                          <a href="homedetails.php"><input type="button" name="reset" value="Cancel" class="btn btn-default btn-md"></a>
                        </div>
                      </div>
                    </fieldset>
                  </form>
              </div>
              <!--custom chart end-->
            </div><!-- /row --> 
          </section>
      </section>
      <br>
      <!--main content start-->
      
<?php
 require 'footer.php';
 ?>