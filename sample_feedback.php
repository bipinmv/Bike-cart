<?php
mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$query=mysql_query("INSERT INTO `feedback`(`name`,`email`,`subject`) VALUES ('$name','$email','$subject')"); 

if($query)
{
?>

<script>
alert('Thanks for your feedback ');
window.location.href='contact_afterlogin.php';
</script>
<?php
}
else
{
   ?>

<script>
alert('Sorry....! Please Try Again ');
window.location.href='reglog.php';
</script>
<?php
}
?>