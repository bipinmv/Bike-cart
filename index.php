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
    <script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="CollapsiblePanel1" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="0">Tab</div>
  <div class="CollapsiblePanelContent">Content</div>
</div>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a><span class="icon-twitter"></span></a>
					<a><span class="icon-facebook"></span></a>
					<a><span class="icon-youtube"></span></a>
					<a><span class="icon-tumblr"></span></a>
				</div>
				<a class="active" href="index.php"> <span class="icon-home"></span> Home</a> 
				<a href="reglog.php"><span class="icon-edit"></span> Free Register </a> 
				<a href="contact.php"><span class="icon-envelope"></span> Contact us</a>
                <a href="adminpanel.php"> Admin panel </a>
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
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class="active"><a href="index.php">Home	</a></li>
			 
		    </ul>
			<form action="search.php" class="navbar-search pull-left">
			  <input type="text"  name="query" placeholder="Search products" class="search-query span2">
              <input type="submit" value="Search" />
              
			</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href=""><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form  method="post" action="logincheck.php" onSubmit="return validatelogin()" class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" name="username" id="user" placeholder="UserName">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" name="password" id="Pass" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<input type="submit" value="Sign in" class="shopBtn btn-block" onClick="return validatelogin()"/>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!-- 
Body Section 
-->
	<div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
		<li><a href="product.php?key=Accessories"><span class="icon-chevron-right"></span>Accessories</a></li>
        <li><a href="product.php?key=Engine Parts"><span class="icon-chevron-right"></span>Engine Parts</a></li>
		<li><a href="product.php?key=Suspension parts"><span class="icon-chevron-right"></span>Suspension parts</a></li>
		<li><a href="product.php?key=Electrical & Lightings"><span class="icon-chevron-right"></span>Electrical & Lightings</a></li>
		<li><a href="product.php?key=Filter"><span class="icon-chevron-right"></span>Filters</a></li>
		<li><a href="product.php?key=Fluids & Lubrications"><span class="icon-chevron-right"></span>Fluids & Lubrications</a></li>
		<li><a href="product.php?key=Miscellaneous Parts"><span class="icon-chevron-right"></span>Miscellaneous Parts</a></li> 
