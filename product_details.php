<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Bike cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a ><span class="icon-twitter"></span></a>
					<a ><span class="icon-facebook"></span></a>
					<a ><span class="icon-youtube"></span></a>
					<a ><span class="icon-tumblr"></span></a>
				</div>
				<a  href="userhomepage.php"> <span class="icon-home"></span> Home</a> 
                <a href="buyer_profile.php"><span class="icon-user"></span> My Account</a> 
				<a href="contact_afterlogin.php"><span class="icon-envelope"></span> Contact us</a>
				<a href="cart.php"><span class="icon-shopping-cart"></span> Cart </a>
               
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->

<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>BIKE CART</h1>
	</div>
	<div class="span4">
	</div>
	<div class="span4 alignR">
	<p>&nbsp;</p>
	</div>
</div>
</header>
<!-- 
Body Section 
-->
   
	<div class="row">

	<div class="span12">
    <ul class="breadcrumb">
    <li><a href="userhomepage.php">Home</a> <span class="divider">/</span></li>
    <li class="active">Preview</li>
    </ul>	
     <?php 
		  include('connection.php');
		  $myid=$_GET['id'];
		  $sql="select * from item where `id`=$myid";
		  $res=mysql_query($sql);
		  while($row=mysql_fetch_array($res))
		  {
		  ?>
	<div class="well well-small">
	<div class="row-fluid">
			<div class="span4">
			<div id="myCarousel" class="carousel slide cntr">
                <div class="carousel-inner">
                  <div class="item active">
                   <a > <img src="<?php echo $row[5]?>" style="width:100%"></a>
                  </div>
                </div>
                
            </div>
			</div>
			<div class="span7">
				<h3>Name of the Item</h3>
				<hr class="soft"/>
				
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					
				  </div>
				
				  <div class="control-group">
					<label class="control-label"><span>Brand Name</span></label>
					<div class="controls">
					 <?php echo $row[1]?>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label"><span>Rate</span></label>
					<div class="controls">
					   ₹<?php echo $row[3]?>
					</div>
				  </div>
				 
				  <p>
				   <?php echo' <a class="shopBtn" href="php files/SqlAddtoCart.php?productid='.$row[0].'&rate='.$row[3].'" ><span class="icon-plus"></span> Add to cart</a>'; ?>
				</form>
			</div>
			</div>
				<hr class="softn clr"/>


           
            <div id="myTabContent" class="tab-content tabWrapper">
            <div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table class="table table-striped">
				<tbody>
				<tr class="techSpecRow"><td class="techSpecTD1">Name:</td><td class="techSpecTD2"><?php echo $row[2]?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Brand:</td><td class="techSpecTD2"><?php echo $row[1]?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Description:</td><td class="techSpecTD2"><?php echo $row[4]?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Rate:</td><td class="techSpecTD2">₹<?php echo $row[3]?></td></tr>
				</tbody>
				</table>
				
	

			
					</div>
			</div>
            <?php
		
			}
?>	
			<hr class="soften"/>
			
				</div>
            </div>

</div>
</div>
</div> <!-- Body wrapper -->
<!-- 
Clients 
-->
<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Manufactures</span></h4>
	<hr class="soften"/>
	<div class="row">
		<div class="span2">
			<a ><img src="assets/images/mrf logo.jpeg"></a>		</div>
		<div class="span2">
			<a ><img src="assets/images/monster logo.jpeg"></a>		</div>
		<div class="span2">
			<a ><img src="assets/images/re logo.png"></a>		</div>
		<div class="span2">
			<a ><img src="assets/images/hero logo.png"></a>		</div>
        <div class="span2">
			<a ><img src="assets/images/yamaha logo.png"></a>		</div>
        <div class="span2">
			<a ><img src="assets/images/suzuki logo.png"></a>		</div>
	</div>
</section>

<!--
Footer
-->
<footer class="footer">

</footer>
</div>
<!-- /container -->

<div class="copyright">
<div class="container">
	<p class="pull-right">
		<a><img src="assets/img/maestro.png" alt="payment"></a>
		<a ><img src="assets/img/mc.png" alt="payment"></a>
		<a ><img src="assets/img/pp.png" alt="payment"></a>
		<a ><img src="assets/img/visa.png" alt="payment"></a>
		<a ><img src="assets/img/disc.png" alt="payment"></a>
	</p>
	<span>Copyright &copy; 2018<br> DESIGNED AND DEVELOPED BY BCA STUDENTS</span>
</div>
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>