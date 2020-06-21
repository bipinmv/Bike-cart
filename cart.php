<?php
 include('connection.php'); 
 session_start();
 if(isset($_SESSION["myid"]))
    $userid=$_SESSION["myid"];
else
   header("Location: index.php");
   if(isset($_GET["operation"]))
   {
     $sql="delete from carttable where productid='".$_GET["id"]."' and userid='".$userid."'";
      mysql_query($sql);
   }
   
   ?>
<?php
session_start();
if(isset($_SESSION["myid"]))
{ $aa=0;}
else
{
   header("Location: userhomepage.php");
 if(isset($_GET["submit"]))
    echo '<script type="text/javascript">alert("submitted")</script>';
}
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
		<li class="active">Cart</li>
    </ul>
	<div class="well well-small">
		<h1>Check Out <small class="pull-right"> </small></h1>
	<hr class="soften"/>	
    <body>
 <form>
	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
				  <th>	Ref. </th>
                  <th>Unit price</th>
                 
                  <th>Qty 
                 
        
                    
                  <th>Total</th>
                  <th>Remove</th>
				</tr>
              
              </thead>
                            <tbody>
           
                <?php
				   $sql="select * from carttable where userid='".$userid."' and status=0";
                   $view=mysql_query($sql);
				   $sum=0;
                   while($row=mysql_fetch_array($view))
				   {
				     $sum+=$row[3]*$row[2];
				     $itemcode=$row[0];
					 $sql="select * from item where id='".$itemcode."'";
					 $view2=mysql_query($sql);
					 $itemdetail=mysql_fetch_array($view2);
					 echo ' <tr><td><img width="100" src="'.$itemdetail[5].'" alt=""></td>';
					 echo ' <td>'.$itemdetail[2].'</td>';
                     echo '<td>-</td>';
					 echo '<td>'.$row[3].'</td>';
					 echo '<td>'.$row[2].'</td>';
					 echo '<td>'.$row[3]*$row[2].'</td>';
					  echo '<td><a href="cart.php?operation=remove&id='.$row[0].'"> <font color="red"> Remove </a></font></td></tr>';
				   }
				?>
                  
                
 
         
				
				 <tr>
                  <td colspan="5" class="alignR">Total Amount:	</td>
                  <td colspan="2" bgcolor="#666666"> <font color="white">₹ <?php echo $sum; ?> </font></td>
                  <?php session_start(); $_SESSION['totalamount']=$sum; ?>
                </tr>
				</tbody>
            </table><br/>
		
		
     
			<table class="table table-bordered">
			<tbody>
                <tr><td>DELIVERY DETAILS</td></tr>
                 <tr> 
				 <td>
                 
<body>

					
                    <div class="control-group">
						
</div>
</div>
  </p>
</p>
 <form method="post">                     					
					 
					</form> 
                     <form method="post" onSubmit="return Validate()" action="samplecart.php">                     					
					  <div class="control-group">
						<label class="span2 control-label" for="inputPassword">Pincode</label>
						<div class="controls">
                            <input type="text"  placeholder="Pincode" name="pincode" id="pincode" onKeyUp="return checkpin()" maxlength="6"/><p id="pincode_null"> </p>
						</div>
					  </div>
                       <div class="control-group">
						<label class="span2 control-label" for="inputPassword">Address</label>
						<div class="controls">
                        
						  <input type="text" name="address" placeholder="Address" id="address"/>
						</div>
					  </div>
                      <div class="control-group">
						<label class="span2 control-label" for="inputPassword">Phone No</label>
						<div class="controls">
						<input type="text" name="phone" placeholder="Phone" id="phone" onKeyUp="checknumber()" maxlength="10"/><p id="phone_null"> </p>
                         </div>
					  </div>                  
					  <div class="control-group">
						<div  align="center"class="controls">
						  <input type="submit"  name="submit" value="Submit" class="shopBtn" onClick="return Validate()" />
						</div>
					  </div>
					</form> 
                   
                    </body>
				  </td>
				  </tr>
              </tbody>
            </table>		
	<a href="userhomepage.php" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
	
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
<a href="" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>
<script type="text/javascript">
function checkpin()
{
 var pincode=document.getElementById("pincode").value;
 if(isNaN(pincode))
  document.getElementById("pincode").value=pincode.slice(0, -1);
 //alert(a);
 
}
function checknumber()
{
 var phone=document.getElementById("phone").value;
 if(isNaN(phone))
  document.getElementById("phone").value=phone.slice(0, -1);
 //alert(a);
 
}
function Validate()
{

 var pincode=document.getElementById("pincode").value;
 var phone=document.getElementById("phone").value;
 var address=document.getElementById("address").value;
  if(pincode==null || pincode=="")
	{
		window.alert("Please enter pincode");
		return false;
	}
 if(pincode.length!=6)
	{
	window.alert("Please enter your 6 digit pincode");
	return false;
	}
 if(phone==null || phone=="")
	{
		window.alert("Please enter phone number");
		return false;
	}
 if(phone.length!=10)
	{
	window.alert("Please enter 10 digit phone number ");
	return false;
	}
 if(address==null || address=="")
	{
		window.alert("Please enter address");
		return false;
	}
	else
	{
 		return true;
	}
}
</script>



