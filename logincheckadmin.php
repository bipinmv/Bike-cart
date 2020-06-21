<?php 
include('connection.php');
session_start();


$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from admin where username='$username' and password='$password'";
$res=mysql_query($query);
$ro=mysql_num_rows($res);

if($ro>0)
{


$query1="select * from admin where username='$username' and password='$password'";
$res1=mysql_query($query);
$ro1=mysql_fetch_array($res1);

$id=$ro1['id'];
$_SESSION['myid']=$id;




//echo "ok";
?>

<script>
window.location.href='admin_page.php';
</script>
<?php
}
else
{
?>

<script>
alert('invalid username and password');
window.location.href='adminpanel.php';
</script>
<?php
}



?>