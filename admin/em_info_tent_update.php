<br><br><br><br>
<style>
body {
  background-color: #2EA697;
}
#margin-top {
  margin-top: 10px;
}

#margin-bottom {
  margin-top: 163px;
}

</style>
<body>
<div id="margin-top">
<div class="container">
	<div id="margin-bottom">
		</div>
				<div class="alert alert-success" role="alert">
					<div class="col-7">
<?php

$sql="update em_size set size_name='$_POST[size_name]' where sizeID  = $_POST[sizeID]";
$result=$db->query($sql);
	if($result){
		echo "แก้ไขข้อมูล สำเร็จ";
	}
		else{
			echo "แก้ไขข้อมูล ไม่สำเร็จ";
		}
?>
<meta http-equiv="refresh" content="3;url=?page=em_info" />
    </div>
  </div>
</div>
</div>

<div id="margin-bottom">
</div>
</body>
