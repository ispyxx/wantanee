

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
			body {
				background-color: #2EA697;

			}
      #fontcolorbody{
        font-family: "Chakra Petch", sans-serif;
      }
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<body id="fontcolorbody">

<div class="container">
<hr>

<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">

    <a class="float-right btn btn-outline-primary mt-1" href="?page=login" role="button">เข้าสู่ระบบ</a>
	<h4 class="card-title mt-2">สมัครสมาชิก</h4>
</header>

<article class="card-body">
<form action="?page=member_save " method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="JavaScript:return fncSubmit();">
		<br>
			<div clss"from">
				<div class="col-7">
					<label>ชื่อผู้ใช้</label>
						<input type="text" class="form-control" placeholder="" name="username" autocomplete="off" maxlength="20" required>
				</div> <!-- form-group end.// -->
				<div class="col-7">
					<label>รหัสผ่าน</label>
						<input type="password" class="form-control" placeholder=" " name="password" autocomplete="off" maxlength="10"  required>
				</div> <!-- form-group end.// -->
			</div> <!-- form-row end.// -->
				<br><br>
				<hr class="style7">  <!--เส้นใต้-->

			<div class="alert alert-secondary" role="alert">
		  			ข้อมูลส่วนตัว
			</div>
			<br>
			<div class="form-row">
				<div class="col form-group">
					<label>ชื่อ </label>
				  	<input type="text" class="form-control" placeholder="" name="fname" autocomplete="off" required>
				</div> <!-- form-group end.// -->
				<div class="col form-group">
					<label>นามสกุล</label>
				  	<input type="text" class="form-control" placeholder=" " name="lname" autocomplete="off" required>
				</div> <!-- form-group end.// -->
			</div> <!-- form-row end.// -->

			<!-- <div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control" placeholder="">
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>  -->

	 <div class="form-group">
		 <label>เพศ</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="male">
		  <span class="form-check-label"> ชาย </span>
		</label>
		<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="female">
		  <span class="form-check-label"> หญิง</span>
		</label>
	</div> <!-- form-group end.// -->


	<div class="form-row">
	<div class="col-7">
		<label>หมายเลขโทรศัพท์</label>
			<input type="text" class="form-control" placeholder=" " name="tel" autocomplete="off" maxlength="10" required>
	</div> <!-- form-group end.// -->
</div>

  <div class="form-row">
  <div class="col form-group">
  	<label>ที่อยู่</label>
  		<input type="text" class="form-control" placeholder=" " name="address" autocomplete="off" style="padding: 40px 0;" required>
  </div> <!-- form-group end.// -->
  </div>


	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>ตำบล</label>
		  <select id="tambon" name="tambon" class="form-control" required>
					<option selected="">กรุณาเลือกตำบล</option>
					<option value="ในเมือง">ในเมือง</option>		   	<option value="ไตรตรึงษ์">ไตรตรึงษ์</option>			<option value="อ่างทอง">อ่างทอง</option>
					<option value="นาบ่อคำ">นาบ่อคำ</option>			  <option value="นครชุม">นครชุม</option>		  	<option value="ทรงธรรม">ทรงธรรม</option>
					<option value="ลานดอกไม">ลานดอกไม้</option>			<option value="หนองปลิง">หนองปลิง</option>			<option value="คณฑ">คณฑี</option>
					<option value="นิคมทุ่งโพธิ์ทะเล">นิคมทุ่งโพธิ์ทะเล</option>	<option value="เทพนคร">เทพนคร</option>		   <option value="วังทอง">วังทอง</option>
					<option value="ท่าขุนราม">ท่าขุนราม</option>			 <option value="คลองแม่ลาย">คลองแม่ลาย</option>		<option value="ธำมรงค">ธำมรงค์</option>
					<option value="สระแก้ว">สระแก้ว</option>

		  </select>
		</div>

		<div class="form-group col-md-6">
			<label>อำเภอ</label>
			<select id="amphoe" name="amphoe" class="form-control" required>
					<option selected="">กรุณาเลือกอำเภอ</option>
					<option value="เมืองกำแพงเพชร">เมืองกำแพงเพชร</option>	 <option value="ไทรงาม">ไทรงาม</option>			  <option value="คลองลาน">คลองลาน</option>
					<option value="ขาณุวรลักษบุรี">ขาณุวรลักษบุรี</option>		 <option value="คลองขลุง">คลองขลุง</option>		   <option value="พรานกระต่าย">พรานกระต่าย</option>
					<option value="ลานกระบือ">ลานกระบือ</option>			 <option value="ทรายทองวัฒนา">ทรายทองวัฒนา</option>	<option value="ปางศิลาทอง">ปางศิลาทอง</option>
					<option value="บึงสามัคคี">บึงสามัคคี</option>				 <option value="โกสัมพีนคร">โกสัมพีนคร</option>


			</select>
		</div>

	<!--
		<div class="form-group">
		<label>Create password</label>
	  <input class="form-control" type="password">
		</div>  form-group end.// -->


    <div class="container">
    		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">สมัครสมาชิก</button>
        </div> <!-- form-group// -->
      </div>
    <!-- <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small> -->

</form>
</article> <!-- card-body end .// -->





        	<hr class="style7">  <!--เส้นใต้-->

        <div class="container">
              <div class= "text-right">

          <a class="btn btn-secondary" href="?page=main" role="button">ย้อนกลับ</a>
        </div>
        </div>
    </div> <!-- card.// -->
  </div> <!-- col.//-->

</div> <!-- row.//-->


</div>
<!--container end.//-->

<br><br>
</body>
