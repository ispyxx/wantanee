
<style>

#margin-top {
	margin-top: 150px;
}

#margin-bottom {
	margin-top: 216px;
}
</style>
<div class="container">
	<div id="margin-bottom">
		</div>
				<div class="alert alert-success" role="alert">
					<div class="col-7">
<?php
$sql="delete from em_size where sizeID='$_GET[sizeID]'";
$result=$db->query($sql);
if($result){
	echo "ลบข้อมูลสำเร็จ";
}
else{
echo "ลบข้อมูล 'ไม่สำเร็จ";
}
?>
	<meta http-equiv="refresh" content="3;url=?page=em_info" />
</div>
</div>
</div>
