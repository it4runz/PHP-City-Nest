<?php require "header.php";
	  require "menu.php";	
  
  //check button is click or not using this function isset().
  if (isset($_REQUEST['save']))
  {
	$username=$_REQUEST['username'];
	$phone=$_REQUEST['phone'];
  	$email=$_REQUEST['email'];
  	$pass1=$_REQUEST['password'];

  	$sql="INSERT INTO user(uname, upwd, uemail, ucontact) VALUES ('".$username."','".$pass1."','".$email."','".$phone."')";
  	$res=mysqli_query($conn,$sql);
  	    
  	?>
	<script type="text/javascript">window.location.href="login.php"</script>
  	<?php
  }
?>
<!-- Inner Banner ________________________________ -->
    
    <section id="inner_banner">
      <div class="overlay">
        <div class="container">
          <div class="title">
            <h2>Signup Now</h2>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><i class="fa fa-angle-double-right"></i></li>
              <li>Signup Now</li>
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
                    <input type="text" name="username" placeholder="Name">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="phone" placeholder="Mobile No.">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="email" name="email" placeholder="Email Address">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="password" name="password" placeholder="password">
                  </div>
                </div>
                <button class="tran3s" type="submit" name="save">Signup</button>
                
                <br><br>
                <b>Have a account Then <a href="login.php">Login</a></b><br><br>
              </form>
          </div> <!-- End of .contact_information -->
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6"></div>
      </div> <!-- End of .row -->
</div>

<?php require"footer.php" ?>