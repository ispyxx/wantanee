<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

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

<body>


<div class="container">
	<div id="margin-bottom">
		</div>
				<div class="alert alert-light" role="alert">
					<div class="col-7">

			<?php
			$sql="insert into member(username,password,fname,lname,gender,tel,address,tambon,amphoe) values('$_POST[username]','$_POST[password]','$_POST[fname]','$_POST[lname]','$_POST[gender]','$_POST[tel]','$_POST[address]','$_POST[tambon]','$_POST[amphoe]')";
			$result=$db->query($sql);

				if($result){
				echo "บันทึกข้อมูล สำเร็จ";
				}
				else{
				echo "บันทึกข้อมูล ไม่สำเร็จ";
				}
			?>
			<meta http-equiv="refresh" content="3;url=?page=main" />
				</div>
		   	</div>
</div>

<div id="margin-bottom">
  </div>

</body>
</html>
