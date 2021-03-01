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

<!-- วันที่ -->
<script type="text/javascript">
$(document).ready(function(){
  // Date Object
  $('#datepicker1').datepicker({
    dateFormat: "yy-mm-dd",
    minDate: new Date('2017-12-5')
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
  $('#od_date_end').datepicker({
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
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>
<!--4.2-->



<style>
body {
  background-color: #ffff;
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
#left-se{
  margin-left: 275px;
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



          <?php
          $sql="select * from Rent where RentID=$_GET[RentID]";
          // echo $sql;exit;
          $result=$db->query($sql);
          $row=$result->fetch_array(MYSQLI_BOTH);
          // print_r($row);exit;
          ?>

          <article class="card-body">
            <form action="?page=info_update" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="JavaScript:return fncSubmit();">
              <br>

<?php

$rowt="";
      if($row["Status"]=='2'){
          // echo "กำลังดำเนินการ";
          $rowt='กำลังดำเนินการ';
      }
      elseif ($row["Status"]=='1') {
        $rowt='สำเร็จ';
      }
      elseif(empty($row["Status"])){
        // echo "สำเร็จ";
           $rowt="";
      }


?>
              <div class="col-4" id=left-se>
              <select class="form-select" aria-label="Default select example" name="Status">
                <option selected name="Status" value="<?=$row['Status'];?>"><?=$rowt?></option>
                <option  value="1">สำเร็จ</option>
                <option   value="2">กำลังดำเนินการ</option>
              </select>
              </div>

              <br>
              <div class="alert alert-secondary" role="alert">
                กำหนดงาน
              </div>

              <?php
              $timestart=$row['DateStart'];
              $timeend=$row['DateEnd'];
              ?>

              <div class"from">
                <div class="row">

                  <div class="col-md-7">

                    เริ่มเมื่อ:&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="DateStart" name="DateStart" placeholder="<?= $row['DateStart'];?>" value="<?= $row['DateStart'];?>" style="height: 30px;" required autocomplete="off">

                  </div>



                  <div class="col-md-3" id="input-number">
                    เวลา :
                    <input type="time" id="TimeStart" name="TimeStart" value="<?= $row['TimeStart'];?>" value="<?= $row['TimeStart'];?>" style="height: 30px;" required autocomplete="off">
                  </div>

                </div>

                <hr class="style7">  <!--เส้นใต้-->

                <div class="row">
                  <div class="col-md-7">

                    สิ้นสุดเมื่อ: <input type="text" id="DateEnd" name="DateEnd" placeholder="<?= $row['DateEnd'];?>" value="<?= $row['DateEnd'];?>"  style="height: 30px;" required autocomplete="off">
                  </div>

                  <div class="col-md-3" id="input-number">

                    เวลา :<div id="margin-between-time"></div>
                    <input type="time" id="TimeEnd" name="TimeEnd" value="<?= $row['TimeEnd'];?>" value="<?= $row['TimeEnd'];?>" style="height: 30px;" required autocomplete="off">
                  </div>
                </div>
              </div> <!-- form-row end.// -->
              <br><br>
              <hr class="style7">  <!--เส้นใต้-->
              <div class="alert alert-secondary" role="alert">
                สถานที่
              </div>
              <br>
              <div clss"from">
                <div class="col-12">
                  <input type="text" class="form-control" value="<?= $row['Place'];?>" placeholder="<?= $row['Place'];?>" name="Place" autocomplete="off" style="height: 120px;" required>
                </div> <!-- form-group end.// -->
                <br>



              </div>


              <hr class="style7">  <!--เส้นใต้-->

              <!-- *******************************************************************************************************************    -->
<!--
              <?php
               $sqlpd="select * from rentdetails where RentID=$_GET[RentID]";
               $result=$db->query($sqlpd);
               $rows=$result->fetch_array(MYSQLI_BOTH);


               ?> -->
              <?php


               // $sql="select * from products as r left join products on r.od_size_tentID=rentdetails.sizeID left join em_table on r.od_style_tableID=em_table.tableID where r.member_id='$_SESSION[sess_userID]'";

               $sql="select * FROM products left join rentdetails on products.ProductID = rentdetails.RentID where rentdetails.RentID='$_SESSION[sess_userID]'";
               // echo $sql;exit;
               $sqll="select * FROM rent left join rentdetails on rent.RentID = rentdetails.RentID where rent.rentID='$_SESSION[sess_userID]'";

               $data=[];
               $i=0;


               $result=$db->query($sqll);
               while($rows=$result->fetch_array(MYSQLI_ASSOC)){
                 $data[$i]=$rows['Amount'];
                 $i++;


                // $amountte=$rows["Amount"];


               }

               // $sql="select * from rent_order as r left join em_size on r.od_size_tentID=em_size.sizeID left join em_table on r.od_style_tableID=em_table.tableID where r.member_id='$_SESSION[sess_userID]'";
               // echo $sqll;exit;
// print_r($data[2]);
               ?>

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
                      $sql="select * from products";
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
                    <input type="number" name="AmountTent" id="AmountTent" min="1" max="50" style="height: 37px; width: 80px;" value="<?=$data[0]?>">
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
                      $sql="select * from products";
                      $result=$db->query($sql);
                      while ($row=$result->fetch_array(MYSQLI_BOTH)){
                        ?>
                        <option  value="<?php echo $row['ProductID']; ?>"><?php echo $row['ProductName']; ?></option>
                      <?php } ?>

                    </select>
                  </div>
                </div>

                <div class="col-md-3" id="input-numberr">
                  <div id="margin-between-bottom-textbox"></div> <div id="margin-between-bottom"></div> <input type="number"style="height: 37px; width: 80px;" name="AmountTable" id="AmountTable" min="1" max="50" style="height: 37px;" value="<?=$data[1]?>">
                </div>

              </div>
              <hr class="style7">
              <div class="row">
                <div class="col-md-5" id="input-number">
                  เก้าอี้&nbsp;&nbsp;&nbsp;(ราคา 5 บาท/ตัว)  <div id="margin-between-bottom"></div> <input type="number" name="AmountChair" id="AmountChair" min="1" max="50" style="height: 37px; width: 80px;" value="<?=$data[2]?>">
                </div>
              </div>



<input type="hidden" name="RentID" value="<?=$_GET['RentID']?>">

              <div class="form-row"></div>
              <!-- <div class="form-group col-md-6">
              <label>ตำบล</label>
              <select id="tambon" name="tambon" class="form-control" required>
              <option selected="">กรุณาเลือกตำบล</option>
              <option value="ในเมือง">ในเมือง</option>		   	<option value="ไตรตรึงษ์">ไตรตรึงษ์</option>			<option value="อ่างทอง">อ่างทอง</option>
              <option value="นาบ่อค">นาบ่อคำ</option>			  <option value="นครชุม">นครชุม</option>		  	<option value="ทรงธรรม">ทรงธรรม</option>
              <option value="ลานดอกไม">ลานดอกไม้</option>			<option value="หนองปลิง">หนองปลิง</option>			<option value="คณฑ">คณฑี</option>
              <option value="นิคมทุ่งโพธิ์ทะเล">นิคมทุ่งโพธิ์ทะเล</option>	<option value="เทพนคร">เทพนคร</option>		   <option value="วังทอง">วังทอง</option>
              <option value="ท่าขุนราม">ท่าขุนราม</option>			 <option value="คลองแม่ลาย">คลองแม่ลาย</option>		<option value="ธำมรงค">ธำมรงค์</option>
              <option value="สระแก้ว">สระแก้ว</option>

            </select>
          </div> -->

          <!-- <div class="form-group col-md-6">
          <label>อำเภอ</label>
          <select id="amphoe" name="amphoe" class="form-control" required>
          <option selected="">กรุณาเลือกอำเภอ</option>
          <option>เมืองกำแพงเพชร</option>	 <option>ไทรงาม</option>			  <option>คลองลาน</option>
          <option>ขาณุวรลักษบุรี</option>		 <option>คลองขลุง</option>		   <option>พรานกระต่าย</option>
          <option>ลานกระบือ</option>			 <option>ทรายทองวัฒนา</option>	<option>ปางศิลาทอง</option>
          <option>บึงสามัคคี</option>				 <option>โกสัมพีนคร</option>


        </select>
      </div> -->

      <hr class="style7">  <!--เส้นใต้-->

      <div class="form-row">
        <div class="container">
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block"> แก้ไขข้อมูล  </button><br>
            <div class= "text-right">
              <a class="btn btn-secondary" href="?page=rental_item0" role="button">ย้อนกลับ</a>
            </div>
          </div> <!-- form-group// -->
        </div>

      </article> <!-- card-body end .// -->

      <input type="hidden" name="orderID" value="<?=$_GET['orderID']?>">

      <!-- <div class="border-top card-body text-center">Have an account? <a href="?page=main">Log In</a></div> -->
    </div> <!-- card.// -->
  </form>
</article> <!-- card-body end .// -->

</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div>
<!--container end.//-->

<!-- ************************************************  ภาพ -->
<!--4.3-->
<div id="id01" class="modal">

  <form class="modal-content animate" method="post" action="?page=chkmember">

    <div class="container" id="size-pic">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img2/em44.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h5>เต็นท์ขนาด 4*4</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img2/em410.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>เต็นท์ขนาด 4*10</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img2/emtable2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>โต๊ะแบบวงกลม</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img2/emtable11.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>โต๊ะแบบสี่เหลี่ยม</h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </form>
</div>

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
<!--4.3-->
<br><br>
</body>
