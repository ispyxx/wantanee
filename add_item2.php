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
  dateFormat: "yyyy-mm-dd",
  minDate: new Date('2017-12-5')
 });

 // Number
 $('#od_date_start').datepicker({
  dateFormat: "yyyy-mm-dd",
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
      <form action="?page=add_item2" method="post" enctype="multipart/form-data" name="form2" id="form2" onSubmit="JavaScript:return fncSubmit();">
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
            <!-- เรียกข้อมูลในฐานข้อมูลมาทำ dropdown -->
            <?php
            include ('config.php');
            $select_data = "SELECT * FROM em_rentt"
                  or die ("Error : ".mysqlierror($select_data));
              $rs_select = mysqli_query($db, $select_data);
                          //echo ($query_level);//test query
            ?>

              <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">

                          <select id="od_size_tent" name="od_size_tent"class="form-control">
                              <option selected ="">กรุณาเลือกขนาด</option>
                              <option value="4*4">4*4</option>
                              <option value="4*8">4*8</option>
                              <option value="4*10">4*10</option>

                          </select>
                        </div>
                    </div>

<!-- em_size_tent	em_color_tent	em_style_table	em_chair -->

<!-- od_size_tent	od_color_tent od_amount_table -->

                                <div class="col-md-4">
                                  <div class="form-group">

                                    <select id="od_color_tent" name="od_color_tent"class="form-control">
                                        <option selected ="">กรุณาเลือกสี</option>
                                        <option value="สีขาว">สีขาว</option>
                                        <option value="สีเขียว">สีเขียว</option>
                                        <option value="สีเขียว-น้ำเงิน">สีเขียว-น้ำเงิน</option>

                                    </select>

                                  </div>
                              </div>


                                <div class="col-md-4" id="input-number">
                                    จำนวน : <input type="number" name="od_amount_tent" id="od_amount_tent" min="1" max="50" >
                                </div>


                      <div id="margin-between-bottom">
                      </div>
               </div>
               <!-- ตัวเพิ่มตัวเลือกของเต็นท์ -->
          </div>

               <div id="margin-between-top">
               </div>


         <div class="groove" id="in-groove">
               <div class="alert alert-secondary" role="alert" id="font-size-title">
                 โต๊ะ
               </div>

               <div class="row">
                 <div class="col-md-4">
                   <div class="form-group">

                     <select id="od_style_table" name="od_style_table"class="form-control">
                         <option selected ="">กรุณาเลือกรูปแบบโต๊ะ</option>
                         <option value="แบบทรงกลม">แบบทรงกลม</option>
                         <option value="แบบทรงสี่เหลี่ยม">แบบทรงสี่เหลี่ยม</option>

                     </select>



                   </div>
               </div>


                                <div class="col-md-4" id="input-number">
                                    จำนวน : <input type="number" name="od_amount_table" id="od_amount_table"min="1" max="50">
                                </div>
                        <div id="margin-between-bottom">
                        </div>
                </div>
                <!-- ตัวเพิ่มตัวเลือกของโต๊ะ -->
        </div>
                <div id="margin-between-top">
                </div>

         <div class="groove" id="in-groove">
                <div class="alert alert-secondary" role="alert" id="font-size-title">
                  เก้าอี้
                </div>

                <div class="row">
                  <div class="col-md-4" id="input-number">
                      จำนวน : <input type="number" name="od_amount_chair" id="od_amount_chair"min="1" max="50">
                  </div>

                        <div id="margin-between-bottom">
                        </div>
                 </div>
                 <!-- ตัวเพิ่มตัวเลือกของโต๊ะ -->
            </div>

          </div>  <!-- groove -->
      </div>

  </div> <!-- id="margin-top" -->

</div> <!-- lefe-->

                                                            <!--  ขวา  -->
<div style="width: 50%; float:right">

      <div class="container" id="margin-top">
      <div class="container col-10">
          <div class="groove" id="border-style">
            <div class="alert alert-secondary" role="alert" id="header-rent">
              รายละเอียดวันเวลาและสถานที่
            </div>

            <div class="groove" id="in-groove">
                  <div class="alert alert-secondary" role="alert" id="font-size-title">
                    วันและเวลา
                  </div>
                                                                                     <!-- เริ่มงาน -->
                  <div class="row">
                                  <div class="col-md-5">
                                     เริ่ม: <input type="text" id="od_date_start" name="od_date_start" required autocomplete="off">
                                 </div>


                                   <div class="col-md-3" id="input-number">
                                     เวลา : <input type="time" id="od_time_start" name="od_time_start"required autocomplete="off">
                                   </div>

                   </div>
                                                                                     <!-- สิ้นสุดงาน -->

                   <div class="row">
                                   <div class="col-md-5">
                                      สิ้นสุด: <input type="text" id="od_date_end" name="od_date_end" required autocomplete="off">
                                    </div>


                                    <div class="col-md-2" id="input-number">
                                      เวลา : <input type="time" id="od_time_end" name="od_time_end" required autocomplete="off">
                                    </div>



                                    <div id="margin-between-bottom">
                                    </div>
                    </div>
               </div>

               <div id="margin-between-top">
               </div>

        <div class="groove" id="in-groove">
            <div class="alert alert-secondary" role="alert" id="font-size-title">
              สถานที่
            </div>

              <div class="row">

              <div class="form-row">
              <div class="col form-group col-12">
              	<label>สถานที่</label>
              		<input type="textarea" class="form-control" placeholder=" " name="od_place" id="od_place" required autocomplete="off">
              </div> <!-- form-group end.// -->
              </div>

              <div class="form-group col-md-6">
                <label>อำเภอ</label>
                <select id="od_amphoe" name="od_amphoe"class="form-control">
                    <option selected="">กรุณาเลือกอำเภอ</option>
                    <option value="เมืองกำแพงเพชร">เมืองกำแพงเพชร</option>	 <option value="ไทรงาม">ไทรงาม</option>			  <option value="คลองลาน">คลองลาน</option>
                    <option value="ขาณุวรลักษบุร">ขาณุวรลักษบุรี</option>		 <option value="คลองขลุง">คลองขลุง</option>		   <option value="พรานกระต่าย">พรานกระต่าย</option>
                    <option value="ลานกระบือ">ลานกระบือ</option>			   <option value="ทรายทองวัฒนา">ทรายทองวัฒนา</option>	<option value="ปางศิลาทอง">ปางศิลาทอง</option>
                    <option value="บึงสามัคค">บึงสามัคคี</option>				 <option value="โกสัมพีนคร">โกสัมพีนคร</option>
                </select>

              </div>


              <div class="form-row">
              <div class="col-7">
                <label>หมายเลขโทรศัพท์</label>
                  <input type="tel" class="form-control" placeholder=" " pattern="[0-9]{1,}" name="od_number" id="od_number" required autocomplete="off">
              </div> <!-- form-group end.// -->
            </div>

                      <div id="margin-between-bottom">
                      </div>
               </div>

          </div>






          </div>  <!-- groove -->
      </div>
    </div> <!-- id="margin-top" -->
    <div id="margin-top-success">
    </div>





    <div class="container col-md-9" >
       <div class="row">
         <div class="col-md-3">
            <a class="btn btn-secondary" href="?page=rental_item" role="button">ย้อนกลับ</a>
          </div>
           <div class="col-md-3">
             <button type="submit" class="btn btn-primary">เช่าอุปกรณ์</button>
          </div>

          <?php



              $sql="insert into order(od_date_start, od_time_end, od_date_start, od_time_end, od_place, od_amphoe, od_number, od_size_tent, od_color_tent, od_amount_tent, od_style_table, od_amount_table, od_amount_chair)
              values('$_POST[od_date_start]','$_POST[od_date_end]','$_POST[od_time_start]','$_POST[od_time_end]','$_POST[od_place]','$_POST[od_amphoe]','$_POST[od_number]','$_POST[od_size_tent]','$_POST[od_color_tent]','$_POST[od_amount_tent]','$_POST[od_style_table]','$_POST[od_amount_table]','$_POST[od_amount_chair]')";
              // $sql="insert into order(od_date_start,od_date_end,od_time_start,od_time_end,member_photo) values('$_POST[member_name]','$_POST[member_lastname]','$_POST[member_username]','$_POST[member_password]','$member_photo_name')";
              // od_date_start	od_date_end	od_time_start	od_time_end	od_place	od_amphoe	od_number	od_size_tent	od_color_tent	od_amount_tent	od_style_table	od_amount_table	od_amount_chair
                $result=$db->query($sql);
                if($result){
                  echo "บันทึกข้อมูล สำเร็จ";
                }
                else{
                  echo "บันทึกข้อมูล ไม่สำเร็จ";
                }
                ?>

      </div>
    </div>




    </form>
    <!-- $strSQL = "INSERT INTO order (od_date_start, od_time_end, od_date_start, od_time_end, od_place, od_amphoe, od_number, od_size_tent, od_color_tent, od_amount_tent, od_style_table, od_amount_table, od_amount_chair)
          VALUES ('".$_POST["od_date_start"]."', '".$_POST["od_time_end"]."','".$_POST["od_date_start"]."','".$_POST["od_time_end"]."','".$_POST["od_place"]."','".$_POST["od_amphoe"]."','".$_POST["od_number"]."','".$_POST["od_size_tent"]."','".$_POST["od_color_tent"]."','".$_POST["od_style_table"]."','".$_POST["od_amount_table"]."','".$_POST["od_amount_chair"]."')";
         -->


    <!-- $sql="insert into order(od_date_start, od_time_end, od_date_start, od_time_end, od_place, od_amphoe, od_number, od_size_tent, od_color_tent, od_amount_tent, od_style_table, od_amount_table, od_amount_chair)
    values('$_POST[od_date_start]','$_POST[od_date_end]','$_POST[od_time_start]','$_POST[od_time_end]','$_POST[od_place]','$_POST[od_amphoe]','$_POST[od_number]','$_POST[od_size_tent]','$_POST[od_color_tent]','$_POST[od_amount_tent]','$_POST[od_style_table]','$_POST[od_amount_table]','$_POST[od_amount_chair]')";
    VALUES ('".$_POST['od_date_start']."', '".$_POST['od_date_end']."', '".$_POST['od_time_start']."', '".$_POST['od_time_end']."', '".$_POST['od_place']."', '".$_POST['od_amphoe']."', '".$_POST['od_number']."', '".$_POST['od_size_tent']."', '".$_POST['od_color_tent']."', '".$_POST['od_amount_tent']."', '".$_POST['od_style_table']."', '".$_POST['od_amount_table']."', '".$_POST['od_style_table']."')"; -->

        <!-- <div class="container col-md-9" >
           <div class="row">
             <div class="col-md-3">
                <a class="btn btn-secondary" href="?page=rental_item" role="button">ย้อนกลับ</a>
              </div>
               <div class="col-md-3">
                 <button type="submit" class="btn btn-primary">เช่าอุปกรณ์</button>
              </div>
          </div>
        </div> -->
</div> <!--  right -->
</div> <!-- row all-->
  </body>
</html>
