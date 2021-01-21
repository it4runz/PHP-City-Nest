<?php require "header.php";
	  require "menu.php";	
  if (isset($_REQUEST['aid']) && !empty($_REQUEST['aid']) && $_REQUEST['aid']!=0)
	{
			$sql1="SELECT * FROM user WHERE uid='".$_REQUEST['aid']."'";
			$result1=mysqli_query($conn,$sql1);
			$rows=mysqli_fetch_array($result1,MYSQLI_BOTH);
	}
  //check button is click or not using this function isset().
  if (isset($_REQUEST['save']))
  {
	$aid=$_REQUEST['aid'];
	$username=$_REQUEST['username'];
	$phone=$_REQUEST['phone'];
  	$email=$_REQUEST['email'];
  	$pass1=$_REQUEST['password'];

  	$sql="UPDATE user SET uname='$username', upwd='$pass1', uemail='$email', ucontact='$phone' WHERE uid='".$aid."'";
  	$res=mysqli_query($conn,$sql);
  	    
  	?>
	<script type="text/javascript">
    alert("Profile is Update.");
    window.location.href="index.php";</script>
  	<?php
  }
?>
<!-- Inner Banner ________________________________ -->
    
    <section id="inner_banner">
      <div class="overlay">
        <div class="container">
          <div class="title">
            <h2>Update Profile</h2>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><i class="fa fa-angle-double-right"></i></li>
              <li>Update Profile</li>
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
                    <input type="text" name="username" placeholder="Name" value="<?php echo $rows['uname']; ?>">
                    <input type="hidden" class="user" name="aid" value="<?php echo $rows['uid']; ?>" placeholder="id">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="phone" placeholder="Mobile No." value="<?php echo $rows['ucontact']; ?>">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="email" name="email" placeholder="Email Address" value="<?php echo $rows['uemail']; ?>">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input id="myInput" type="password" name="password" placeholder="password" value="<?php echo $rows['upwd']; ?>">
                  </div>
                  
                </div>

                <button class="tran3s" type="submit" name="save">Update</button>
               
              </form>
          </div> <!-- End of .contact_information -->
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
            <input type="radio" id="sho" name="ch" onclick="myFunction()" >
            <label for="sho">Show Password</label>
          </div>
                  </b><br><br>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6"></div>
      </div> <!-- End of .row -->
</div>
<script type="text/javascript">
    	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
    </script>
<?php require"footer.php" ?>