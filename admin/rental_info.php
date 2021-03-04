


<!DOCTYPE html>
<html>
	<title>Datatable Demo </title>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
		<!-- <script type="text/javascript" charset="utf8" src="assets/dataTables/js/dataTables.bootstrap.min.js"></script> -->
		<script type="text/javascript" charset="utf8" src="assets/datatables/js/dataTables.bootstrap4.min.js"></script>
		<link rel="stylesheet" href="assets/datatables/css/dataTables.bootstrap4.min.css">



		<script type="text/javascript" language="javascript" >
			$(document).ready(function() {
				var dataTable = $('#customer-grid').DataTable( {
					// "processing": true,
					// "serverSide": true,
					// "pageLength": 10
					// "ajax":{
					// 	url :"server_rental_info.php", // json datasource
					// 	type: "post",  // method  , by default get
					// 	error: function(){  // error handling
					// 		$(".customer-grid-error").html("");
					// 		$("#customer-grid").append('<tbody class="customer-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
					// 		$("#customer-grid_processing").css("display","none");
					//
					// 	}
					// }
				} );
			} );
		</script>

		<style>
		body {
			font-family: "Chakra Petch", sans-serif;
			color: #111111;
		}
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<table id="customer-grid"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
				<thead>
					<tr>
						<th>รหัสการเช่า</th>
						<th>เริ่ม</th>
						<th>สิ้นสุด</th>
						<th>สถานที่</th>
						<th>สถานะการเช่า</th>
						<th>สถานะการคืนของ</th>

						<th>ดูเพิ่มเติม</th>
						<th>แก้ไข</th>
						<th>ลบ</th>
					</tr>
				</thead>

				<tbody>
					<?php $sqls="select * from rent";
					$result=$db->query($sqls);
					while ($row=$result->fetch_array(MYSQLI_BOTH)){

						$datestart=changeDate($row["DateStart"]);
						$dateend=changeDate($row["DateEnd"]);

							//Status
						if($row["Status"]=='2'){
								// echo "กำลังดำเนินการ";
								$row["Status"]='กำลังดำเนินการ';
						}
						elseif ($row["Status"]=='1') {
							$row["Status"]='สำเร็จ';
						}
						elseif(empty($row["Status"])){
							// echo "สำเร็จ";
								 $row["Status"]="";
						}

						//StatusReturn
						if($row["StatusReturn"]=='2'){
								// echo "กำลังดำเนินการ";
								$row["StatusReturn"]='กำลังดำเนินการ';
						}
						elseif ($row["StatusReturn"]=='1') {
							$row["StatusReturn"]='สำเร็จ';
						}
						elseif(empty($row["StatusReturn"])){
							// echo "สำเร็จ";
								 $row["StatusReturn"]="";
						}

						echo "<tr>";
						echo "<td>" .$row["RentID"] ."</td> ";
						echo "<td>" .$datestart ."</td> ";
						echo "<td>" .$dateend ."</td> ";
						echo "<td>" .$row["Place"] ."</td> ";
						echo "<td>" .$row["Status"] ."</td> ";
						echo "<td>" .$row["Status"] ."</td> ";
						// echo "<td>" "<button type="button" class="btn btn-dark">Dark</button>" "</td>";
						echo "<td><a href='?page=rental_info_bill&RentID=$row[RentID]' class='btn btn-info btn-sm col-4'><img src='img/search.png' width='15' height='15'/></a></td>";
						echo "<td><a href='?page=rental_info_edit&RentID=$row[RentID]' class='btn btn-secondary btn-sm'><img src='img/edit-w.png' width='15' height='15'/></a></td> ";
						echo "<td><a href='?page=rental_delete&RentID=$row[RentID]' class='btn btn-danger btn-sm'><img src='img/del2.png' width='15' height='15'/></a></td> ";

						echo "</tr>";
					}
					?>

				</tbody>
			</table>
		</div>
	</body>
</html>



<?php
function changeDate($date){
//ใช้ Function explode ในการแยกไฟล์ ออกเป็น  Array
$get_date = explode("-",$date);
//กำหนดชื่อเดือนใส่ตัวแปร $month
	$month = array("01"=>"ม.ค.","02"=>"ก.พ","03"=>"มี.ค.","04"=>"เม.ย.","05"=>"พ.ค.","06"=>"มิ.ย.","07"=>"ก.ค.","08"=>"ส.ค.","09"=>"ก.ย.","10"=>"ต.ค.","11"=>"พ.ย.","12"=>"ธ.ค.");
//month
$get_month = $get_date["1"];
//year
$year = $get_date["0"]+543;
return $get_date["2"]." ".$month[$get_month]." ".$year;
}
?>
