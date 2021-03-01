<style>
body {
	background-color: #ffffff;
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


			$sql="delete from rent_order where orderID='$_GET[orderID]'";
			$result=$db->query($sql);
			if($result){
				echo "ลบข้อมูลสำเร็จ";
			}
			else{
				echo "ลบข้อมูล 'ไม่สำเร็จ";
			}
			?>

			<meta http-equiv="refresh" content="2;url=?page=rental_info" />

		</div>
	</div>
</div>
<div id="margin-bottom">
</div>
