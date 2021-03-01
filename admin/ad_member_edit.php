

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
			body {
				background-color: #BDDFE3;
			}
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<body>

<?php
 $sql="select * from member where memberID='$_GET[memberID]'";
 $result=$db->query($sql);
 $row=$result->fetch_array(MYSQLI_BOTH);
 ?>

<div class="container">
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">

<header class="card-header">

	<h4 class="card-title mt-2">แก้ไขข้อมูลส่วนตัว</h4>
</header>

<article class="card-body">
<form action="?page=ad_member_update" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="JavaScript:return fncSubmit();">
		<br>


				<hr class="style7">  <!--เส้นใต้-->

			<br>
			<div class="form-row">
				<div class="col form-group">
					<label>ชื่อ </label>
				  	<input type="text" class="form-control" value="<?= $row['fname'];?>" name="fname" autocomplete="off" required>
				</div> <!-- form-group end.// -->
				<div class="col form-group">
					<label>นามสกุล</label>
				  	<input type="text" class="form-control" value="<?= $row['lastname'];?>" name="lastname" autocomplete="off" required>
				</div> <!-- form-group end.// -->
			</div> <!-- form-row end.// -->

	 <div class="form-group">
		 <label>เพศ</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="sex" <?php if($row['sex']=="male"){?> checked <?php }?>>
		  <span class="form-check-label"> ชาย </span>
		</label>
		<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="sex" <?php if($row['sex']=="female"){?> checked <?php }?>>
		  <span class="form-check-label"> หญิง</span>
		</label>
	</div> <!-- form-group end.// -->




	<div class="form-row">
	<div class="col-7">
		<label>หมายเลขโทรศัพท์</label>
			<input type="text" class="form-control" value="<?= $row['number'];?>" name="number" autocomplete="off" maxlength="10" required>
	</div> <!-- form-group end.// -->
</div>

  <div class="form-row">
  <div class="col form-group">
  	<label>ที่อยู่</label>
  		<input type="text" class="form-control" value="<?= $row['address'];?>" name="address" autocomplete="off" required>
  </div> <!-- form-group end.// -->
  </div>

 <input type="hidden" name="memberID" value="<?=$_GET['memberID']?>">

	<div class="form-row">


    <div class="container">
    		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">แก้ไข</button>
        </div>
      </div>

</form>
</article>

  <hr class="style7">  <!--เส้นใต้-->

        <div class="container">
              <div class= "text-right">

          <a class="btn btn-secondary" href="?page=ad_member" role="button">ย้อนกลับ</a>
        </div>
        </div>
    </div> <!-- card.// -->
  </div> <!-- col.//-->

</div> <!-- row.//-->


</div>
<!--container end.//-->

<br><br>
</body>