</div>

			  <div class="well well-small alert alert-warning cntr">
				  <h2>50% Discount</h2>
				  <p> 
					 only valid for online order. <br><br>
				  </p>
			  </div>
			  <div class="well well-small" ><img src="assets/img/paypal.jpg" ></div>
			
			<a class="shopBtn btn-block" >Upcoming products <br><small></small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
              <a class="zoomTool"  title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/images/sur-51156-allure-auto-original-imaekhw9chuyeh2g.jpeg" >
				<div class="caption">
				  <h4><a class="defaultBtn" >VIEW</a> <span class="pull-right"> ₹220.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool"  title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/images/royal-enfield-logo-with-multi-colored-led-autopowerz-original-imaeywv4dzvhb3qu.jpeg" >
				<div class="caption">
				  <h4><a class="defaultBtn" >VIEW</a> <span class="pull-right"> ₹449.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool"  title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/images/images1.jpg" >
				<div class="caption">
				  <h4><a class="defaultBtn">VIEW</a> <span class="pull-right"> ₹120.00</span></h4>
				</div>
			  </div>
			</li>
            <li style="border:0"> &nbsp;</li>
			<li>
      
			  <div class="thumbnail">
				<a class="zoomTool"  title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/images/bullet-seat-cover-classic-350cc-shine-tech-original-imaepw8fatpj8jta.jpeg" >
				<div class="caption">
				  <h4><a class="defaultBtn" >VIEW</a> <span class="pull-right"> ₹400.00</span></h4>
				</div>
			  </div>
			</li><li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool"  title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/images/index1.jpg" >
				<div class="caption">
				  <h4><a class="defaultBtn" >VIEW</a> <span class="pull-right"> ₹920.00</span></h4>
				</div>
			  </div>
			</li><li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool"  title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/images/images3.jpg" >
				<div class="caption">
				  <h4><a class="defaultBtn" >VIEW</a> <span class="pull-right"> ₹450.00</span></h4>
				</div>
			  </div>
			</li><li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool"  title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/images/images2.jpg" >
				<div class="caption">
				  <h4><a class="defaultBtn" >VIEW</a> <span class="pull-right"> ₹2200.00</span></h4>
				</div>
			  </div>
			</li><li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool"  title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/images/index.jpg" >
				<div class="caption">
				  <h4><a class="defaultBtn" >VIEW</a> <span class="pull-right"> ₹900.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
	<div class="span9">
	<div class="well np">
		<div id="myCarousel" class="carousel slide homCar">
            <div class="carousel-inner">
			  <div class="item">
                <img style="width:100%" src="assets\images\Parts.jpg" alt="ktm">
                <div class="carousel-caption">
                     
                </div>
              </div>
			  <div class="item">
                <img style="width:100%" src="assets\images\Ducati.jpg" alt="Accessori">
                <div class="carousel-caption">
                     
                </div>
              </div>
			  <div class="item active">
                <img style="width:100%" src="assets\images\ktm.png" alt="Parts">
                <div class="carousel-caption">
                      
        
                </div>
              </div>
              <div class="item">
                <img style="width:100%" src="assets\images\Accessori.jpg" alt="Ducati">
                <div class="carousel-caption">
                     
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>

	<!--
	Featured Products
	-->
		<div class="well well-small">
		  <h3> Featured Products  </h3>
		  <hr class="soften"/>
		  <div class="row-fluid">
		  <ul class="thumbnails">
          <?php 
		  include('connection.php');
		  $sql="select * from item";
		  $res=mysql_query($sql);
		  while($row=mysql_fetch_array($res))
		  {
		  ?>
			<li class="span4">
			  <div class="thumbnail">
				<a  href="product_details.php?id=<?php echo $row[0];?>" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a><a  href="product_details.php?id=<?php echo $row[0];?>" ><img src="<?php echo $row[5];?>" alt=""></a></a>
				<div class="caption">
			        <p><?php echo $row[2];?> </p>
                    <p><?php echo $row[1];?></p>
				  <h5>
                  
					  <a class="shopBtn" href="reglog.php" title="Add to cart"><span class="icon-plus"></span> Add to cart</a>
					  <span class="pull-right"> ₹<?php echo $row[3];?>.00</span>
				  </h5>
				</div>
			  </div>
			</li>
            <?php } ?>
		  </ul>	
	</div>
	</div>
    </div>
	<div class="well well-small">
	<a  href=""> </a>
	.
	</div>
	<hr>
	
	</div>
	</div>
<!-- 
Clients 
-->
<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Manufactures</span></h4>
	<hr class="soften"/>
	<div class="row">
		<div class="span2">
			<a ><img src="assets/images/mrf logo.jpeg"></a>
		</div>
		<div class="span2">
			<a ><img src="assets/images/monster logo.jpeg"></a>
		</div>
		<div class="span2">
			<a ><img src="assets/images/ceat logo.png"></a>
		</div>
		<div class="span2">
			<a ><img src="assets/images/re logo.png"></a>
		</div>
		<div class="span2">
			<a ><img src="assets/images/hero logo.png"></a>
		</div>
		<div class="span2">
			<a ><img src="assets/images/honda logo.png"></a>
		</div>
        <div class="span2">
			<a ><img src="assets/images/yamaha logo.png"></a>
		</div>
        <div class="span2">
			<a ><img src="assets/images/suzuki logo.png"></a>
		</div>
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
    <script type="text/javascript">
<!--
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
//-->
    </script>
</body>
</html>
<script type="text/javascript">
function validatelogin()
{

	var user=document.getElementById('user').value;
	
	var pass=document.getElementById('Pass').value;
 		if(user==null || user=="")
	{
		window.alert("Please enter Username");
		 return false;
	}
	if(pass==null || pass=="")
	{
		window.alert("Please enter Password");
		return false;
	}
 
	else
	{
 		return true;
	}
}

</script>
