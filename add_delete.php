<br><br><br><br>
<div class="container">
				<div class="alert alert-success" role="alert">
					<div class="col-7">
<?php
$sql="delete from rent where RentID='$_GET[sess_userID]'";
$result=$db->query($sql);
if($result){
	echo "ลบข้อมูลสำเร็จ";
}
else{
echo "ลบข้อมูล 'ไม่สำเร็จ";
}
?>
<meta http-equiv="refresh" content="2;url=?page=rental_item0" />
</div>
</div>
</div>
