<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
	<?php
$password=sha1($_POST["password"]);
if($_POST["username"]){
$sql="select * from member where username='$_POST[username]' and password='$_POST[password]'";
// and password='$password'";
$result=$db->query($sql);
$num=$result->num_rows;
if($num<=0){
	echo "Username หรือ Password ไม่ถูกต้อง";
	echo "<meta http-equiv='refresh' content='1;url=?page=login' />";
}
else{
	echo "login สำเร็จ";
	@session_start();
	// $_SESSION["sess_userid"]=session_id();
	$_SESSION["sess_memberID"]=session_id();
	$_SESSION["sess_username"]=$_POST["username"];
	echo "<meta http-equiv='refresh' content='1;url=?page=main' />";
	}
}
  ?>
</body>
</html>
