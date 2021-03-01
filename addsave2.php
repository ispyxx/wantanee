
<br><br><br><br>
<div class="container">
				<div class="alert alert-success" role="alert">
					<div class="col-7">
            <!-- if(isset($_POST['od_place']) && isset($_POST['od_number']) && !empty($_POST['od_place']) && !empty($_POST['od_number'])){ -->
            <!-- values('$_POST[od_date_start]', '$_POST[od_time_start]', '$_POST[od_date_end]', '$_POST[od_time_end]', '$_POST[od_place]', '$_POST[od_amphoe]', '$_POST[od_number]', '$_POST[od_size_tent]', '$_POST[od_color_tent]', '$_POST[od_amount_tent]', '$_POST[od_style_table]', '$_POST[od_amount_table]', '$_POST[od_amount_chair]')"; -->
            <!-- values('$od_date_start', '$od_time_start', '$od_date_end', '$od_time_end', '$od_place', '$od_amphoe', '$od_number', '$od_size_tent', '$od_color_tent', '$od_amount_tent', '$od_style_table', '$od_amount_table', '$od_amount_chair')"; -->

<?php

$od_date_start = "";
$od_time_start = "";
$od_date_end = "";
$od_time_end = "";
$od_place = "";

$od_amphoe = "";
$od_number = "";
$od_size_tent = "";
$od_color_tent = "";
$od_amount_tent = "";

$od_style_table = "";
$od_amount_table = "";
$od_amount_chair = "";



if($_POST['od_date_start'] && $_POST['od_time_start']
 && $_POST['od_date_end'] && $_POST['od_time_end']
 && $_POST['od_place'] && $_POST['od_amphoe']
 && $_POST['od_number'] && $_POST['od_size_tent']
 && $_POST['od_color_tent'] && $_POST['od_amount_tent']
 && $_POST['od_style_table'] && $_POST['od_amount_table']
 && $_POST['od_amount_chair']){

$od_date_start = $_POST['od_date_start'];
$od_time_start = $_POST['od_time_start'];
$od_date_end = $_POST['od_date_end'];
$od_time_end = $_POST['od_time_end'];
$od_place = $_POST['od_place'];

$od_amphoe = $_POST['od_amphoe'];
$od_number = $_POST['od_number'];
$od_size_tent = $_POST['od_size_tent'];
$od_color_tent = $_POST['od_color_tent'];
$od_amount_tent = $_POST['od_amount_tent'];

$od_style_table = $_POST['od_style_table'];
$od_amount_table = $_POST['od_amount_table'];
$od_amount_chair = $_POST['od_amount_chair'];


echo $od_place;
$sql="insert into rent_order(od_date_start, od_time_start, od_date_end, od_time_end, od_place, od_amphoe, od_number, od_size_tent, od_color_tent, od_amount_tent, od_style_table, od_amount_table, od_amount_chair)
     values('$_POST[od_date_start]', '$_POST[od_time_start]', '$_POST[od_date_end]', '$_POST[od_time_end]', '$_POST[od_place]', '$_POST[od_amphoe]', '$_POST[od_number]', '$_POST[od_size_tent]', '$_POST[od_color_tent]', '$_POST[od_amount_tent]', '$_POST[od_style_table]', '$_POST[od_amount_table]', '$_POST[od_amount_chair]')";


    $result=$db->query($sql);
    	if($result){
    	echo "บันทึกข้อมูล สำเร็จ";
    	}
    	else{
    	echo "บันทึกข้อมูล ไม่สำเร็จ";
    	}
    ?>

<?php } ?>

    </div>
  </div>
</div>
