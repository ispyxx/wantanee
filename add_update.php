
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

// od_size_tent='$_POST[od_size_tent]', od_color_tent='$_POST[od_color_tent]', od_amount_tent='$_POST[od_amount_tent]', od_style_table='$_POST[od_style_table]', od_amount_table='$_POST[od_amount_table]', od_amount_chair='$_POST[od_amount_chair]'
// echo $sql;exit;
//
// if (!empty($_POST["od_size_tent"]) ) {
// 	$sql="update rent_order set od_size_tent='$_POST[od_size_tent]' where orderID = $_POST[orderID]";
// 	$result=$db->query($sql);
// }
// if (!empty($_POST["od_color_tent"]) ) {
// 	$sql="update rent_order set od_color_tent='$_POST[od_color_tent]' where orderID = $_POST[orderID]";
// 	$result=$db->query($sql);
//
// }
// if (!empty($_POST["od_amount_tent"]) ) {
// 	$sql="update rent_order set od_amount_tent='$_POST[od_amount_tent]' where orderID = $_POST[orderID]";
// 	$result=$db->query($sql);
//
// }
// if (!empty($_POST["od_style_table"]) ) {
// 	$sql="update rent_order set od_style_table='$_POST[od_style_table]' where orderID = $_POST[orderID]";
// 	$result=$db->query($sql);
//
// }
// if (!empty($_POST["od_amount_table"]) ) {
// 	$sql="update rent_order set od_amount_table='$_POST[od_amount_table]' where orderID = $_POST[orderID]";
// 	$result=$db->query($sql);
//
// }
// if (!empty($_POST["od_amount_chair"]) ) {
// 	$sql="update rent_order set od_amount_chair='$_POST[od_amount_chair]' where orderID = $_POST[orderID]";
// 	$result=$db->query($sql);
//
// }
?>
</div>
</div>
<meta http-equiv="refresh" content="2;url=?page=rental_item0" />
<div id="margin-bottom">
	</div>

</body>
</html>
