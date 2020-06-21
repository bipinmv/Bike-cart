
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
$query=mysql_query("INSERT INTO `tbl_buyer_reg`(`name`, `phone`, `address`, `street`, `district`, `pincode`, `email`, `username`, `password`) VALUES ('$name','$phone','$address','$street','$district','$pincode','$email','$username','$password')"); 

if($query)
{	
?>

<script>
alert('Account created successfully');
window.location.href='userhomepage.php';
</script>
<?php
}
else
{
?>

<script>
alert('Sorry....! Please Register Once Again ');
window.location.href='reglog.php';
</script>
<?php
}



?>