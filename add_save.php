<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

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

					<div class="col-7">
            <!-- if(isset($_POST['od_place']) && isset($_POST['od_number']) && !empty($_POST['od_place']) && !empty($_POST['od_number'])){ -->
            <!-- values('$_POST[od_date_start]', '$_POST[od_time_start]', '$_POST[od_date_end]', '$_POST[od_time_end]', '$_POST[od_place]', '$_POST[od_amphoe]', '$_POST[od_number]', '$_POST[od_size_tent]', '$_POST[od_color_tent]', '$_POST[od_amount_tent]', '$_POST[od_style_table]', '$_POST[od_amount_table]', '$_POST[od_amount_chair]')"; -->
            <!-- values('$od_date_start', '$od_time_start', '$od_date_end', '$od_time_end', '$od_place', '$od_amphoe', '$od_number', '$od_size_tent', '$od_color_tent', '$od_amount_tent', '$od_style_table', '$od_amount_table', '$od_amount_chair')"; -->

<?php
$datestart=date("Y-m-d",strtotime($_POST["DateStart"]));
$dateend=date("Y-m-d",strtotime($_POST["DateEnd"]));

// echo $datestart,$dateend;exit;

$sqlss="insert into rent(DateStart, DateEnd, TimeStart, TimeEnd, Place, Status, MemberID)
     values('$datestart', '$dateend', '$_POST[TimeStart]', '$_POST[TimeEnd]', '$_POST[Place]', '$_POST[Status]',$_SESSION[sess_userID])";

		 if(mysqli_query($db, $sqlss)){
		     $idrent = mysqli_insert_id($db);

				 echo "
				 <script type='text/javascript'>
									 Swal.fire(
					  'Good job!',
					  'You clicked the button!',
					  'success'
					)
				 </script>";
				 if($idrent){

					 $sqlTent="insert into rentdetails(RentID,ProductID, Amount)
							 values('$idrent','$_POST[ProductTent]','$_POST[AmountTent]')";
								// echo $sqlTent; exit;
							 $resultTent=$db->query($sqlTent);

							 $sqlsTable="insert into rentdetails(RentID,ProductID, Amount)
									values('$idrent','$_POST[ProductTable]', '$_POST[AmountTable]')";
									$resultTable=$db->query($sqlsTable);


									$sqlChair="insert into rentdetails(RentID,ProductID, Amount)
											values('$idrent',12,'$_POST[AmountChair]')";
											$resultChair=$db->query($sqlChair);

				 }

				 echo '<meta http-equiv="refresh" content="3;url=?page=rental_item0" />';
		   }
			 else {
				 echo "
				 <script type='text/javascript'>
				 Swal.fire({
				 title: 'Error!',
				 text: 'Do you want to continue',
				 icon: 'error',
				 confirmButtonText: 'Cool'
				 })
				 </script>";
			 }





			//  if($resultTent){
		 // 	echo "บันทึกข้อมูล สำเร็จ";
		 // 	}
		 // 	else{
		 // 	echo "บันทึกข้อมูล ไม่สำเร็จ";
		 // 	}
		 //
		 // exit;

// echo $sql;exit;

//
// $sql="insert into rent_order(od_date_start, od_time_start, od_date_end, od_time_end, od_place, od_amphoe, od_number, od_amount_tent, od_amount_table, od_amount_chair, member_id)
//      values('$_POST[od_date_start]', '$_POST[od_time_start]', '$_POST[od_date_end]', '$_POST[od_time_end]', '$_POST[od_place]', '$_POST[od_amphoe]', '$_POST[od_number]', '$_POST[od_amount_tent]', '$_POST[od_amount_table]', '$_POST[od_amount_chair]', $_SESSION[sess_userID])";

		//  if (	$result=$db->query($sql)===true) {
		// 	 $last_id=$db->insert_id;
		//  	// echo $last_id; exit;
		//
		//
		// 	if (!empty($_POST["od_size_tentID"]) ) {
		// 		$sql="update rent_order set od_size_tentID='$_POST[od_size_tentID]' where orderID = $last_id";
		// 		$result=$db->query($sql);
		//
		// 	}
		//
		// 	if (!empty($_POST["od_color_tentID"]) ) {
		// 		$sql="update rent_order set od_color_tentID='$_POST[od_color_tentID]' where orderID = $last_id";
		// 		$result=$db->query($sql);
		//
		// 	}
		//
		// 	if (!empty($_POST["od_style_tableID"]) ) {
		// 		$sql="update rent_order set od_style_tableID='$_POST[od_style_tableID]' where orderID = $last_id";
		// 		$result=$db->query($sql);
		//
		// 	}
		//
		//
		//
		//  }
		//




    ?>
		<!-- <meta http-equiv="refresh" content="2;url=?page=rental_item0" /> -->
    </div>

</div>
<div id="margin-bottom">
  </div>
