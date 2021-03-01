

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



</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<body>

<div class="container">
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">

<header class="card-header">


	<label class="card-title mt-2" id="font-tt"><h4>เข้าสู่ระบบ (สำหรับผู้ดูแลระบบ)</h4></label>
</header>


<article class="card-body">
<form action="?page=admin_login" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="JavaScript:return fncSubmit();">
		<br>
			<div clss"from">
				<div class="col-7">
					<!-- <label id="font-t"><h5>Username</h5></label> -->
						<input type="text" class="form-control" id="font-tt" placeholder=" ชื่อผู้ใช้ " name="username" autocomplete="off" required>
				</div> <!-- form-group end.// -->
				<div class="col-7">
					<!-- <label id="font-t"><h5>Password</h5></label> -->
						<input type="password" class="form-control" id="font-tt" placeholder=" รหัสผ่าน " name="password" autocomplete="off" required>
				</div> <!-- form-group end.// -->
			</div>
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
      	echo "*Username หรือ Password ไม่ถูกต้อง";
      	echo "<meta http-equiv='refresh' content='2;url=?page=admin_login' />";
      }
      else{

      	echo "login สำเร็จ";
      	@session_start();
      	// $_SESSION["sess_userid"]=session_id();
      	$_SESSION["sess_memberID"]=session_id();
        $_SESSION["sess_username"]=$_POST["username"];
        $_SESSION["sess_userID"]=$row["memberID"];


      	echo "<meta http-equiv='refresh' content='1;url=admin' />";
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
</body>
