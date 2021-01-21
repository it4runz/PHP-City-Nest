<?php require "header.php";
	  require "menu.php";	
    if (isset($_REQUEST['eid'])) {
      $sql="SELECT * FROM p_g_house WHERE houseid='".$_REQUEST['eid']."'";
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_BOTH);
    }
  //check button is click or not using this function isset().
  if (isset($_REQUEST['save']))
  {
    $id=$_REQUEST['id'];
	$username=$_REQUEST['username'];
	$phone=$_REQUEST['phone'];
  	$email=$_REQUEST['email'];
  	$address=$_REQUEST['address'];
    $date = date('Y-m-d');

    echo
  	$sql="INSERT INTO applyforhome(pgid, uid, name, mobile,email,address,appdate) VALUES ('".$id."','".$_SESSION['login']."','".$username."','".$phone."','".$email."','".$address."','".$date."')"; die();
  	$res=mysqli_query($conn,$sql);
  	    
  	?>
	<script type="text/javascript">window.location.href="myproperties.php"</script>
  	<?php
  }
?>
<!-- Inner Banner ________________________________ -->
    
    <section id="inner_banner">
      <div class="overlay">
        <div class="container">
          <div class="title">
            <h2>Apply Now</h2>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><i class="fa fa-angle-double-right"></i></li>
              <li>Apply Now</li>
            </ul>
          </div> <!-- End .title -->
        </div> <!-- End .container -->
      </div> <!-- End .overlay -->
    </section> <!-- End .inner_banner -->
<div class="contact_information container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="leave_reply send_message">
              <form class="form-validation" method="post">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="hidden" name="id" placeholder="Name" value="<?php echo $row['houseid']; ?>">
                    <input type="text" name="username" placeholder="Name">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="phone" placeholder="Mobile No.">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="email" name="email" placeholder="Email Address">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <textarea name="address" placeholder="Address" rows="4"></textarea>
                  </div>
                </div>
                <button class="tran3s" type="submit" name="save">Apply Now</button>
                </b><br><br>
              </form>
          </div> <!-- End of .contact_information -->
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6"></div>
      </div> <!-- End of .row -->
</div>

<?php require"footer.php" ?>
