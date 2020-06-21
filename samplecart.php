
<?php
mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");

$pincode=$_POST['pincode'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$query=mysql_query("INSERT INTO `delivery`(`pincode`,`address`,`phone`) VALUES ('$pincode','$address','$phone')"); 

if($query)
{	
?>

<script>
window.location.href='payment.php';
</script>
<?php
}
else
{
?>

<script>
alert('Sorry....! Please Try Again ');
window.location.href='cart.php';
</script>
<?php
}
?>