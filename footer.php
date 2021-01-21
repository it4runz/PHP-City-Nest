<!-- Footer __________________________________________ -->
		<footer>

			<div class="main_footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="about_estate">
								<a href="index.html"><img width="100%" src="images/home/f-logo.png" alt="logo"></a>
								<p>As a property developers every project  we offer quality Properties and Services for our trustable customers. <span></span>
								If you are interested in real estate do not wait and BUY IT NOW!</p>
								
								<ul class="icon_footer">
									<li class="border_round tran3s" title="Facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="border_round tran3s" title="Twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="border_round tran3s" title="Google Plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="border_round tran3s" title="Linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li class="border_round tran3s" title="Vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
								</ul> <!-- End .icon_header -->

							</div> <!-- End .about_estate -->
						</div>

						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="useful_link">
								<div class="footer_title">
									<h3>Usefull Links</h3>
								</div>
								<ul>
									<li><a href="index.html" class="tran3s"><i class="fa fa-angle-right"></i> Home</a></li>
									<?php if($_SESSION['login']!=''){ ?>
									<li><a href="feedback.php" class="tran3s"><i class="fa fa-angle-right"></i> Feedback</a></li>
									<li><a href="viewproperties.php" class="tran3s"><i class="fa fa-angle-right"></i> Properties</a></li>
									<li><a href="myproperties.php" class="tran3s"><i class="fa fa-angle-right"></i>My Properties</a></li>
									<li><a href="profile.php?aid=<?php echo $_SESSION['login']; ?>" class="tran3s"><i class="fa fa-angle-right"></i> Profile</a></li>
									<li><a href="logout.php" class="tran3s"><i class="fa fa-angle-right"></i> Logout</a></li>
									<?php } else{ ?>
									<li><a href="login.php" class="tran3s"><i class="fa fa-angle-right"></i> Login</a></li>
									<li><a href="signup.php" class="tran3s"><i class="fa fa-angle-right"></i> Signup</a></li>
									<?php } ?>
								</ul>
							</div> <!-- End .useful_link -->
						</div>

						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="contact_info">
								<div class="footer_title">
									<h3>Contact Info</h3>
								</div>

								<ul>
									<li> Address: 32 sun mill co. opp. housing soc. Subhanpura, Vadodara.</li>
									<li><a href="" class="tran3s">Phone: +91 8899765432</a></li>
									<li><a href="" class="tran3s">Email: Shah_keya@pghouse.com</a></li>
									<li>Monday - Sunday 9.00 - 18.00 <br>
										Saturday - Sunday Holiday</li>
								</ul>

							</div> <!-- End .contact_info -->
						</div>
					</div> <!-- End .row -->
				</div> <!-- End .container -->
			</div> <!-- End .main_footer -->

			<div class="bottom_footer">
				<div class="container">
					<div class="text">
						<p>Copyright &copy; 2018-2019 CITY NEST all rights reserved.  Developed by | <a href="" class="tran3s" target="_blank">Shah Keya and Soni Kinjal</a> </p>
					</div> <!-- End .text -->

					<div class="footer_nav">
						
					</div> <!-- End .footer_nav -->
				</div>
			</div> <!-- End .bottom_footer -->
		</footer>

		<!-- End of Footer ______________________________________ -->

		





		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
		<!-- Bootstrap JS -->
		<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->
		<!-- Google map js -->
		<script src="http://maps.google.com/maps/api/js"></script> <!-- Gmap Helper -->
		<script src="js/gmap.js"></script>
		<!-- Time picker -->
		<script type="text/javascript" src="vendor/time-picker/jquery.timepicker.min.js"></script>
		
		<!-- ui js -->
		<script type="text/javascript" src="vendor/jquery-ui/jquery-ui.min.js"></script>
		<!-- Fancybox js -->
		<script type="text/javascript" src="vendor/fancy-box/jquery.fancybox.pack.js"></script>
		<!-- Mixitup -->
		<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- Vegas Slider -->
		<script type="text/javascript" src="vendor/vegas/vegas.min.js"></script>
		<!-- Language Stitcher -->
		<script type="text/javascript" src="vendor/language-switcher/jquery.polyglot.language.switcher.js"></script>
		<!-- revolution -->
		<script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.actions.min.js"></script>


		<!-- appear js -->
		<script src="vendor/jquery.appear.js"></script>
		<!-- count to -->
		<script src="vendor/jquery.countTo.js"></script>
		<!-- Custom-scrollbar -->
		<script src="vendor/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Main js -->
		<script type="text/javascript" src="js/map-script.js"></script>

		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>
		