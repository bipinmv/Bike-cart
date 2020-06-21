<?php
include('../connection.php');
  $query="SELECT * FROM `tbl_buyer_reg` where username='".$_GET["userid"]."'"; 
  $res=mysql_query($query);
  $ro=mysql_num_rows($res);
if($ro>0)
  echo "exist";
  else
  echo 'no';
?>
