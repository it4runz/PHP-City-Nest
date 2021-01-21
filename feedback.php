<?php require "header.php";
	  require "menu.php";	
  
  //check button is click or not using this function isset().
  if (isset($_REQUEST['save']))
  {
	$date=date("Y-m-d");
  	$message=$_REQUEST['message'];

  	$sql="INSERT INTO feedback(uid, fdt, fdetail) VALUES ('".$_SESSION['login']."','".$date."','".$message."')";
  	$res=mysqli_query($conn,$sql);
  	    
  	?>
	<script type="text/javascript">
	alert("Feedback is send.");
	window.location.href="index.php";</script>
  	<?php
  }
?>
<!-- Inner Banner ________________________________ -->
    
    <section id="inner_banner">
      <div class="overlay">
        <div class="container">
          <div class="title">
            <h2>Feedback</h2>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><i class="fa fa-angle-double-right"></i></li>
              <li>Feedback</li>
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
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <textarea name="message" rows="4" placeholder="Write Message"></textarea>
                  </div>
                </div>
                <button class="tran3s" type="submit" name="save">Send</button>
                
                <br></b><br><br>
              </form>
          </div> <!-- End of .contact_information -->
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6"></div>
      </div> <!-- End of .row -->
</div>

<?php require"footer.php" ?>