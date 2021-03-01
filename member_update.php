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

$sql="update member set username='$_POST[username]', password='$_POST[password]', fname='$_POST[fname]', lastname='$_POST[lastname]', sex='$_POST[sex]', number='$_POST[number]', address='$_POST[address]' where memberID = $_SESSION[sess_userID]";
$result=$db->query($sql);
	if($result){
		echo "แก้ไขข้อมูล สำเร็จ";
	}
		else{
			echo "แก้ไขข้อมูล ไม่สำเร็จ";
		}
?>
<meta http-equiv="refresh" content="3;url=?page=rental_item0" />
    </div>
  </div>
</div>
</div>

<div id="margin-bottom">
</div>
</body>
