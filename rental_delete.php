<style>
body {
	background-color: #2EA697;
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


			$sql="delete from rent where RentID='$_GET[RentID]'";
			$result=$db->query($sql);
			if($result){
				echo "ลบข้อมูลสำเร็จ";
			}
			else{
				echo "ลบข้อมูล 'ไม่สำเร็จ";
			}
			?>

			<meta http-equiv="refresh" content="2;url=?page=my_list" />

		</div>
	</div>
</div>
<div id="margin-bottom">
</div>
