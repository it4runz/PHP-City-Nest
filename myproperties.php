<?php require "header.php";
	  require "menu.php";	
    
    $sql="SELECT * FROM applyforhome WHERE uid='".$_SESSION['login']."'";
    $result=mysqli_query($conn,$sql);
    $c =0;

    
   
?>
<!-- Inner Banner ________________________________ -->
    
    <section id="inner_banner">
      <div class="overlay">
        <div class="container">
          <div class="title">
            <h2>My Apply Propeties</h2>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><i class="fa fa-angle-double-right"></i></li>
              <li>My Apply Propeties</li>
            </ul>
          </div> <!-- End .title -->
        </div> <!-- End .container -->
      </div> <!-- End .overlay -->
    </section> <!-- End .inner_banner -->
<div class="contact_information container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="leave_reply send_message">
              <div class="table-responsive">
                <table class="table table-hover table-bordered">
                  <tr>
                    <th>Serial No.</th>
                    <th>Home Address</th>
                    <th>Rent </th>
                    <th>Name</th>
                    <th>Phone No.</th>
                    <th>Email</th>
                    <th>Your Address</th>
                    <th>Apply Date</th>
                  </tr>
                  <?php while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){ 
                    $sql1="SELECT * FROM p_g_house WHERE houseid='".$row['pgid']."'";
                    $result1=mysqli_query($conn,$sql1);
                    $row1 = mysqli_fetch_array($result1,MYSQLI_BOTH);
                    ?>
                  <tr>
                    <td><?php echo ++$c; ?></td>
                    <td><?php echo $row1['address'] ?></td>
                    <td><?php echo $row1['hrent'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['mobile'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['appdate'] ?></td>
                  </tr>
                  <?php } ?>
                </table>
              </div>
          </div> <!-- End of .contact_information -->
        </div>
      </div> <!-- End of .row -->
</div>
<br><br>
<?php require"footer.php" ?>