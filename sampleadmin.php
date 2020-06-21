<?php
mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");
$name=$_POST['adminname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("INSERT INTO `admin`(`adminname`, `phone`, `email`, `username`, `password`) VALUES ('$name','$phone','$email','$username','$password')"); 
if($query)
{
  echo "registered";                                                                       
}
else
{
echo "failed";
}
?>