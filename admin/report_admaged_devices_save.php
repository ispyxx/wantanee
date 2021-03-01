<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
// $_POST["member_password"]=sha1($_POST["member_password"]);
// if(!$tool_status){
// $tool_status_f="กำลังดำเนินการ";
// }
// else{
// 	if($tool_status){
// 	$tool_status_f="เสร็จสิ้น";
// 	}
// }
$member_photo=$_FILES["tool_pic"]["tmp_name"];
$member_photo_name=$_FILES["tool_pic"]["name"];
$array_lastname=explode(".",$member_photo_name);
$c=count($array_lastname)-1;
$lastname=strtolower($array_lastname[$c]);
if(!$member_photo){
$member_photo_name="nophoto.png";
}

else{
	if($lastname=='jpg' or $lastname=='gif' or $lastname=='png'){
	$member_photo_name="member_".time().".".$lastname;
	copy($member_photo,"photo_upload/".$member_photo_name);
	unlink($member_photo);
	}
}

$sql="insert into em_damaged(tool_date, tool_name, tool_problem, tool_status, tool_pic) values('$_POST[tool_date]','$_POST[tool_name]','$_POST[tool_problem]','$_POST[tool_status]','$member_photo_name')";

$result=$db->query($sql);
if($result){
echo "บันทึกข้อมูล สำเร็จ";
}
else{
echo "บันทึกข้อมูล ไม่สำเร็จ";
}

?>
<meta http-equiv="refresh" content="3;url=?page=test_c" />

</body>
</html>
