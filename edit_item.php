<?php
session_start();
if(isset($_SESSION["myid"]))
 $aa=0;
else
   header("Location: index.php");

mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");
$sql="select * from item";
$view=mysql_query($sql);
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
    
    <div align="center">
  <script>
function logout()
{
window.location.href="index.php";
}
</script>
</head>
<?php

mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");

$myid=$_GET['id'];
$sql="select * from item where `id`='".$myid."'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function Validate()
{
	var cname=document.getElementById('cname').value;
	var iname=document.getElementById('iname').value;
	var rate=document.getElementById('rate').value;
	var des=document.getElementById('des').value;
	var image=document.getElementById('image').value;
	if(cname==null || cname=="")
	{
		window.alert("please enter category name");
		 return false;
	}
 if(iname==null || iname=="")
	{
		window.alert("please enter item name");
		return false;
	}
if(rate==null || rate=="")
	{
	window.alert("please enter rate");
	return false
	}
if(des==null || des=="")
	{
	window.alert("please enter description");
	return false
	}
if(image==null || image=="")
	{
	window.alert("please insert image");
	return false
	}
	else
	{
 		return true;
	}
	
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" onSubmit="return Validate()" action="update_item.php" name="mm">
<table>
<tr><td>Category Name </td><td>
  <input type="text" name="cname"   id="cname" value="<?php echo $row['cname']; ?>"/>
  <p id="err"></p></td></tr>

<p>
 <input type="hidden" name="itemid"  id="itemid" value="<?php echo $_GET["id"]; ?>" />
</p>

<p>
 <tr><td> Item name</td><td>
  <input type="text" name="iname"   id="iname" value="<?php echo $row['iname']; ?>" />
  <p id="phone_null"> </p></td></tr>
</p>

<p>
 <tr><td>Rate</td><td>
  <input type="text" name="rate"  id="rate" value="<?php echo $row['rate']; ?>" /></td></tr>
  </p>

<p>
 <tr><td>Description</td><td>
  <input type="text" name="des"   id="des" value="<?php echo $row['des']; ?>"/></td></tr>
 </p>

<p>
 <tr><td>Image </td><td>
 <img src="<?php echo $row['image']; ?>" width="180" height="180"/><br />
 </td></tr>
</p>
</table>
<p>
<p>
<input type="submit" class="shopBtn" name="submit" value="UPDATE" onClick="return Validate()" />
</p>
</p>

</form>
</body>
</html>

