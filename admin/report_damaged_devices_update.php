<br><br><br><br>
<style>
body {
  background-color: #f5f5f5;
}
#margin-top {
  margin-top: 10px;
}

#margin-bottom {
  margin-top: 163px;
}

</style>
<body>
<div id="margin-top">
<div class="container">
	<div id="margin-bottom">
		</div>
				<div class="alert alert-success" role="alert">
					<div class="col-7">
<?php

//
//
// $tool_pic=$_FILES["tool_pic"];
// $tool_pic_name=$_FILES["tool_pic"];
// $array_lastname=explode(".",$tool_pic_name);
// $c=count($array_lastname)-1;
// $lastname=strtolower($array_lastname[$c]);


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







$sql="update em_damaged set tool_date='$_POST[tool_date]', tool_name='$_POST[tool_name]', tool_problem='$_POST[tool_problem]', tool_pic='$member_photo_name', tool_status='$_POST[tool_status]' where em_damgedID = $_POST[em_damgedID]";
$result=$db->query($sql);
	if($result){
		echo "แก้ไขข้อมูล สำเร็จ";
	}
		else{
			echo "แก้ไขข้อมูล ไม่สำเร็จ";
		}

    // if (!empty($_POST["tool_pic"]) ) {
    // 	$sql="update em_damaged set tool_pic='$_POST[tool_pic]' where em_damgedID = $_POST[em_damgedID]";
    // 	$result=$db->query($sql);
    //
    // }
    //
    // if (!empty($_POST["tool_status"]) ) {
    // 	$sql="update em_damaged set tool_status='$_POST[tool_status]' where em_damgedID = $_POST[em_damgedID]";
    // 	$result=$db->query($sql);
    //
    // }
?>
<meta http-equiv="refresh" content="3;url=?page=report_damaged_devices" />
    </div>
  </div>
</div>
</div>

<div id="margin-bottom">
</div>
</body>
