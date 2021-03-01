<?php
$db_server="localhost";
$db_user="root";
$db_pass="";
$db_src="wantanee";
$db=new mysqli($db_server,$db_user,$db_pass,$db_src);
$db->query("set names utf8");
// $a = array('a' =>$_POST["id"] ,'b'=>111 );
$sql = "select * from products where ProductID='$_POST[id]'";
$result=$db->query($sql);
$data=$result->fetch_array(MYSQLI_ASSOC);
echo (json_encode($data));
?>
