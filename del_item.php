<?php

mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");

$myid=$_GET['id'];


$sql="DELETE FROM `item` WHERE `id`=$myid";
$result=mysql_query($sql);
if($result)

{

?>
<script>
alert('ITEM DELETED');
window.location.href='manage_item.php';
</script>
<?php



}

else
{
?>
<script>
alert('ITEM NOT DELETED');
window.location.href='manage_item.php';
</script>
<?php
}


?>