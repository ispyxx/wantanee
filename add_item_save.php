<?php

$sql="insert into order(od_date_start,od_time_start,od_date_end,od_time_end,od_place,od_amphoe,od_number,od_size_tent,od_color_tent,od_amount_tent,od_style_table,od_amount_table,od_amount_chair)
values('$_POST[od_date_start]','$_POST[od_time_start]','$_POST[od_date_end]','$_POST[od_time_end]','$_POST[od_place]','$_POST[od_amphoe]','$_POST[od_number]','$_POST[od_size_tent]','$_POST[od_color_tent]','$_POST[od_amount_tent]','$_POST[od_style_table]','$_POST[od_amount_table]','$_POST[od_amount_chair]')";

$result=$db->query($sql);
	if($result){
	echo "บันทึกข้อมูล สำเร็จ";
	}
	else{
	echo "บันทึกข้อมูล ไม่สำเร็จ";
	}
?>
