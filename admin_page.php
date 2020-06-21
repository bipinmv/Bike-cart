<?php
session_start();
if(!isset($_SESSION['myid'])){
header("Location: index.php");}
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
				
				
                <a class="active" href="admin_page.php"> Admin panel </a>
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
			  <li class="active"><a href="">Home	</a></li>
			 
		    </ul>
			
			</form>
			<ul class="nav pull-right">
            <li > <a href="logout.php" class="icon-signout">Logout	</a>            </li>
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

<body>
<h1> Admin panel </h1>
<center>

<a href="admin_profile.php"> <p><span class="icon-user"></span> My Account </p></a> 
</center>

<br>
<center>
<a href="view.php" > <p> MANAGE USERS  </p> </a>
</center>
<br>
<center>
<a href="viewadmin.php?id=<?php echo $reg['SI.no'];?>" > <p class="icon-eye-open"> VIEW ALL ADMINS  </p> 
</a>
</center>
<br>
<p> </p>
<center>
<a href="item_reg.php" > <p class="icon-plus-sign-alt"> ADD ITEM  </p> 
</a>
</center>
<br>
<p> </p>
<center>
<a href="manage_item.php" > <p> MANAGE ITEM  </p> </a>
</center>
<br>
<center>
<a class="icon-inbox" href="feedback.php" >  VIEW FEEDBACK </a>
</center>
<p>&nbsp;</p>
<p>&nbsp;</p>


</a> </center> </p>
</body>
</html>