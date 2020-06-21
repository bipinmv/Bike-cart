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
			  <li class="active"><a href="index.php">Home	</a></li>
			 
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
<body>
<?php

mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");

$myid=$_GET['id'];
$sql="select * from `admin` where `id`=$myid";
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
	var pass=document.getElementById('pass').value;
	var pass1=document.getElementById('pass1').value;
	var address=document.getElementById('address').value;
	var username=document.getElementById('username').value;
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

if(username==null || username=="")
	{
	window.alert("please enter username");
	return false
	}
if(pass==null || pass=="")
	{
	window.alert("please enter password");
	return false
	}
if(pass1==null || pass1=="")
	{
	window.alert("please enter password");
	return false
	}
if(pass!=pass1)
	{
	window.alert("password not matching");
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
<form method="post" onSubmit="return Validate()" action="updateprofile_admin.php" name="mm">
<p>Name 
  <input type="text" name="name"   id="name" value="<?php echo $row['name']; ?>"/>
  <p id="err"></p>
</p>
<p>
  phone no: 
  <input type="text" name="phone"  id="phone" value="<?php echo $row['phone']; ?>" />
  <p id="phone_null"> </p>
</p>

<p>Email
  <input type="email" name="email"   id="email" value="<?php echo $row['email'];?>"/>
</p>
<p>
  Username 
  <input type="text" name="username"  id="username" value="<?php echo $row['username']; ?>"/>
</p>
<p>Password 
  <input type="password" name="password"  id="pass"value="<?php echo $row['password']; ?>" />
  <input type="hidden" name="myid" value="<?php echo $row['SI.no']; ?>"
</p>
<p>
  Retype password 
  <input type="password" name="repassword"   id="pass1" value="<?php echo $row['password']; ?>"/>
</p>
<input type="submit" name="submit" value="UPDATE" onClick="return Validate()" />
</form>
</body>
</html>

