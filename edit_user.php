<?php
mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");
$sql="select * from tbl_buyer_reg";
$view=mysql_query($sql);
?>
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
					<a ><span class="icon-twitter"></span></a>
					<a ><span class="icon-facebook"></span></a>
					<a ><span class="icon-youtube"></span></a>
					<a ><span class="icon-tumblr"></span></a>
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
  <body>
  <?php

mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");

$myid=$_GET['id'];
$sql="select * from tbl_buyer_reg where `SI.no`=$myid";
$res=mysql_query($sql);

$row=mysql_fetch_array($res);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function Validate()
{
	var phone=document.getElementById('phone').value;
	var name=document.getElementById('name').value;
	var address=document.getElementById('address').value;
	if(name==null || name=="")
	{
		
		window.alert("please enter name");
		 return false;
	}
 if(phone==null || phone=="")
	{
		window.alert("please enter phone number");
		return false;
	}
if(address==null || address=="")
	{
	window.alert("please enter address");
	return false
	}

	else
	{
 		return true;
	}
	
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<form method="post" onSubmit="return Validate()" action="updateuserprofilebyadmin.php" name="mm">
<table>
<tr><td>
Name </td><td>
<input type="hidden" name="selectid" value="<?php echo $_GET["id"]; ?>"/>
  <input type="text" name="name"   id="name" value="<?php echo $row['name']; ?>"/>
  <p id="err"></p></td></tr>

<tr><td>  phone no: </td><td>
  <input type="text" name="phone"   id="phone" value="<?php echo $row['phone']; ?>" /></td></tr>
  <p id="phone_null"> </p>
<tr><td>Address </td><td>
  <input type="text" name="address"  id="address" value="<?php echo $row['address']; ?>" /></td></tr>
<tr><td>Street</td><td>
  <input type="text" name="street"   id="street" value="<?php echo $row['street']; ?>"/></td></tr>
 
<tr><td>
District</td><td>
<select name="district" id="district" value="<?php echo $row['district']; ?>">
  <option> kasaragod</option>
    <option> kannur</option>
    <option> kozhikkode</option>
    <option> Wayanad</option>
    <option> Malappuram</option>
    <option> Palakkad</option>
    <option> Thrissur</option>
    <option> Ernakulam</option>
    <option> Idukki</option>
    <option> kottayam</option>
    <option> Alappuzha</option>
    <option> Pathanamthitta</option>
    <option> Kollam</option>
    <option> Thiruvananthapuram</option>
</select></td></tr>

<tr><td>Pincode </td><td>
  <input type="text" name="pincode"  id="pincode" value="<?php echo $row['pincode']; ?>"/></td></tr>
<tr><td>Email</td><td>
  <input type="email" name="email"  id="email" value="<?php echo $row['email'];?>"/></td></tr>
</table>

<input type="submit" name="submit" value="UPDATE" onClick="return Validate()" />
</form>
</body>
</html>

