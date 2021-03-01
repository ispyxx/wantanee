<br><br><br><br>

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

$sql="update member set fname='$_POST[fname]', lastname='$_POST[lastname]', sex='$_POST[sex]', number='$_POST[number]', address='$_POST[address]' where memberID = $_POST[memberID]";
// echo $sql;exit;
$result=$db->query($sql);
	if($result){
		echo "แก้ไขข้อมูล สำเร็จ";

// 
// echo "
// <script type='text/javascript'>
// Swal.fire({
// title: 'Error!',
// text: 'Do you want to continue',
// icon: 'error',
// confirmButtonText: 'Cool'
// })
// </script>";
	}
		else{
			echo "แก้ไขข้อมูล ไม่สำเร็จ";

		}
?>
<meta http-equiv="refresh" content="3;url=?page=ad_member" />
    </div>
  </div>
</div>
</div>

<div id="margin-bottom">
</div>
</body>
