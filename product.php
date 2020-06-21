<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
   
     
    mysql_select_db("vehicle") or die(mysql_error());
    
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
				<a  href="cart.php"><span class="icon-shopping-cart"></span> Cart</a>
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
	<div class="row">
	<div class="span12">
    <ul class="breadcrumb">
		<li><a href="userhomepage.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Products </li>
    </ul>
    
    
    
    
    <div class="well well-small">
		  
		  <hr class="soften"/>
		  <div class="row-fluid">
		  <ul class="thumbnails">
<?php
    $query = $_GET['key']; 
    
    if($query)
	{ 
         
        $raw_results = mysql_query("SELECT * FROM item
            WHERE (`cname` LIKE '%".$query."%') OR (`iname` LIKE '%".$query."%')OR (`des` LIKE '%".$query."%')")  or die(mysql_error());
             
       
        if(mysql_num_rows($raw_results) > 0)
		{ 
             
            while($results = mysql_fetch_array($raw_results))
			{?>
           
		  
			<li class="span4">
			  <div class="thumbnail">
				<a  href="product_details.php?id=<?php echo $results['id'];?>" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a><a  href="product_details.php?id=<?php echo $results['id'];?>"><img src="<?php echo $results['image'];?>" alt=""></a></a>
				<div class="caption">
			        <p><?php echo $results['iname'];?> </p>
                    <p><?php echo $results['cname'];?></p>
                    <?php  $productid = $results['id']; ?>
				  <h5>
					 <?php echo' <a class="shopBtn" href="php files/SqlAddtoCart.php?productid='.$results['id'].'&rate='.$results['rate'].'" ><span class="icon-plus"></span> Add to cart</a>'; ?>
					  <span class="pull-right"> ₹<?php echo $results['rate'];?>.00</span>
				  </h5>
				</div>
			  </div>
			</li>
            <?php
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No items found";
        }
         
    }
    else{ // if query length is less than minimum
	
        echo "No items found";
    }
?>
</div>
</div>
</body>
</html>