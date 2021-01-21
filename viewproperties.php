<?php require "header.php";
	  require "menu.php";	
	  $sql="SELECT * FROM p_g_house";
$result=mysqli_query($conn,$sql);
  
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
						<h2>View Propeties</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><i class="fa fa-angle-double-right"></i></li>
							<li><a href="">View Propeties</a></li>
						</ul>
					</div> <!-- End .title -->
				</div> <!-- End .container -->
			</div> <!-- End .overlay -->
		</section> <!-- End .inner_banner -->

		<!-- End Inner Banner ____________________________ -->



		<!-- Blog Grid page content _____________________ -->

		<div class="blog_grid_view blog container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 post_wrapper">

					<div class="row">
						<?php while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) { ?>
						<!-- ________Single blog 1_______ -->
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="blog_single_grid">
								<div class="img_holder">
									<img src="admin/<?php echo $row['himg']; ?>" alt="images" class="img-responsive">
								</div> <!-- End .img_holder -->

								<div class="post">
									<span><i class="fa fa-picture-o"></i></span>
									<h5><a href="orderplace.php?eid=<?php echo $row['houseid'] ?>" class="cut-text"><?php echo $row['address']; ?></a></h5>
									<p>Rs. <?php echo $row['hrent']; ?> /- </p>
									<a href="orderplace.php?eid=<?php echo $row['houseid'] ?>" class="tran3s">Read More</a>
								</div> <!-- End .post -->
								
							</div> <!-- End .blog_single_grid -->
						</div>
						<?php } ?>
						
					</div> <!-- End .row -->

					

				</div> <!-- End .post_wrapper -->


				
			</div> <!-- End .row -->
		</div> <!-- End .blog_grid_view -->

<?php require"footer.php" ?>