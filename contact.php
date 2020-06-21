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
				<a href="index.php"> <span class="icon-home"></span> Home</a> 
				<a href="reglog.php"><span class="icon-edit"></span> Free Register </a> 
				<a class="active" href="contact.php"><span class="icon-envelope"></span> Contact us</a>
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
		
		<div class="span4">
		<h4>Contact Us</h4>
		<form  method="post"  onSubmit="return check()" class="form-horizontal" >
        <fieldset>
          <div class="control-group">
           
              <input type="text" placeholder="name" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="email" class="input-xlarge"/>
           
          </div>
		  
          <div class="control-group">
              <textarea rows="3" id="textarea" placeholder="subject" class="input-xlarge"></textarea>
           
          </div>

            <input type="submit" name="submit" value="Submit" class="shopBtn" onClick="return check()"/>

        </fieldset>
      </form>
		</div>
	</div>

	
</div>
<script type="text/javascript">
function check()
{
alert("you need to Login")
window.location.href='reglog.php';
}

</script>

