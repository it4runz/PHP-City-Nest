<?php require "header.php";
	  require "menu.php";	
	  if (isset($_REQUEST['eid'])) {
	  	$sql="SELECT * FROM p_g_house WHERE houseid='".$_REQUEST['eid']."'";
		$result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_BOTH);
	  }
	  	
  
?>
<style type="text/css">
        	.cut-text { 
			  text-overflow: ellipsis;
			  overflow: hidden; 
			  width: 200px; 
			  height: 1.8em; 
			  white-space: nowrap;
			}
            .cut-text1 { 
              text-overflow: ellipsis;
              overflow: hidden; 
              width: 200px; 
              height: 1.8em; 
              white-space: nowrap;
            }
        </style>

		<section id="inner_banner">
			<div class="overlay">
				<div class="container">
					<div class="title">
						<h2>Full Details of Propeties</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><i class="fa fa-angle-double-right"></i></li>
							<li><a href="">Full Details of Propeties</a></li>
						</ul>
					</div> <!-- End .title -->
				</div> <!-- End .container -->
			</div> <!-- End .overlay -->
		</section> <!-- End .inner_banner -->

		<!-- End Inner Banner ____________________________ -->



		<!-- Blog Grid page content _____________________ -->

		<div class="post_wrapper container">
			<div class="blog_post_meta">
				<div class="img_holder">
					<img src="admin/<?php echo $row['himg']; ?>" alt="proimage" class="img-responsive">
				</div> <!-- End .img_holder -->
				<div class="post">
					<!-- inner_title__________ -->
					<div class="inner_title">
						<h5><?php echo $row['address']; ?></h5>
						<b class="pull-right">Rent Rs. <?php echo $row['hrent']; ?> /-</b>
					</div>
					<!-- End inner_title______ -->
						<br>
					
					<p align="justify"><?php echo $row['hdescription']; ?></p>
				</div> <!-- End .post --><br>
				<a class="btn btn-success pull-right" href="applyforhome.php?eid=<?php echo $row['houseid']; ?>">Aply Now</a><br><br>
				
			</div> <!-- End .blog_post_meta -->

<br><br>
		</div>

<?php require"footer.php" ?>