<style>
body {
	background-color: #f5f5f5;
}
#margin-top {
	margin-top: 150px;
}

#margin-bottom {
	margin-top: 216px;
}
</style>

<div id="margin-bottom">
</div>
<div class="container">
	<div class="alert alert-success" role="alert">
		<div class="col-7">

			<?php


			$sql="delete from em_damaged where em_damgedID='$_GET[em_damgedID]'";
			$result=$db->query($sql);
			if($result){
				echo "ลบข้อมูลสำเร็จ";
			}
			else{
				echo "ลบข้อมูล ไม่สำเร็จ";
			}
			?>

			<meta http-equiv="refresh" content="2;url=?page=report_damaged_devices" />

		</div>
	</div>
</div>
<div id="margin-bottom">
</div>
