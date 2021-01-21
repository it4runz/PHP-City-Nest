<?php
require 'header.php';
require 'menu.php';
if (isset($_REQUEST['save']))
  {
    //Normal field call
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
   
    
    //insert query 
    $sql="INSERT INTO p_g_house (hdescription,address,hfloor,hrent,himg) VALUES ('".$details."','".$address."','".$floor."','".$rent."','".$move1."')";
    
    $result=mysqli_query($conn,$sql);
    //call another page use this script to re-locate the page.
  ?>
  <script type="text/javascript">window.location.href="homedetails.php"</script>
  <?php
  }
?> 
<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <div class="row mt">
              <!--CUSTOM CHART START -->
              <div class="border-head">
                  <h2><i class="fa fa-edit fa-lg"></i> Add House</h2>
              </div><hr>
              <div class="custom-bar-chart">
                <form class="form-horizontal"method="post" enctype="multipart/form-data">
                  <fieldset>
                    <div class="form-group">
                      <div class="col-md-12">
                        <label class="col-md-2 control-label"> Address:
                        <span class="text-danger">*</span></label>
                        <div class="col-md-10">  
                          <textarea name="address" placeholder="Enter Address...." class="form-control" required rows="3"></textarea>
                        </div>
                      </div>               
                    </div>
                                              
                    <div class="form-group">
                      <div class="col-md-12">
                        <label class="col-md-2 control-label"> Floor:
                        <span class="text-danger">*</span></label>
                        <div class="col-md-4">  
                        <input type="text" name="floor" placeholder="Enter Floor...." class="form-control" required>
                        </div>                                  
                        <label class="col-md-2 control-label"> Rent:
                        <span class="text-danger">*</span></label>
                        <div class="col-md-4">  
                        <input type="text" name="rent" placeholder="Enter Rent...." class="form-control" required>
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
                          <textarea name="details" placeholder="Enter Details...." class="form-control" required rows="5"></textarea>
                        </div>
                      </div>
                    </div>
                      <div class="form-group">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                          <input type="submit" value="Save" name="save" class="btn btn-warning btn-md">
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