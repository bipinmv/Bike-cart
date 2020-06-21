<?php 
include('connection.php');
session_start();


$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from tbl_buyer_reg where username='$username' and password='$password'";
$res=mysql_query($query);
$ro=mysql_num_rows($res);

if($ro>0)
{


$query1="select * from tbl_buyer_reg where username='$username' and password='$password'";
$res1=mysql_query($query);
$ro1=mysql_fetch_array($res1);

$id=$ro1['SI.no'];
$_SESSION['myid']=$id;




//echo "ok";
?>

<script>
window.location.href='cart.php';
</script>
<?php
}
else
{
?>

<script>
alert('invalid username and password');
window.location.href='reglog.php';
</script>
<?php
}



?>