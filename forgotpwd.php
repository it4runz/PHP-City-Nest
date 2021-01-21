<?php 
  require 'header.php'; 
  require 'menu.php'; 
  //check button is click or not using this function isset().
  if (isset($_REQUEST['save'])) {
        $email = $_REQUEST['email'];
        
        $sql   = "SELECT * FROM user WHERE uemail='".$email."' "; 
        $res1  = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res1);
        if($count !='') {
            include("PHPMailer-master/functions.php");
            $row     = mysqli_fetch_array($res1);
            $subject="Password recovered";
            $body = 'Respected Sir/Madam..<br><br> This email was send admin by CITY NEST in response to your request to recover password. <br> I am the Admin of the CITY NEST Site. Sir/Madam this is your password please enter this password and login our site. <br><br> Your current password is '.$row['upwd'];
            $to_email= $row['uemail'];
            $headers = "cryptocurrencytradingwg@gmail.com";
            $sentmail = sendmail($to_email, $headers, $subject, $body);
            if($sentmail) {?>
                <script type="text/javascript">
                    alert("Your Password Has Been Sent To Your Email Address.");           
                       window.location.href='login.php'; // the redirect goes here
                     
                </script>   
    <?php   } else {  ?>
                <script type="text/javascript">
                    alert("Cannot send password to your e-mail address.Problem with sending mail...");          
                       window.location.href='forgotpwd.php'; // the redirect goes here
                     
                </script>   
    <?php   }
        } else { ?>
                <script type="text/javascript">
                    alert("Mail is not Present..!Not found your email in our database");            
                       window.location.href='forgotpwd.php'; // the redirect goes here
                     
                </script>   
<?php   }
    }
?>
<!-- Inner Banner ________________________________ -->
    
    <section id="inner_banner">
      <div class="overlay">
        <div class="container">
          <div class="title">
            <h2>Forgot Password</h2>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><i class="fa fa-angle-double-right"></i></li>
              <li>Forgot Password</li>
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
                    <input type="email" name="email" placeholder="Register Email Address">
                  </div>
                </div>
                <button class="tran3s" type="submit" name="save">Send</button><br></b><br><br>
              </form>
          </div> <!-- End of .contact_information -->
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6"></div>
      </div> <!-- End of .row -->
</div>

<?php  require "footer.php"; ?>