<?php
session_start();
if(isset($_SESSION["myid"]))
 $aa=0;
else
   header("Location: index.php");

mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");

$myid=$_GET['id'];


$sql="DELETE FROM `tbl_buyer_reg` WHERE `SI.no`=$myid";
$result=mysql_query($sql);
if($result)

{

?>
<script>
alert('DATA DELETED');
window.location.href='view.php';
</script>
<?php



}

else
{
?>
<script>
alert('DATA NOT DELETED');
</script>
<?php
}


?>