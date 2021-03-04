<?php
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- dataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowgroup/1.1.2/css/rowGroup.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/rowgroup/1.1.2/js/dataTablesrowGroup.min.js"></script>

<link rel="stylesheet" type="text/css" href="assets/dataTable/datatables.css">
<script type="text/javascript" charset="utf8" src="assets/dataTable/datatables.js"></script>
<link rel="stylesheet" type="text/css" href="assets/dataTable/DataTable-1.10.23/css/jquery.dataTables.min.css">
<script src="assets/dataTable/DataTable-1.10.23/js/jquery.js" type="text/javascript"></script>
<script src="assets/dataTable//DataTable-1.10.23/js/jquery.dataTables.js" type="text/javascript"></script>

<!-- ฟอร์ม see more -->
<link rel="stylesheet" type="text/css" href="assets/css/show-item.css">

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
/* #margin-right {
  margin-left:-470px;
} */
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
#top3{
  margin-top: -500px;
}
#io{
  margin-bottom:1000px;
}
#font_size_table{
  font-size: 1.5em;
    font-family: "Chakra Petch", sans-serif;
}

</style>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";

  }
}
</script>
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
                <a href="?page=rental"  class="btn btn-info btn-lg col-8 "><img src="img2/plus.png" width="30" height="30"/>&nbsp;&nbsp;เช่าอุปกรณ์</a>
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
                        <a href="?page=member_edit&memberID=<?=$_SESSION['sess_userID']?>" class="btn btn-secondary btn-lg col-12 "><img src="img2/edit-w.png" width="15" height="15"/>&nbsp;&nbsp;แก้ไขข้อมูล</a>
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
                        <?php echo $rows['lname'];?> <br>
                        <label>เบอร์โทร</label>&nbsp;&nbsp;<?php echo $rows['tel'];?><br>
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

          <div class="container" id="font_size_table">

            <div class="row">
              <div class="col-md-12">

                <table class="table table-striped table-hover"style="width:100%">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">เริ่ม</th>
                      <th scope="col">สิ้นสุด</th>
                      <th scope="col">รวมจำนวนวัน</th>
                      <th scope="col">สถานที่</th>
                      <!-- <th scope="col">รวมราคา (บาท)</th> -->

                      <th scope="col">สถานะการเช่า</th>
                      <!-- <th scope="col">สถานะการคืนของ</th> -->
                      <th scope="col">ดูเพิ่มเติม</th>
                      <th scope="col">แก้ไขข้อมูล</th>
                      <th scope="col">ลบ</th>
                    </tr>
                  </thead>



                  <?php
                  $sqls="select * from rent where memberID = '$_SESSION[sess_userID]'";
                  // echo $sqls;exit;
                  $results=$db->query($sqls);
                  while($rows=$results->fetch_array(MYSQLI_ASSOC)){
                    // print_r($rows);exit;
                    ?>
                    <tbody>
                      <tr>
                        <?php
                              $datestart=changeDate($rows["DateStart"]);
                              $dateend=changeDate($rows["DateEnd"]);
                              $between=getNumDay(date('Y-m-d'),$rows["DateStart"]);

                              if($rows["Status"]=='2'){
                                  // echo "กำลังดำเนินการ";
                                  $rows["Status"]='กำลังดำเนินการ';
                              }
                              elseif ($rows["Status"]=='1') {
                                $rows["Status"]='สำเร็จ';
                              }
                              elseif(empty($rows["Status"])){
                                // echo "สำเร็จ";
                                   $rows["Status"]="";
                              }
                        ?>

                        <td><?=$datestart?></td>
                        <td><?=$dateend?></td>
                        <td>(<?php echo getNumDay($rows["DateStart"],$rows["DateEnd"]);?>   วัน )</td>
                        <td><?=$rows["Place"]?></td>
                        <!-- <td><?=number_format($allprice);?></td> -->
                       <td><?=$rows["Status"]?></td>
                       <!-- <td><?=$rows["Status"]?></td> -->



                        <!-- <td><?=$row["od_amount_tent"]?></td> -->

                        <!-- <td><a onclick="document.getElementById('id01').style.display='block'" class="btn btn-info btn-lg col-5"><img src="img2/search.png" width="15" height="15"/></a></td> -->
                        <td><a href="?page=rental_more&RentID=<?=$rows['RentID']?>" class="btn btn-info btn-lg col-5"><img src="img2/search.png" width="15" height="15"/></a></td>
                        <td><a   href="?page=rental_edit&RentID=<?=$rows['RentID']?>" class="btn btn-secondary btn-lg col-4 <?php echo ($between<=2) ? 'disabled' : ''; ?>"><img src="img2/edit-w.png" width="15" height="15"/></a></td>
                        <td><a  href="?page=rental_delete&RentID=<?=$rows['RentID']?>" class="btn btn-danger btn-lg col-6" onclick="return confirm('คุณแน่ใจจะลบจริงหรือไม่')"><img src="img2/del2.png" width="15" height="15"/></a></td>
                      </tr>
                    </tbody>
                  <?php  }?>
                </table>


                <div class="container">
                </div>
                <hr class="style7">  <!--เส้นใต้-->
                <div class="container">
                </div>


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

    <?php
    function changeDate($date){
    //ใช้ Function explode ในการแยกไฟล์ ออกเป็น  Array
    $get_date = explode("-",$date);
    //กำหนดชื่อเดือนใส่ตัวแปร $month
      $month = array("01"=>"ม.ค.","02"=>"ก.พ","03"=>"มี.ค.","04"=>"เม.ย.","05"=>"พ.ค.","06"=>"มิ.ย.","07"=>"ก.ค.","08"=>"ส.ค.","09"=>"ก.ย.","10"=>"ต.ค.","11"=>"พ.ย.","12"=>"ธ.ค.");
    //month
    $get_month = $get_date["1"];

    //year
    $year = $get_date["0"]+543;

    return $get_date["2"]." ".$month[$get_month]." ".$year;

    }

    ?>


    <div id="id01" class="modal">

      <form class="modal-content animate" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <?php
        $sql="select * from rent_order as r left join em_size on r.od_size_tentID=em_size.sizeID left join em_table on r.od_style_tableID=em_table.tableID where r.member_id='$_SESSION[sess_userID]'";
        $result=$db->query($sql);
        $row=$result->fetch_array(MYSQLI_ASSOC)
        ?>

        <div class="form-bill">

          <div class="col-md-8">
            <div class="card">
              <div class="card-header"><h2>ข้อมูลการเช่าอุปกรณ์</h2></div>
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

          <div id="io"></div>

          <div id="top3">
          <div class="container">
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
        </div>
          </div>
      </div> <!-- end | class | form-bill -->

    </form>
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
