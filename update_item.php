<?php
mysql_connect("localhost","root","")or die("error no connection");
mysql_select_db("vehicle")or die("no database");
$cname=$_POST['cname'];
$iname=$_POST['iname'];
$rate=$_POST['rate'];
$des=$_POST['des'];
//$image=$_POST['image'];
$itemid=$_POST['itemid'];

$myid=$_POST['id'];
$sql="UPDATE `item` SET `cname`='".$cname."' , `iname`='".$iname."' , `rate`='".$rate."' , `des`='".$des."'   where `id`='".$itemid."'";
//echo $sql;
$query=mysql_query($sql);
if($query)
{
?>

<script>
alert('Item updated');
window.location.href='manage_item.php';
</script>
<?php
}
else
{
?>

<script>
alert('Item updation Failed');
//window.location.href='edit_item.php';
</script>
<?php
}



?>