
<style>

#margin-top {
	margin-top: 150px;
}

#margin-bottom {
	margin-top: 216px;
}
</style>

<?php
$sql="delete from member where memberID='$_GET[memberID]'";
$result=$db->query($sql);
if($result){
	echo "ลบข้อมูลสำเร็จ";
}
else{
echo "ลบข้อมูล 'ไม่สำเร็จ";
}
?>
