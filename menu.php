<nav class="navbar navbar-default float_right">
				   <!-- Brand and toggle get grouped for better mobile display -->
				   <div class="navbar-header">
				     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				       <span class="sr-only">Toggle navigation</span>
				       <span class="icon-bar"></span>
				       <span class="icon-bar"></span>
				       <span class="icon-bar"></span>
				     </button>
				   </div>
				   <!-- Collect the nav links, forms, and other content for toggling -->
				   <div class="collapse navbar-collapse mCustomScrollbar" id="navbar-collapse-1" data-mcs-theme="dark-thin">
				     <ul class="nav navbar-nav">
				       
				       <li><a href="index.php">Home</a></li>
				       <?php if($_SESSION['login']!=''){ ?>
				       <li><a href="feedback.php">Feedback</a></li>
				       <li><a href="viewproperties.php">Properties</a></li>
				       <li><a href="myproperties.php">My Properties</a></li>
				       <li><a href="profile.php?aid=<?php echo $_SESSION['login']; ?>">Profile</a></li>
				       <li><a href="logout.php">Logout</a></li>
				       <?php } else{ ?>
				       <li><a href="login.php">Login</a></li>
				       <li><a href="signup.php">Signup</a></li>
				       <?php } ?>
				     </ul>
				   </div><!-- /.navbar-collapse -->
				</nav>
				<div class="clear_fix"></div>
			</div> <!-- End of .conatiner -->
		</div>  <!-- End of #main_menu -->


        <!-- End of Main Menu _______________________________ -->
<!-- Call Us Anytime _____________________________ -->
        
		<div class="container">
			<div class="call_us">
				<p><span><i class="fa fa-phone"></i></span>Call Us Anytime [at]</p>
				<a href="">987-967-5678</a>
			</div>
		</div>

		<!-- End Call Us Anytime _________________________ -->