<?php
mysql_connect("localhost","root","") or die("no such  connection");
mysql_select_db("vehicle") or die("no database");
if(isset($_FILES["image"]))
{ $uploadOk=1;

$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES["image"]["name"]);
$uploadoOk=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($imageFileType !="jpg"&& $imageFileType !="png" &&$imageFileType != "jpeg"
&& $imageFileType !="gif")
{
?>
<script>
	alert('sorry only jpg,jpeg,png&gif files are allowed');
	window.location.href='item_reg.php';
	$uploadOk=0;
	</script>
    <?php
}
if($_FILES["image"]["size"]>500000000)
{
	echo "sory your file is too large";
	$uploadOk=0;
}
if($uploadOk=1)
{
$imgname=$_FILES['image']['name'];

$imgtemp=$_FILES['image']['tmp_name'];
$location="uploads"."/".$imgname;
$p=move_uploaded_file($imgtemp,$location);
if($p)
{
	$cname=$_POST['cname'];
	$iname=$_POST['iname'];
	$rate=$_POST['rate'];
	$des=$_POST['des'];
	//$image=$_POST['image'];
	//image=$_POST['image'];
	$sql="INSERT INTO `item`( `cname`, `iname`, `rate`, `des`, `image`) VALUES ('$cname','$iname','$rate','$des','$location')";
	$res=mysql_query($sql);
	if($res)
	{
	?>

<script>
alert('Item inserted');
window.location.href='item_reg.php';
</script>
<?php
	}
	else
	{
		?>

<script>
alert('Item not inserted');
window.location.href='item_reg.php';
</script>
<?php
	}

}
}
}
?>



