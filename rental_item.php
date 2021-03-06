<?php
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<style>
#margin-between-bottom {
  margin-bottom: 150px;
}
#margin-left {
  margin-left:180px;
}
#margin-right {
  margin-left:-470px;
}
#nbsp {
  padding-left: 200em;
}
#top-pro-color{
  background-color: #525252;
}
#margin-top {
  margin-top: 20px;
}
#margin-between-col {
  margin-left: 70px;
}
#center-col{
  margin-left: 300px;
}


</style>
<body>


  <!-- font TH Baijam -->
  <!-- ======= Header ======= -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/form-add-item.css" rel="stylesheet">
  <div id="bg-tental">

<main id="margin-top">
  <div>
    <main id="top-pro-color">
<div>
      <div class="container">
        <div class="row">

          <div class="col-md-4"><div id="margin-between-bottom"></div>
          <a href="?page=add2"  class="btn btn-info btn-lg col-8 "><img src="img2/plus.png" width="30" height="30"/>&nbsp;&nbsp;เช่าอุปกรณ์</a>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <div class="card bg-light mb-12">
            <div class="card-header">

              <div class="row">
                <div class="col-md-7">
                  <h3>ข้อมูลส่วนตัว</h3>
                </div>
                <div class="col-md-5">
                  <a href="?page=member_edit&memberID=1" class="btn btn-secondary btn-lg col-12 "><img src="img2/edit-w.png" width="15" height="15"/>&nbsp;&nbsp;แก้ไขข้อมูล</a>
                </div>
              </div>

            </div>


            <div class="card-body">
              <div class="container">


                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <!-- <php echo "ยินดีต้อนรับ คุณ ".$_SESSION["sess_username"]." ";> -->
                <br>
                <?php
                $sqls="select * from member where memberID='$_SESSION[sess_userID]'";
                $results=$db->query($sqls);
                $rows=$results->fetch_array(MYSQLI_BOTH);
                ?>


                <h4>
                  <label>คุณ</label>&nbsp;&nbsp;<?php echo $rows['fname']; ?>
                  <?php echo $rows['lastname'];?> <br>
                  <label>เบอร์โทร</label>&nbsp;&nbsp;<?php echo $rows['number'];?><br>
                  <label>ที่อยู่</label>&nbsp;&nbsp;<?php echo $rows['address'];?><br>ตำบล<?php echo $rows['tambon'];?>   อำเภอ<?php echo $rows['amphoe'];?><br>
                </h4>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>



    <section id="contact" class="contact section-bg">

      <!-- ======= table ======= -->

      <div class="container">

        <div class="row">
          <div class="col-md-11">


              <?php
              $sql="select * from rent_order as r left join em_size on r.od_size_tentID=em_size.sizeID left join em_table on r.od_style_tableID=em_table.tableID where r.member_id='$_SESSION[sess_userID]'";
              // $sql="select * from rent_order LEFT JOIN em_size ON rent_order.od_size_tentID=em_size.sizeID WHERE rent_order.orderID='$_SESSION[sess_userID]'";


            ?>
            <thead>
            <?php

              $result=$db->query($sql);

              while($row=$result->fetch_array(MYSQLI_ASSOC)){ ?>
                <div id="margin-right">
                  <div class="container col-md-4">
<?php
                    $sumtent=$row["od_amount_tent"]*$row["price_tent"];
                    $sumtable=$row["od_amount_table"]*$row["price_table"];
                    $sumchair=$row["od_amount_chair"]*5;



                    $allsum=$sumtent+ $sumtable+ $sumchair;
                    $allprice=$allsum*getNumDay($row["od_date_start"],$row["od_date_end"]);
                    // echo $allprice;exit;
                    // echo $row['orderID'];


?>

                    <div class="card">
                      <div class="card-header"><h2>ข้อมูลการเช่าอุปกรณ์</h2></div>
                      <div class="card-header">
                            <div id="center-col">
                                    <div class="col-md-12">
                                      <a href="?page=add_edit&orderID=<?=$row['orderID']?>" class="btn btn-secondary btn-lg col-11"><img src="img2/edit-w.png" width="15" height="15"/>&nbsp;&nbsp;แก้ไขข้อมูล</a>
                                    </div>

                                    <div class="col">
                                      <a href="?page=add_item_delete&orderID=<?=$row['orderID']?>" class="btn btn-danger btn-lg col-11"><img src="img2/del2.png" width="15" height="15"/>&nbsp;&nbsp;ลบข้อมูล</a>
                                    </div>
                            </div>



                      </div>

                      <div class="card-body">

                        <h4>
                          <label>เริ่มวันที่</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['od_date_start'];?>
                          &nbsp;&nbsp;&nbsp;&nbsp;<label>เวลา</label>&nbsp;&nbsp;<?php echo $row['od_time_start']; ?><br>
                          <label>สิ้นสุดวันที่</label>&nbsp;&nbsp;<?php echo $row['od_date_end']; ?>
                          &nbsp;&nbsp;&nbsp;&nbsp;<label>เวลา</label>&nbsp;&nbsp;<?php echo $row['od_time_end']; ?><br><br>
                          <label>สถานที่</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['od_place']; ?><br>
                          <label>เบอร์โทร</label>&nbsp;&nbsp;<?php echo $row['od_number']; ?>

                        </h4>
                      </div>
                    </div>

                  </div>
                </div>


                <table class="table table-striped table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">อุปกรณ์</th>
                      <th scope="col">ราคา</th>
                      <th scope="col">จำนวน</th>
                      <th scope="col">รวมราคา (บาท)</th>
                    </tr>
                  </thead>
                <tr>
                <td><?=$row["size_name"]?> </td>
                <td><?=$row["price_tent"]?></td>
                <td><?=$row["od_amount_tent"]?></td>
                <td><?=$row["price_tent"]*$row["od_amount_tent"]?></td>
              </tr>
              <tr>
                <td><?=$row["table_style"]?> </td>
                  <td><?=$row["price_table"]?></td>
                <td><?=$row["od_amount_table"]?></td>
                <td><?=$row["price_table"]*$row["od_amount_table"]?></td>
              </tr>
              <tr>
                <td>เก้าอี้</td>
                <td>5</td>
                <td><?=$row["od_amount_chair"]?></td>
                <td><?=$row["od_amount_chair"]*5?></td>
              </tr>
              <tr>


                <tr>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><?=$allsum?></td>
                </tr>
                <tr>




                <td colspan="2" class="table-active"><?=$row["od_date_start"]?>   ถึงวันที่     <?=$row["od_date_end"]?> จำนวน    <?php echo getNumDay($row["od_date_start"],$row["od_date_end"]);?>   วัน</td>
                <td>รวมราคาทั้งหมด </td>
                <td><?=$allprice?></td>
              </tr>
            </thead>
          </table>

          
          <div class="container">
          </div>
            <hr class="style7">  <!--เส้นใต้-->
            <div class="container">
            </div>
            <?php  }?>

          </div>
          <?php
          function getNumDay($d1,$d2){
          $dArr1    = preg_split("/-/", $d1);
          list($year1, $month1, $day1) = $dArr1;
          $Day1 =  mktime(0,0,0,$month1,$day1,$year1);

          $dArr2    = preg_split("/-/", $d2);
          list($year2, $month2, $day2) = $dArr2;
          $Day2 =  mktime(0,0,0,$month2,$day2,$year2);

          return round(abs( $Day2 - $Day1 ) / 86400 )+1;
          }

          ?>
          <!-- <div class="col-sm-1">
            <br> <br>
            <a href="?page=order_edit&orderID=<?=$row["orderID"]?>" onclick="return confirm('คุณแน่ใจจะแก้ไขจริงหรือไม่')"/>
              <img src="img2/edit-b.png" width="30" height="30" />
              <br> <br>
              <a href="?page=order_delete&orderID=<?=$row["orderID"]?>" onclick="return confirm('คุณแน่ใจจะลบจริงหรือไม่')"/>
                <img src="img2/delete.png" width="32" height="30" />
                <br> <br>
              </div> -->
            </div> <!--row-->
          </div> <!--container-->
        </div>
      </div>
    </section>
  </main><!-- End #main -->
</div>
<!-- ======= Footer ======= -->


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>
