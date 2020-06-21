<?php
mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");
session_start();
$type=$_POST['a'];
$rate=$_SESSION['totalamount'];
$id=$_SESSION['myid'];
$query1="INSERT INTO payment(`userid`,`rate`,`paymentmethod`)  VALUES ('$id','$rate','$type')";
$query=mysql_query($query1);
echo $query;

if($query)
{

$qq="update carttable set status=1 where userid='$id'";
mysql_query($qq);
?>

<script>
alert('successfully Submittted');
window.location.href='cart.php';
</script>
<?php
}
else
{
   ?>

<script>
alert('Sorry....! Please Try Again ');
window.location.href='payment.php';
</script>
<?php
}
?>