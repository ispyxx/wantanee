

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!--date-->
  <script src="assets/js/date.js"></script>  <!--date-->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--date-->

<script type="text/javascript">
$(document).ready(function(){
 // Date Object
 $('#datepicker1').datepicker({
  dateFormat: "yy-mm-dd",
  minDate: new Date('2017-12-5')
 });

 // Number
 $('#tool_date').datepicker({
  dateFormat: "yy-mm-dd",
  minDate: 0
 });
});
</script>

<style>
body {
  background-color: #787878;
}

#margin-between-bottom {
  margin-bottom: 8px;
}
/*
#margin-between-time {
margin-bottom: px;
} */

#margin-between-top {
  margin-top: 30px;
}
#margin-between-bottom-textbox {
  margin-bottom: 32px;
}


</style>



<style>
			body {
				background-color: #cadcde;

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
<div class="col-md-5">
<div class="card">
<header class="card-header">

	<h4 class="card-title mt-2">แจ้งอุปกรณ์ชำรุด</h4>
</header>

<article class="card-body">
<form action="?page=report_admaged_devices_save" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="JavaScript:return fncSubmit();">
		<br>

    <!-- <div class="alert alert-secondary" role="alert">
          กำหนดงาน
    </div> -->
    <div id="">
    <div class"from">
        <div class="col-md-7">
        วันที่ :&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="date" id="tool_date" name="tool_date" required autocomplete="off">

        </div>
				<br>

      <div class="col-md-7">
      อุปกรณ์ :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="tool_name" placeholder=""  style="height: 30px;" required autocomplete="off">
      </div>
				<br>
      <div class="col-md-7">
        ปัญหาที่พบ :&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="tool_problem" placeholder=""  style="height: 100px; width: 360px;" required autocomplete="off">
      </div>
<br>
      <div class="input-group col-md-12">
        <label class="input-group-text" for="inputGroupFile01">รูปภาพประกอบ</label>
        <input type="file" name="tool_pic" class="form-control" id="inputGroupFile01" >
      </div>
</div>
    </div> <!-- form-row end.// -->


				<br><br>
				<hr class="style7">  <!--เส้นใต้-->





    <div class="form-row">
      <div class="container">
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg btn-block"> บันทึกข้อมูล  </button><br>
          <div class= "text-right">
            <a class="btn btn-secondary" href="?page=report_damaged_devices" role="button">ย้อนกลับ</a>
          </div>
        </div> <!-- form-group// -->
      </div>

    </article> <!-- card-body end .// -->
</div>
    <!-- <div class="border-top card-body text-center">Have an account? <a href="?page=main">Log In</a></div> -->
  </div> <!-- card.// -->
</form>
</article> <!-- card-body end .// -->

    </div> <!-- card.// -->
  </div> <!-- col.//-->

</div> <!-- row.//-->


</div>
<!--container end.//-->

<br><br>
</body>
