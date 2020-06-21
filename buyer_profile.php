<?php
session_start();
if(isset($_SESSION['myid']))
{ $aa=0;}
else
  { header("Location:index.php");}
?>
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
					<a><span class="icon-twitter"></span></a>
					<a><span class="icon-facebook"></span></a>
					<a><span class="icon-youtube"></span></a>
					<a><span class="icon-tumblr"></span></a>
				</div>
				<a  href="userhomepage.php"> <span class="icon-home"></span> Home</a> 
                <a class="active" href="buyer_profile.php"><span class="icon-user"></span> My Account</a>  
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
			  <li class="active"><a href="userhomepage.php">Home	</a></li>
			 
		    </ul>
			
		  </div>
		</div>
	  </div>
	</div>
    <script>
function logout()
{
window.location.href="index.php";
}
</script>
</head>

<?php
$myid=$_SESSION['myid'];
mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");
$sql="select * from tbl_buyer_reg where `SI.no`=$myid";
$view=mysql_query($sql);
$reg=mysql_fetch_array($view);
?>
<html> 
<head>
</head>
<body>


<table class="table table-striped">
				<tbody>
				<tr class="techSpecRow"><td class="techSpecTD1">Name:</td><td class="techSpecTD2"><?php
echo $reg['1'];
?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Phone:</td><td class="techSpecTD2"><?php
echo $reg['2'];
?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Address:</td><td class="techSpecTD2"><?php
echo $reg['3'];
?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">street:</td><td class="techSpecTD2"><?php
echo $reg['4'];
?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">District:</td><td class="techSpecTD2"><?php
echo $reg['5'];
?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Pincode:</td><td class="techSpecTD2"><?php
echo $reg['6'];
?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Email ID:</td><td class="techSpecTD2"><?php
echo $reg['7'];
?></td></tr>
				</tbody>
				</table>


<p>&nbsp;</p>
<p>&nbsp;</p>
 <div align="center"><a class="icon-edit" href="edit.php?id=<?php echo $reg['SI.no'];?>" > Edit Profile  <br>
   <small></small></a> 
 </div>
<p> </p>
 <p> </p>
 <p> </p>
 <div align="right" class="justify">
    <div align="center"><a class="icon-warning-sign" href="del_profile.php?id=<?php echo $reg['SI.no'];?>" >Delete Account</a> </div>
</div>
 <p> </p>
 <p> </p>
 <p> </p>
  <center>
  <a class="shopBtn" href="logout.php">Logout	</a>            
</center>
<p> </p>
 <p> </p>
 <p> </p>
</body>
</html>
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
