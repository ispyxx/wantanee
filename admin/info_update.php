
<style>
			body {
				background-color: #2EA697;
			}
			#margin-top {
			  margin-top: 10px;
			}

			#margin-bottom {
			  margin-top: 224px;
			}
</style>


<div class="container">
	<div id="margin-bottom">
		</div>
				<div class="alert alert-light" role="alert">
					<div class="col-7">
<?php


// $sql="update rent_order set od_date_start='$_POST[od_date_start]', od_time_start='$_POST[od_time_start]', od_date_end='$_POST[od_date_end]', od_time_end='$_POST[od_time_end]', od_place='$_POST[od_place]', od_amphoe='$_POST[od_amphoe]', od_number='$_POST[od_number]' where orderID = $_POST[orderID] ";

$sql="update rent set DateStart='$_POST[DateStart]', DateEnd='$_POST[DateEnd]', TimeStart='$_POST[TimeStart]', TimeEnd='$_POST[TimeEnd]', Place='$_POST[Place]',Status='$_POST[Status]' where RentID = $_POST[RentID] ";
// echo $sql;exit;

$result=$db->query($sql);
if($result){
	echo "แก้ไขข้อมูล สำเร็จ";
}
	else{
		echo "แก้ไขข้อมูล ไม่สำเร็จ";
	}


?>
</div>
</div>
<meta http-equiv="refresh" content="2;url=?page=rental_info" />
<div id="margin-bottom">
	</div>

</body>
</html>
