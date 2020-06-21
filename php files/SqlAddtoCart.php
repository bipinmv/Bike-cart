<?php
include('../connection.php');
session_start();
$sql="INSERT INTO carttable(`productid`,`userid`,`qty`,`rate`,`status`) VALUES ('".$_GET["productid"]."','".$_SESSION['myid']."','1',".$_GET["rate"].",'0')";
$res=mysql_query($sql);

if($res)
{
?>
<script>
window.location.href='../cart.php';
</script>
<?php
}

?>