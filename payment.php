<?php
session_start();
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
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				<a href="userhomepage.php"> <span class="icon-home"></span> Home</a>
                <a href="buyer_profile.php"><span class="icon-user"></span> My Account</a>
		        <a href="contact_afterlogin.php"><span class="icon-envelope"></span> Contact us</a>
				<a class="active" href="cart.php"><span class="icon-shopping-cart"></span> Cart</a>
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
	<h1>BIKE CART  </h1>
	</div>
	
	<div class="span4 alignR">
	<p>&nbsp;</p>
	</div>
</div>
</header>

<!--
Navigation Bar Section 
-->

<!-- 
Body Section 
-->
	<div class="row">
	<div class="span12">
    <ul class="breadcrumb">
		<li><a href="userhomepage.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Payment</li>
    </ul>
    <?php
	
$myid=$_SESSION['myid'];
mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");
$sql="select * from delivery where `id`=$myid";
$view=mysql_query($sql);
$reg=mysql_fetch_array($view);
?>
<html> 
<head>
</head>
<body>


<table class="table table-striped">
				<tbody>
                
				<tr class="techSpecRow"><td class="techSpecTD1">Phone:</td><td class="techSpecTD2"><?php
echo $reg['2'];
?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Address:</td><td class="techSpecTD2"><?php
echo $reg['1'];
?></td></tr>

				<tr class="techSpecRow"><td class="techSpecTD1">Pincode:</td><td class="techSpecTD2"><?php
echo $reg['0'];
?></td></tr>
				</tbody>
				</table>
                <br/>
                
                <h3>
                Select Payment Method
                </h1>
                <form action="sample_payment.php" method="post">
               Cash On Delivery <input type="radio" name="a" value="c" />
               
               Net Banking <input type="radio" name="a" value="n" /><br/>
               <p>
              
               <p><input type="submit" name="submit" value="Submit" class="shopBtn" /></p>
               </p>
               </form>
         
	