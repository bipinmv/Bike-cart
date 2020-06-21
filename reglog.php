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
				<a href="index.php"> <span class="icon-home"></span> Home</a> 
				<a class="active" href="reglog.php"><span class="icon-edit"></span> Free Register </a> 
				<a href="contact.php"><span class="icon-envelope"></span> Contact us</a>
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
	<p><br>
	  <br></p>
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

	<div class="span11">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<h3 align="center" > User Login </h3>	
	<hr class="soft"/>
	
	<div class="row">
		<div class="span6">
			<div class="well">
			<h5>CREATE YOUR ACCOUNT</h5><br/>
			Enter your details to create an account.<br/><br/><br/>
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
<title></title>
</head>

<body>
<form method="post" onSubmit="return Validate()" action="sample.php" name="mm">
<table>
<tr><td>Name</td><td><input type="text" name="name"  placeholder="name" id="name" /> <p id="err"></p></td></tr>
<tr><td>Phone number</td><td><input type="text" name="phone"  placeholder="phone" id="phone" maxlength="10" onKeyUp="checknumber()"/><p id="phone_null"> </p></td></tr>

</p>
<p><tr><td>Address </td><td>
  <input type="text" name="address" placeholder="address" id="address" /></td></tr>
</p>
<p><tr><td>Street</td><td>
  <input type="text" name="street"  placeholder="street" id="street"/>
 </td></tr>
</p>

<p><tr><td>District</td><td>    </p>
<p>
  <select name="district" placeholder="--select district--">
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
  </select>
  </p>
</p>
<p><tr><td>Pincode </td><td>
  <input type="text" name="pincode"  placeholder="Pincode" id="pincode" maxlength="6" onKeyUp="checkpin()" /></td></tr><p id="pincode_null"> </p>
</p>
<p><tr><td>Email ID</td><td>
  <input type="email" name="email"  placeholder="email" id="email"/></td></tr>
</p>
<p><tr><td>
  Username </td><td>
  <input type="text" name="username" placeholder="Username" id="username" onChange="checkuser()"/></td></tr>
</p>
<p><tr><td>Password </td><td>
  <input type="password" name="password" placeholder="Password" id="pass"/></td></tr>
</p>
<p><tr><td>
  Retype password </td><td>
  <input type="password" name="repassword" placeholder="Retype password"  id="pass1"/></td></tr>
</p>
<p>
<p>
<tr><td><input type="submit" class="shopBtn" name="submit" value="Create Your Account" onClick="return Validate()" /></td></tr>
</p>
</p>
</table>

</form>
</body>
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>ALREADY REGISTERED ?</h5>
       
			<form method="post" onSubmit="return Validatelogin()" action="logincheck.php">
			
<p>Username 
  <input type="text" name="username" id="user" />
</p>
<p>Password 
  <input type="password" name="password" id="passwrd"/>
</p>
<div class="controls">
 <input type="submit" class="shopBtn" name="Login" value="Login" onClick="return Validatelogin()"/>    
 </div>
 </form>
		</div>
		</div>
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


<script type="text/javascript">
function checkuser()
{
 $username=document.getElementById("username").value;
	x=new XMLHttpRequest();
	x.onreadystatechange=function()
	{
	  if(x.readyState==4 && x.status==200)
	  {
	    if(x.responseText=="exist")
		   {
		    alert(" UserName Already Exist");
		  // document.getElementById("username").value="";
			document.getElementById("username").focus();
			}
		// document.getElementById("").innerHTML=x.responseText; 
	  }	
	}
	x.open('GET','php files/SqlExistUser.php?userid='+$username,true);
	x.send();
}
function checknumber()
{
 var a=document.getElementById("phone").value;
 if(isNaN(a))
  document.getElementById("phone").value=a.slice(0, -1);
 //alert(a);
}

function checkpin()
{
 var a=document.getElementById("pincode").value;
 if(isNaN(a))
  document.getElementById("pincode").value=a.slice(0, -1);
}

function Validatelogin()
{
	var user=document.getElementById('user').value;
	var passwrd=document.getElementById('passwrd').value;
 if(user==null || user=="")
	{
		window.alert("Please enter Username");
		 return false;
	}
 if(passwrd==null || passwrd=="")
	{
		window.alert("Please enter Password");
		return false;
	}
	else
	{
 		return true;
	}
}

</script>

