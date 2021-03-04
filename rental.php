<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!--date-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<!-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script> -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

</head>
<body>





  <!-- วันที่ -->
  <script type="text/javascript">
  $(document).ready(function(){
    // Date Object
    $('#datepicker1').datepicker({
      dateFormat: "yy-mm-dd",
      minDate: new Date('2020-12-5')
    });

    // Number
    $('#DateStart').datepicker({
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
  $('#DateEnd').datepicker({
    dateFormat: "yy-mm-dd",
    minDate: 0
  });
});
</script>


<!-- เรียกข้อมูลในฐานข้อมูลมาทำ dropdown  rent-->
<?php
include ('config.php');
$select_data = "SELECT * FROM em_rentt"
or die ("Error : ".mysqlierror($select_data));
$rs_select = mysqli_query($db, $select_data);
//echo ($query_level);//test query
?>

<!-- เรียกข้อมูลในฐานข้อมูลมาทำ dropdown  amphures-->

<!-- 4.2 -->
<style>

#size-pic{
  width: 50%;
  height: 100%;
}
</style>
<!--4.2-->

<style>
body {
  background-color: #2EA697;
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

#button-le{
  margin-left:  100px;
}
#margin-box{
  margin-left: 20px;
  margin-top: 32px;
}
#input-numberr{
  margin-left: 20px;
}
</style>

