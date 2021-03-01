<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <script src="assets/js/date.js"></script>  <!--date-->

  <!--date-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!--date-->
</head>
<style>
#header-rent{
  font-size: 1.5em;
}
#border-style{border-style: groove;}
#in-groove {
  border-style: groove;
  border-radius: 10px;
}
#margin-top {
  margin-top: 20px;
}
#margin-between-top {
  margin-top: 30px;
}
#margin-between-bottom {
  margin-bottom: 40px;
}
#margin-between-left {
  margin-left: 500px;
}
#margin-top-success {
  margin-top: 20px;
}
#input-number{

}

ฺ.body { font-family: AngsanaUPC, MS Sans Serif; }

</style>

<!-- วันที่ -->
<script type="text/javascript">
$(document).ready(function(){
  // Date Object
  $('#datepicker1').datepicker({
    dateFormat: "yy-mm-dd",
    minDate: new Date('2017-12-5')
  });

  // Number
  $('#od_date_start').datepicker({
    dateFormat: "yy-mm-dd",
    minDate: 0
  });
});
</script>
<!-- วันที่ -->
<script type="text/javascript">
$(document).ready(function(){
  // Date Object
  $('#datepicker1').datepicker({
    dateFormat: "yy-mm-dd",
    minDate: new Date('2017-12-5')
  });

  // Number
  $('#od_date_end').datepicker({
    dateFormat: "yy-mm-dd",
    minDate: 0
  });
});
</script>
<!-- จบวันที่ -->

<body>
  <div class="row">
    <div style="width: 50%; float:left">
      <form action="?page=addtest" method="post" enctype="multipart/form-data" name="form2" id="form2" onSubmit="JavaScript:return fncSubmit();">
        <div class="container" id="margin-top">
          <div class="container col-11">

            <div class="groove" id="border-style">
              <div class="alert alert-secondary" role="alert" id="header-rent">
                เช่าอุปกรณ์
              </div>

              <div class="groove" id="in-groove">
                <div class="alert alert-secondary" role="alert" id="font-size-title">
                  เต็นท์
                </div>


                <div class="col-7">
        					<label>อำเภอ</label>
        						<input type="text" class="form-control" placeholder="" name="od_amphoe">
        				</div>

              </div>
            </div>
                  <!-- em_size_tent	em_color_tent	em_style_table	em_chair -->

                  <!-- od_size_tent	od_color_tent od_amount_table -->




        <div class="container col-md-9" >
           <div class="row">
             <div class="col-md-3">
                <a class="btn btn-secondary" href="?page=rental_item" role="button">ย้อนกลับ</a>
              </div>
               <div class="col-md-3">
                 <button type="submit" class="btn btn-primary">เช่าอุปกรณ์</button>
              </div>

        <?php
          $sql="insert into order(od_amphoe) values('$_POST[od_amphoe]')";
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

      </form>
    </div> <!--  right -->
  </div> <!-- row all-->
</body>
</html>
