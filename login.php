<?php 
  require 'header.php'; 
  require 'menu.php'; 
  //check button is click or not using this function isset().
  if (isset($_REQUEST['save']))
  {
	
  	$email=$_REQUEST['email'];
  	$pass1=$_REQUEST['password'];

  	$sql="SELECT * FROM user WHERE uemail='".$email."' and upwd='".$pass1."'";
  	$res=mysqli_query($conn,$sql);
  	$row=mysqli_num_rows($res); 

  	if ($row==1) 
  	{
      $row1 = mysqli_fetch_array($res,MYSQLI_BOTH);
      $id  = $row1['uid'];
    //session variable created and stored in the value.
      $_SESSION['login']=$id;
  	?>
	<script type="text/javascript">window.location.href="index.php"</script>
  	<?php        
      	}
  	else
  	{ 
	?>
  		<div style="color:white;padding-top:2px;padding-bottom:2px;background-color:red;text-align:center;font-size:20px;">
		Username and Password Invalid... try again...!!!
		</div>
	<?php	
	}
  }
?>
<!-- Inner Banner ________________________________ -->
    
    <section id="inner_banner">
      <div class="overlay">
        <div class="container">
          <div class="title">
            <h2>Login Now</h2>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><i class="fa fa-angle-double-right"></i></li>
              <li>Login Now</li>
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
                    <input type="email" name="email" placeholder="Email Address">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="password" name="password" placeholder="password">
                  </div>
                </div>
                <button class="tran3s" type="submit" name="save">Login</button><br>
                <a href="forgotpwd.php" class="mycss"><h4>Forgot password?</h4></a>
                <br><br>
                <b>Not a member Then <a href="signup.php">SignUp</a></b><br><br>
              </form>
          </div> <!-- End of .contact_information -->
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6"></div>
      </div> <!-- End of .row -->
</div>

<?php  require "footer.php"; ?>