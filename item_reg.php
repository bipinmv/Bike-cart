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
            <li > <a href="logout.php">Logout	</a>
			 
            </li>
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
<script type="application/javascript">
function validate()
{
	var cname=document.getElementById('cname').value;
	var iname=document.getElementById('iname').value;
	var rate=document.getElementById('rate').value;
	var des=document.getElementById('des').value;
	var image=document.getElementById('image').value;
	if(cname=="" )
	{
		window.alert("Please enter Category name");
		return false;
	}
	if(iname=="" )
	{
		window.alert("Please enter Item name");
		return false;
	}
	if(rate=="" )
	{
		window.alert("Please enter rate");
		return false;
	}
	if(des=="" )
	{
		window.alert("Please enter description");
		return false;
	}
	
	
	else
	{
		return true;
	}
}
</script>
</head>
<body>
<form id="form3" name="form3" method="post" enctype="multipart/form-data" action="sample_item.php" onSubmit="validate()">
<table>
<tr><td>
Category Name   </td><td>    
  <input type="text" name="cname" id="cname" >
<p id="err"></p></td></tr>

<tr><td> Item Name </td><td>
  <input type="text" name="iname" id="iname" >
<p id="err1"></p></td></tr>

<tr><td> Item Price </td><td>
  <input type="text" name="rate" id="rate" onKeyUp="checknumber()" >
<p id="err2"></p></td></tr>

<tr><td>Item Description </td><td>
  <input type="text" name="des" id="des" >
<p id="err3"></p></td></tr>

<tr><td>Upload Image </td><td>
  <input type="file" name="image" id="image" >
<p id="err4"></p></td></tr>
</p>
<p>
</table>
<input type="submit" class="shopBtn" onClick="validate()" value="Add Item" >
<a href="admin_page.php" > <p align="center"> Cancel </p> </a>
</p>
</p>
</form>
</body>
</html>
<script type="text/javascript">
function checknumber()
{
 var a=document.getElementById("rate").value;
 if(isNaN(a))
  document.getElementById("rate").value=a.slice(0, -1);
 //alert(a);
}
</script>