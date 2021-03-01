
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!--date-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
  $('#datepicker2').datepicker({
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

<!-- เวลา -->
<!-- <script type="text/javascript">
$(document).ready(function(){
// Date Object
$('#od_time_start').od_time_start({
timeFormat: "h:i:s",
});
});
</script> -->




<!-- เรียกข้อมูลในฐานข้อมูลมาทำ dropdown  rent-->
<?php
include ('config.php');
$select_data = "SELECT * FROM em_size"
or die ("Error : ".mysqlierror($select_data));
$rs_select = mysqli_query($db, $select_data);
//echo ($query_level);//test query
?>

<!-- เรียกข้อมูลในฐานข้อมูลมาทำ dropdown  amphures-->

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
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<body>
  <br><br><br><br>
  <?php
  // echo "uuuuuuuuu".$_GET['orderID'];exit;
  $sql="select * from rent_order where orderID=$_GET[orderID]";
  $result=$db->query($sql);
  $row=$result->fetch_array(MYSQLI_BOTH);
  // print_r($row); exit;
  // $formattime=$row->['od_time_start']);
  // echo $formattime
  ?>
  <hr>

  <div class="container">
    <form action="?page=add_update" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="JavaScript:return fncSubmit();">
      <!-- ฝั่งซ้าย ระบุอุปกรณ์ -->
      <div class="container">
        <div class="row">
          <div style="width: 50%; float:left">
            <div class="row justify-content-center">
              <div class="col-md-11">
                <div class="card">

                  <header class="card-header">

                    <h4 class="card-title mt-2">เช่าอุปกรณ์</h4>
                  </header>

                  <input type="hidden" name="orderID" id="orderID" value="<?=$_GET["orderID"]?>">
                  <article class="card-body">
                    <br>




                    <div class="row">
                      <div class="col-5">
                        <div class="form-group">
                          <label>เต็นท์</label>
                          <select class="form-control" name="od_size_tent">

                            <option selected disabled>เลือกขนาด</option>
                            <?php
                            $sql="select * from em_size";
                            $result=$db->query($sql);
                            while($row=$result->fetch_array(MYSQLI_ASSOC)){
                              ?>
                              <option  value="<?=$row['sizeID']?>"><?=$row['size_name']?></option>

                              <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>


                      <div class="col-3">
                        <div class="form-group">
                          <div id="margin-between-bottom-textbox"></div>
                          <select class="form-control" name="od_color_tent">


                            <option selected disabled> เลือกสี </option>

                            <?php
                            $sql="select * from em_color";
                            $result=$db->query($sql);
                            while($row=$result->fetch_array(MYSQLI_ASSOC)){
                              ?>
                              <option  value="<?=$row['colorID']?>"><?=$row['color_name']?></option>

                              <?php
                            }
                            ?>

                          </select>
                        </div>
                      </div>

                      <?php
                      $sql="select * from rent_order where orderID=$_GET[orderID]";
                      $result=$db->query($sql);
                      $row=$result->fetch_array(MYSQLI_BOTH);
                      ?>

                      <div class="col-md-3" id="input-number">
                        <div id="margin-between-bottom-textbox"></div>
                        <div id="margin-between-bottom"></div>
                        <input type="number" name="od_amount_tent" id="od_amount_tent" min="1" max="50" style="height: 37px;" value="<?=$row['od_amount_tent']?>">
                      </div>

                    </div>



                    <hr class="style7">  <!--เส้นใต้-->

                    <div class="row">
                      <div class="col-5">
                        <div class="form-group">
                          <label>โต๊ะ</label>
                          <select class="form-control" name="od_style_table">
                            <option selected disabled>เลือก</option>
                            <?php
                            $sql="select * from em_table";
                            $result=$db->query($sql);
                            while($row=$result->fetch_array(MYSQLI_ASSOC)){
                              ?>
                              <option  value="<?=$row['tableID']?>"><?=$row['table_style']?></option>
                            <?php }?>

                          </select>
                        </div>
                      </div>


                      <?php
                      $sql="select * from rent_order where orderID=$_GET[orderID]";
                      $result=$db->query($sql);
                      $row=$result->fetch_array(MYSQLI_BOTH);
                      ?>


                      <div class="col-md-3" id="input-number">
                        <div id="margin-between-bottom-textbox"></div> <div id="margin-between-bottom"></div> <input type="number" name="od_amount_table" id="od_amount_table" min="1" max="50" style="height: 37px;" value="<?= $row['od_amount_table'];?>">
                      </div>

                    </div>

                    <hr class="style7">  <!--เส้นใต้-->
                    <?php
                    $sql="select * from rent_order where orderID=$_GET[orderID]";
                    $result=$db->query($sql);
                    $row=$result->fetch_array(MYSQLI_BOTH);
                    ?>

                    <div class="row">
                      <div class="col-md-3" id="input-number">
                        เก้าอี้  <div id="margin-between-bottom"></div> <input type="number" name="od_amount_chair" id="od_amount_chair" min="1" max="50" style="height: 37px;" value="<?= $row['od_amount_chair'];?>">
                      </div>

                    </div>

                    <br>
                  </div> <!-- col.//-->

                </div> <!-- row.//-->
              </article>

            </div>
            <!--container end.//-->
            <div id="margin-between-top">
            </div>
            <!-- ฝั่งซ้าย ที่อยู่ -->
            <div class="row justify-content-center">
              <div class="col-md-11">
                <div class="card">



                  <hr>

                  <header class="card-header">
                    <h4 class="card-title mt-2">สถานที่</h4>
                  </header>

                  <article class="card-body">
                    <!-- <form action="?page=add" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="JavaScript:return fncSubmit();"> -->
                    <br>
                    <div clss"from">
                      <div class="col-12">
                        <input type="text" class="form-control"  value="<?= $row['od_place'];?>" name="od_place" autocomplete="off" style="height: 70px;" >
                      </div> <!-- form-group end.// -->
                      <br>
                      <div class="col-6">
                        <input type="text" class="form-control"  value="<?= $row['od_number'];?>" name="od_number" autocomplete="off" min="1" max="10" maxlength="10" >
                      </div> <!-- form-group end.// -->
                      <br>
                      <div class="col-5">
                        <div class="form-group">

                          <select id="od_amphoe" name="od_amphoe" class="form-control">
                            <option selected disabled="<?= $row['od_amphoe'];?>"><?= $row['od_amphoe'];?></option>
                            <option value="เมืองกำแพงเพชร">เมืองกำแพงเพชร</option>	 <option value="ไทรงาม">ไทรงาม</option>			  <option value="คลองลาน">คลองลาน</option>
                            <option value="ขาณุวรลักษบุร">ขาณุวรลักษบุรี</option>		 <option value="คลองขลุง">คลองขลุง</option>		   <option value="พรานกระต่าย">พรานกระต่าย</option>
                            <option value="ลานกระบือ">ลานกระบือ</option>			   <option value="ทรายทองวัฒนา">ทรายทองวัฒนา</option>	<option value="ปางศิลาทอง">ปางศิลาทอง</option>
                            <option value="บึงสามัคคี">บึงสามัคคี</option>				 <option value="โกสัมพีนคร">โกสัมพีนคร</option>
                          </select>
                        </div>
                      </div>
                      <!-- <div class="col-7">
                      <label>เก้าอี้</label>
                      <input type="password" class="form-control" placeholder=" " name="password" required>
                    </div> form-group end.// -->
                  </div>
                </article><!-- form-row end.// -->
                <br><br>
                <hr class="style7">  <!--เส้นใต้-->


              </div> <!-- col.//-->

            </div> <!-- row.//-->


          </div> <!-- <div class="row justify-content-center"> -->


          </div><!-- ซ้าย -->

          <!-- ฝั่งขวา วัน เวลา -->

          <div style="width: 50%; float:right">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card">

                  <header class="card-header">

                    <h4 class="card-title mt-2">กำหนดงาน</h4>
                  </header>

                  <article class="card-body">
                    <!-- <form action="?page=add" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="JavaScript:return fncSubmit();"> -->
                    <br>
                    <div class"from">
                      <div class="row">
                        <div class="col-md-7">
                          <?php $timestart=$row['od_time_start'];
                          $timeend=$row['od_time_end'];


                          ?>
                          เริ่มเมื่อ: <input type="text" id="od_date_start" name="od_date_start" style="height: 30px;"  placeholder="<?= $row['od_date_start'];?>" value="<?= $row['od_date_start'];?>"  autocomplete="off">
                        </div>

                        <div id="margin-between-bottom">
                        </div>
                        <div class="col-md-3" id="input-number">
                          เวลา :
                          <input type="time" id="od_time_start" name="od_time_start" style="height: 30px;"  value="<?=$timestart?>"  autocomplete="off">
                        </div>
                      </div>

                      <hr class="style7">  <!--เส้นใต้-->
                      <div class="row">
                        <div class="col-md-7">
                          สิ้นสุดเมื่อ: <div id="margin-between-time"></div><input type="text" id="od_date_end" name="od_date_end" style="height: 30px;"  value="<?= $row['od_date_end'];?>"  autocomplete="off">
                        </div>



                        <div class="col-md-3" id="input-number">
                          เวลา :<div id="margin-between-time"></div>
                          <input type="time" id="od_time_end" name="od_time_end" style="height: 30px;"  value="<?=$timeend?>"  required autocomplete="off">
                        </div>
                      </div>

                    </div> <!-- form-row end.// -->
                    <br>
                    <hr class="style7">  <!--เส้นใต้-->

                    <div class="form-row">
                      <div class="container">
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-lg btn-block"> เช่าอุปกรณ์  </button><br>




                          <div class= "text-right">
                            <a class="btn btn-secondary" href="?page=main" role="button">ย้อนกลับ</a>
                          </div>
                        </div> <!-- form-group// -->
                      </div>

                    </article> <!-- card-body end .// -->

                    <!-- <div class="border-top card-body text-center">Have an account? <a href="?page=main">Log In</a></div> -->
                  </div> <!-- card.// -->
                </div> <!-- col.//-->

              </div> <!-- row.//-->


            </div>
          </div>

        </div>
      </div>
    </form>
  </div>







  <br><br>
</body>
