<?php
session_start();
if(isset($_SESSION["myid"]))
 $aa=0;
else
   header("Location: index.php");
mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");
$sql="select * from tbl_buyer_reg";
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
  <body>
  <table width="700" border="1" align="center" cellpadding="8" cellspacing="3">
    <tr bgcolor="#CCCCCC">
      <td>
        SI.no      </td>
    <td>
      Name      </td>
    <td>
      Phone      </td>
    <td>
      Address      </td>
    <td>
      Street</td>
    <td>
      District      </td>
    <td>
      Pin code      </td>
    <td>
      Email      </td>
    <td>
      Action      </td>
    </tr>
    <?php
while($reg=mysql_fetch_array($view))
{
?>
    <tr>
      <td height="53">
        <?php
echo $reg[0];
?>      </td>
    <td>
      <?php
echo $reg[1];
?>      </td>
    <td>
      <?php
echo $reg[2];
?>      </td>
    <td>
      <?php
echo $reg[3];
?>      </td>
    <td>
      <?php
echo $reg[4];
?>      </td>
    <td>
      <?php
echo $reg[5];
?>      </td>
    <td>
      <?php
echo $reg[6];
?>      </td>
    <td>
      <?php
echo $reg[7];
?>
      <td>
        <a href="del.php?id=<?php echo $reg['SI.no'];?>" >DELETE</a>
        <a href="edit_user.php?id=<?php echo $reg['SI.no'];?>" > <input type="button" name="EDIT" value="Edit" /> </a>      </td> 
    </td>
    </tr>
    <?php
}
?>
  </table>
    </div>
</body>
</html>
