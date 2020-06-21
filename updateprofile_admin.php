<?php
session_start();
mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];

$myid=$_SESSION['myid'];

$qq="UPDATE `admin` SET `name`='$name' , `email`='$email' , `phone`='$phone' , `username`='$username' , `password`='$password' where `id`='".$myid."'";
$query=mysql_query($qq);

if($query)
{
?>

<script>
alert('Profile updated');
window.location.href='admin_profile.php';
</script>
<?php
}
else
{
?>

<script>
alert('Profile updation Failed');
window.location.href='edit_admin.php';
</script>
<?php
}



?>