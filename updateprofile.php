<?php
mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$street=$_POST['street'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$myid=$_POST['selectid'];


$sql="UPDATE `tbl_buyer_reg` SET `name`='$name' , `phone`='".$phone."' , `address`='$address' , `street`='$street' , `district`='$district' , `pincode`=$pincode , `email`='$email' , `username`='$username' , `password`='$password' where `SI.no`='".$myid."'";
$query=mysql_query($sql);
if($query)
{
?>

<script>
alert('Profile updated');
window.location.href='buyer_profile.php';
</script>
<?php
}
else
{
?>

<script>
alert('Profile updation Failed');
//window.location.href='edit.php';
</script>
<?php
}



?>