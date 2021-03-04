

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
body {
	background-color: #2EA697;
}

#font-t{
	display: block;
	/* position: relative; */
	/* padding: 10px 20px; */

	font-size: 14px;
	font-family: "Chakra Petch", sans-serif;
}

#font-tt{
	/* padding: 10px 20px; */

	font-size: 14px;
	font-family: "Chakra Petch", sans-serif;
}
#margin-user{
	margin-top: -8px;
	margin-left: 20px;
}

#marginn-password{
	margin-top: -8px;
	/* margin-right: 52px; */
	margin-left: 5px;
}

#marginaa{
	margin-top: 10px;
}
/* #center-box{

} */

</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<body>

	<div class="container" id="center-box">
		<hr>


		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="card">

					<header class="card-header">

						<a class="float-right btn btn-outline-primary mt-1" href="?page=regis" role="button" id="font-t">สมัครสมาชิก</a>
						<label class="card-title mt-2" id="font-tt"><h4>เข้าสู่ระบบ</h4></label>
					</header>


					<article class="card-body">
						<div class="col-11 mx-auto">
							<form action="?page=login" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="JavaScript:return fncSubmit();">
								<br>
								<div clss"from">
									<div class="row">
										<div id="marginaa">
										<div class="col">
											<label id="font-t"><h5>ชื่อผู้ใช้</h5></label>
										</div>
										</div>
											<div id="margin-user">
										<div class="col-12">
											<input type="text" class="form-control" id="font-tt" placeholder="  " name="username" autocomplete="off" required>
										</div>
											</div>
									</div>

									<div class="row">
													<div id="marginaa">
										<div class="col">
											<label id="font-t"><h5>รหัสผ่าน</h5></label>
										</div>
										</div>
										<div id="marginn-password">
										<div class="col-12" >
											<input type="password" class="form-control" id="font-tt" placeholder="  " name="password" autocomplete="off" required>
										</div> <!-- form-group end.// -->
									</div>
										</div>
								</div>
							</div>


							<!-- <div class="container">
								<div class="row">
									<div class="col">
											<label id="font-t"><h5>ชื่อผู้ใช้</h5></label>
									</div>
									<div class="col">
										<input type="text" class="form-control" id="font-tt" placeholder=" ชื่อผู้ใช้ " name="username" autocomplete="off" required>
									</div>
								</div>

								<div class="row">
									<div class="col">
										<label id="font-t"><h5>รหัสผ่าน</h5></label>

									</div>
									<div class="col">
										<input type="password" class="form-control" id="font-tt" placeholder=" รหัสผ่าน " name="password" autocomplete="off" required>
									</div>
								</div>
							</div> -->
							<!-- form-row end.// -->
							<br><br>
							<hr class="style7">  <!--เส้นใต้-->


							<div class="alert alert-light" role="alert">
								<?php
								if(!empty($_POST["password"])){
									$password=sha1($_POST["password"]);
									if($_POST["username"]){
										$sql="select * from member where username='$_POST[username]' and password='$_POST[password]'";
										// and password='$password'";
										$result=$db->query($sql);
										$num=$result->num_rows;
										$row=$result->fetch_array(MYSQLI_BOTH);
										if($num<=0){
											echo "*ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง";
											echo "<meta http-equiv='refresh' content='2;url=?page=login' />";
										}
										else{

											echo "เข้าสู่ระบบสำเร็จ";
											@session_start();
											// $_SESSION["sess_userid"]=session_id();
											$_SESSION["sess_memberID"]=session_id();
											$_SESSION["sess_username"]=$_POST["username"];
											$_SESSION["sess_userID"]=$row["memberID"];

											// echo $_SESSION["sess_username"] ;

											if($_SESSION["sess_username"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin.php

												// echo "<meta http-equiv='refresh' content='1;url=admin>";
												echo "<meta http-equiv='refresh' content='1;url=admin/?page=calendar'>";

											}

											else{
												echo "<meta http-equiv='refresh' content='1;url=?page=main' />";
											}
										}
									}
								}
								?>
							</div>

							<div class="form-row">
								<div class="container">
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg btn-block" id="font-t"><h5> เข้าสู่ระบบ  </h5></button><br>
										<div class= "text-right">
											<a class="btn btn-secondary" href="?page=main" role="button" id="font-tt">ย้อนกลับ</a>
										</div>
									</div> <!-- form-group// -->
								</div>
							</form>
						</article> <!-- card-body end .// -->

						<!-- <div class="border-top card-body text-center">Have an account? <a href="?page=main">Log In</a></div> -->
					</div> <!-- card.// -->
				</div> <!-- col.//-->

			</div> <!-- row.//-->


		</div>
		<!--container end.//-->

		<br><br>
			</div>
	</body>