<script type="text/javascript">
$(function(){
  $("#i_accept").click(function(){ // เมื่อคลิกที่ checkbox id=i_accept
    if($(this).prop("checked")==true){ // ถ้าเลือก
      $("#continue").removeAttr("disabled"); // ให้ปุ่ม id=continue_bt ทำงาน สามารถคลิกได้
    }else{ // ยกเลิกไม่ทำการเลือก
      $("#continue").attr("disabled","disabled");  // ให้ปุ่ม id=continue_bt ไม่ทำงาน
    }
  });
});
</script>



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

            <h4 class="card-title mt-2">เช่าอุปกรณ์</h4>
          </header>

          <article class="card-body">
            <form  action="?page=rental_confirm" method="post" enctype="multipart/form-data" name="form1" id="form1">
              <br>

              <div class="alert alert-secondary" role="alert">
                กำหนดงาน
              </div>

              <div class="from">
                <div class="row">
                  <div class="col-md-7">
                    เริ่มเมื่อ:&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="DateStart" name="DateStart" style="height: 30px;" autocomplete="off" required>
                  </div>
                  <div class="col-md-3" id="input-number">
                    เวลา :
                    <input type="time" id="TimeStart" name="TimeStart" style="height: 30px;" autocomplete="off" required>
                  </div>
                </div>

                <hr class="style7">  <!--เส้นใต้-->
                <div class="row">
                  <div class="col-md-7">
                    สิ้นสุดเมื่อ: <input type="text" id="DateEnd" name="DateEnd" style="height: 30px;" autocomplete="off" required>
                  </div>
                  <div class="col-md-3" id="input-number">
                    เวลา :<div id="margin-between-time"></div>
                    <input type="time" id="TimeEnd" name="TimeEnd" style="height: 30px;" autocomplete="off" required>
                  </div>
                </div>
              </div> <!-- form-row end.// -->
              <br><br>
              <hr class="style7">  <!--เส้นใต้-->
              <div class="alert alert-secondary" role="alert">
                สถานที่
              </div>
              <br>
              <div class="from">
                <div class="col-12">
                  <input type="text" class="form-control" placeholder="รายละเอียดสถานที่" id="Place" name="Place" autocomplete="off" style="height: 120px;" required>
                </div> <!-- form-group end.// -->
                <br>
                <br>
              </div>
              <hr class="style7">  <!--เส้นใต้-->

              <!-- *******************************************************************************************************************    -->


              <div class="alert alert-secondary" role="alert">
                <div class="row">
                  <div class="col">
                    อุปกรณ์
                  </div>
                  <div class="col">
                    <div id="button-le">
                      <!-- <button class="btn btn-outline-primary col-12" type="button" id="id01">ภาพอุปกรณ์</button> -->
                      <a onclick="document.getElementById('id01').style.display='block'" class="btn btn-outline-primary">ภาพอุปกรณ์</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-8">
                  <div class="form-group">

                    <label>เต็นท์&nbsp;&nbsp;&nbsp;(ราคา 700 บาท/หลัง)</label><br>

                    <select class="form-control" name="ProductTent">
                      <option selected disabled value="">-- ขนาดของเต็นท์ --</option>
                      <?php
                      $sql="select * from products where ProductType=1";
                      $result=$db->query($sql);
                      while ($row=$result->fetch_array(MYSQLI_BOTH)){

                    
                        ?>

                        <option value="<?php echo $row["ProductID"]; ?>"><?php echo $row["ProductName"]; ?></option>

                      <?php }?>

                    </select>
                  </div>
                </div>

                <div class="col">
                  <div id="margin-box">
                    <input type="number" name="AmountTent" id="AmountTent" min="1" max="50" style="height: 37px; width: 80px;" placeholder="จำนวน">
                  </div>
                </div>
              </div>
              <hr class="style7">
              <div class="row">
                <div class="col-8">
                  <div class="form-group">
                    <label>โต๊ะ&nbsp;&nbsp;&nbsp;(ราคา 10 บาท/ตัว)</label>
                    <select class="form-control" name="ProductTable">
                      <option selected disabled value="">-- รูปแบบโต๊ะ --</option>

                      <?php
                      $sql="select * from products where ProductType=2";
                      $result=$db->query($sql);
                      while ($row=$result->fetch_array(MYSQLI_BOTH)){
                        ?>
                        <option  value="<?php echo $row['ProductID']; ?>"><?php echo $row['ProductName']; ?></option>
                      <?php } ?>

                    </select>
                  </div>
                </div>

                <div class="col-md-3" id="input-numberr">
                  <div id="margin-between-bottom-textbox"></div> <div id="margin-between-bottom"></div> <input type="number"style="height: 37px; width: 80px;" name="AmountTable" id="AmountTable" min="1" max="50" style="height: 37px;" placeholder="จำนวน">
                </div>

              </div>
              <hr class="style7">
              <div class="row">
                <div class="col-md-5" id="input-number">
                  เก้าอี้&nbsp;&nbsp;&nbsp;(ราคา 5 บาท/ตัว)  <div id="margin-between-bottom">
                  </div>
                  <input type="hidden" name="ProductChair" id="ProductChair">
                  <input type="number" name="AmountChair" id="AmountChair" min="1" max="50" style="height: 37px; width: 80px;" placeholder="จำนวน">
                </div>
              </div>

              <div class="form-row"></div>

              <hr class="style7">  <!--เส้นใต้-->

              <div class="form-row">
                <div class="container">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="ok"> ถัดไป  </button><br>
                    <div class= "text-right">
                      <a class="btn btn-secondary" href="?page=rental_item" role="button">ย้อนกลับ</a>
                    </div>
                  </div>
                </div>


              </article> <!-- card-body end .// -->

            </div> <!-- card.// -->

            <input type="hidden" name="Status" value="2">

            <?php

            $sql="select * from rent ORDER BY RentID DESC";
            $results=$db->query($sql);
            $row=$results->fetch_array(MYSQLI_BOTH);

            $rowsID=$row['RentID']+1;

            // echo $rows;exit;

            ?>
            <input type="hidden" name="rentID" value="<?=$rowsID?>">
            <input type="hidden"  name="SignDate"  id="SignDate" value="<?=date('Y-m-d')?>"/>
          </form>
        </article> <!-- card-body end .// -->

      </div> <!-- card.// -->
    </div> <!-- col.//-->

  </div> <!-- row.//-->


</div>
<!--container end.//-->

<br><br>
<!-- ************************************************  ภาพ -->
<!--4.3-->
</body>
