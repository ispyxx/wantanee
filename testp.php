<?php
      $con= mysqli_connect("localhost","root","","rent") or die("Error: " . mysqli_error($con));
      mysqli_query($con, "SET NAMES 'utf8' ");
      error_reporting( error_reporting() & ~E_NOTICE );
      date_default_timezone_set('Asia/Bangkok');
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
			body {
				background-color: #2EA697;
			}
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<body>

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
<form action="?page=testp" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="JavaScript:return fncSubmit();">
		<br>
			<div clss"from">
				<div class="col-7">
					<label>Username</label>
						<input type="text" class="form-control" placeholder="" name="username">
				</div> <!-- form-group end.// -->
				<div class="col-7">
					<label>Password</label>
						<input type="password" class="form-control" placeholder=" " name="password">
				</div> <!-- form-group end.// -->
			</div> <!-- form-row end.// -->
			   <br>

    <div class="container">
    		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">สมัครสมาชิก</button>
        </div> <!-- form-group// -->
      </div>
    <!-- <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small> -->



    <?php

    $sql="insert into test(username,password) values('$_POST[username]','$_POST[password]')";
    $result=$db->query($sql);
    	if($result){
    	echo "บันทึกข้อมูล สำเร็จ";
    	}
    	else{
    	echo "บันทึกข้อมูล ไม่สำเร็จ";
    	}
    ?>
    <meta http-equiv="refresh" content="3;url=?page=member" />

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
