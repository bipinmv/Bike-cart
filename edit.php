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
</head>
<?php

mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");

$myid=$_GET['id'];
$sql="select * from tbl_buyer_reg where `SI.no`='".$myid."'";
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
	var street=document.getElementById('street').value;
	var pincode=document.getElementById('pincode').value;
	var email=document.getElementById('email').value;
	var pass=document.getElementById('pass').value;
	var pass1=document.getElementById('pass1').value;
	var address=document.getElementById('address').value;
	var username=document.getElementById('username').value;
	if(name==null || name=="")
	{
		window.alert("Please enter your name");
		 return false;
	}
 if(phone==null || phone=="" )
	{
		window.alert("Please enter your phone number");
		return false;
	}
if(phone.length!=10)
	{
	window.alert("Please enter 10 digit phone number ");
	return false;
	}

if(address==null || address=="")
	{
	window.alert("Please enter your address");
	return false
	}
if(street==null || street=="")
	{
		window.alert("Please enter your street name");
		 return false;
	}
if(pincode==null || pincode=="")
	{
		window.alert("Please enter your pincode");
		 return false;
	}
if(pincode.length!=6)
	{
	window.alert("Please enter your 6 digit pincode");
	return false;
	}
if(email==null || email=="")
	{
		window.alert("Please enter your email ID");
		 return false;
	}
if(username==null || username=="")
	{
	window.alert("Please enter username");
	return false
	}
if(pass==null || pass=="")
	{
	window.alert("Please enter password");
	return false
	}
if(pass1==null || pass1=="")
	{
	window.alert("Please retype your password");
	return false
	}
if(pass!=pass1)
	{
	window.alert("Password not matching");
	return false;
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

<form method="post" onSubmit="return Validate()" action="updateprofile.php" name="mm">
<table>
<tr><td>Name </td><td>
<input type="hidden" name="selectid" value="<?php echo $_GET['id'];?>"/>
  <input type="text" name="name"  placeholder="name" id="name" value="<?php echo $row['name']; ?>"/>
  <p id="err"></p></td></tr>
<tr><td>
  phone no: </td><td>
  <input type="text" name="phone"  placeholder="phone" id="phone" value="<?php echo $row['phone']; ?>" />
  <p id="phone_null"> </p></td></tr>
<tr><td>Address </td><td>
  <input type="text" name="address" placeholder="address" id="address" value="<?php echo $row['address']; ?>" /></td></tr>
<tr><td>Street</td><td>
  <input type="text" name="street"  placeholder="street" id="street" value="<?php echo $row['street']; ?>"/>
 
</td></tr>

<tr><td>District</td><td>
<select name="district">
  <option> kannur</option>
  <option> kozhikkode</option>
  <option> kasargod</option>
</select></td></tr>

<tr><td>Pincode </td><td>
  <input type="text" name="pincode"  placeholder="Pincode" id="pincode" value="<?php echo $row['pincode']; ?>"/></td></tr>
<tr><td>Email</td><td>
  <input type="email" name="email"  placeholder="email" id="email" value="<?php echo $row['email'];?>"/></td></tr>

 <tr><td> Username </td><td>
  <input type="text" name="username" placeholder="Username" id="username" value="<?php echo $row['username']; ?>"/></td></tr>
<tr><td>Password </td><td>
  <input type="password" name="password" placeholder="Password" id="pass"value="<?php echo $row['password']; ?>" /></td></tr>
  <input type="hidden" name="myid" value="<?php echo $row['SI.no']; ?>"
</p>
<tr><td>
  Retype password </td><td>
  <input type="password" name="repassword" placeholder="Retype password"  id="pass1" value="<?php echo $row['password']; ?>"/></td></tr>
</table>
<input type="submit" name="submit" class="shopBtn" value="UPDATE" onClick="return Validate()" />
<a href="buyer_profile.php">Cancel</a>
</form>

</body>
</html>

