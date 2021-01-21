<?php require "connect.php";
  
  //check button is click or not using this function isset().
  if (isset($_REQUEST['save']))
  {
	
  	$uname=$_REQUEST['uname'];
  	$pass1=$_REQUEST['pass'];

  	$sql="SELECT * FROM admin_log WHERE username='".$uname."' and password='".$pass1."'";
  	$res=mysqli_query($conn,$sql);
  	$row=mysqli_num_rows($res); 

  	if ($row==1) 
  	{
      $row = mysqli_fetch_array($res,MYSQLI_BOTH);
      $id  = $row['aid'];
		//session variable created and stored in the value.
  		$_SESSION['adlogin']=$id;
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
<!DOCTYPE html>
<html>	
<head>
<title>CITY Nest</title>
<link href="css/style.css" rel='stylesheet' type='text/css'/>
</head>
<body>
<!--User-Login-->
<h1><b>WELCOME</b></h1>
<div class="avtar">
	<img src="images/CITYNEST7.png" />
</div>
	<div class="login-form">
		<p><b>ADMIN</b></p>
			<form method="POST">
				<div class="form-text">
				<input type="text" class="text" name="uname" placeholder="USERNAME">
				<input type="password" name="pass" placeholder="PASSWORD">
				</div>
				<input type="submit" name="save" value="GO" >
			</form>
	</div>
<!--/User-Login-->
<!--start-copyright-->
<div class="copy-right">
</div>
<!--//end-copyright-->	
</body>
</html>