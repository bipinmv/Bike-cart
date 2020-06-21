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
		<li class="active">Search </li>
    </ul>
    
    
    
    
    <div class="well well-small">
		  
		  <hr class="soften"/>
		  <div class="row-fluid">
		  <ul class="thumbnails">
<?php
    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM item
            WHERE (`cname` LIKE '%".$query."%') OR (`iname` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
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
            echo "No result found";
        }
         
    }
    else{ // if query length is less than minimum
	
        echo "Minimum length is ".$min_length;
    }
?>
</div>
</div>
</body>
</html>