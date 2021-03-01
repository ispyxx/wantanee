<br><br><br><br>
<style>
body {
  font-family: "Chakra Petch", sans-serif;
}
#margin-top {
  margin-top: 10px;
}

#margin-bottom {
  margin-top: 163px;
}
#alert1{
  text-align: center;
}
</style>
<body>
<div id="margin-top">
<div class="container">
	<div id="margin-bottom">
		</div>
				<div class="alert alert-success" id="alert1" role="alert">

<?php

$sql="update member set username='$_POST[username]', password='$_POST[password]', fname='$_POST[fname]', lname='$_POST[lname]', gender='$_POST[gender]', tel='$_POST[tel]', address='$_POST[address]', tambon='$_POST[tambon]', amphoe='$_POST[amphoe]'  where memberID = $_POST[memberID]";

// echo $sql;exit;
$result=$db->query($sql);
	if($result){
		echo "แก้ไขข้อมูล สำเร็จ";
    echo '<meta http-equiv="refresh" content="2;url=?page=member_info" />';

	}
		else{
			echo "แก้ไขข้อมูล ไม่สำเร็จ";
      echo '<meta http-equiv="refresh" content="2;url=?page=member_edit" />';

		}
?>
<!-- <meta http-equiv="refresh" content="3;url=?page=rental_item0" /> -->

  </div>
</div>
</div>

<div id="margin-bottom">
</div>
</body>
