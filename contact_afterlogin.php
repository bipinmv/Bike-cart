<?php
session_start();
if(isset($_SESSION["myid"]))
 $aa=0;
else
   header("Location: index.php");
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
					<a href=""><span class="icon-twitter"></span></a>
					<a href=""><span class="icon-facebook"></span></a>
					<a href=""><span class="icon-youtube"></span></a>
					<a href=""><span class="icon-tumblr"></span></a>
				</div>
				<a href="userhomepage.php"> <span class="icon-home"></span> Home</a> 
                <a href="buyer_profile.php"><span class="icon-user"></span> My Account</a> 
				<a class="active" href="contact_afterlogin.php"><span class="icon-envelope"></span> Contact us</a>
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

<!-- 
Body Section 
-->
	<hr class="soften">
	<div class="well well-small">
	<h1>Visit us</h1>
	<hr class="soften"/>	
	<div class="row-fluid">
		<div class="span8 relative">
		

		<div class="absoluteBlk">
		<div class="well wellsmall">
		<h4>Contact Details</h4>
		<h5>
			Pilathara co-operative college<br/>
			Paicheel , Narekkamvally(po)<br/><br/>
			 
			info@bikecart.com<br/>
			﻿Mob 9895051128<br/>
			web:bikecart.com
		</h5>
		</div>
		</div>
		</div>
		<?php
$myid=$_SESSION['myid'];
mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");
$sql="select * from tbl_buyer_reg where `SI.no`=$myid";
$view=mysql_query($sql);
$reg=mysql_fetch_array($view);
?>
<script type="text/javascript">
function Validatefeedback()
{
	var name=document.getElementById('name').value;
	var email=document.getElementById('phone').value;
	var feedback=document.getElementById('feedback').value;
 if(name==null || name=="")
	{
		window.alert("Please enter your name");
		 return false;
	}
 if(email==null || email=="")
	{
		window.alert("Please enter your email ID");
		return false;
	}
 if(feedback==null || feedback=="")
	{
		window.alert("Please enter your feedback");
		 return false;
	}
	else
	{
 		return true;
	}
}

</script>


		<div class="span4">
		<h4>Contact Us</h4>
        
		<form  method="post" onSubmit="return Validatefeedback()" action="sample_feedback.php" class="form-horizontal" >
        <fieldset>
          <div class="control-group">
           
              <input type="text" value="<?php echo $reg['1']; ?>" class="input-xlarge" name="name" id="name"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" value="<?php echo $reg['7']; ?>" class="input-xlarge" name="email" id="email"/>
           
          </div>
		  
          <div class="control-group">
              <textarea rows="3" placeholder="Subject" class="input-xlarge" name="subject" id="feedback"></textarea>
           
          </div>

            <input type="submit" name="submit" value="Submit" class="shopBtn" onClick="return Validatefeedback()"/>

        </fieldset>
      </form>
		</div>
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
