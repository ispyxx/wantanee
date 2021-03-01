<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>

<!-- อะเลิท -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

<style>
body{
  font-size: 1.1em;
  font-family: "Chakra Petch", sans-serif;
}

p.groove {border-style: groove;}

#border-main{border-style: groove;}

#between-top{
  margin-top: 50px;
}

/* #head-top{
margin-top: 20px;
margin-left: 350px;
} */

#head-top.center {
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}
.center {
  text-align: center;
}
.head-center{
  text-align: center;
  font-size: 1.3em;
}
.date-center{
  text-align: center;
  margin-top: 20px;
}
.member-info{
  margin-top: 20px;
  margin-left: 20px;
}
.rent-details{
  margin-top: 50px;
  margin-left: 158px;
}
.price{
  margin-top: 20px;
  text-align: right;
  margin-right: 190px;
  margin-bottom: 30px;
}
#form-address {
  text-align: right;
  margin-top: 50px;
  margin-right: 40px;
}
#button-center{
  text-align: center;
  margin-left: 500px;
}
#details-user{
  margin-bottom: 30px;
  margin-left: 30px;
}
#rent-details{
  margin-bottom: 15px;
}

	@media print{
		#hid{
		   display: none; /* ซ่อน  */
		}
	}

</style>
<body>
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

  <?php
  $sqll="select * from rent";
  $resultss=$db->query($sqll);
  $rows=$resultss->fetch_array(MYSQLI_BOTH);
  ?>

  <?php
  // $sql="select * from rent where";
  $sql="select * from rent left join rentdetails on rent.RentID=rentdetails.RentID left join products on rentdetails.RentID=products.ProductID where rent.RentID = '$_GET[RentID]'";
  // echo $sql;exit;

    $result=$db->query($sql);
    $row=$result->fetch_array(MYSQLI_BOTH);

    // print_r($row);exit;
    $datestart=changeDate($row["DateStart"]);
    $dateend=changeDate($row["DateEnd"]);
    $today=changeDate($row["SignDate"]);

// print_r($row);exit;
    ?>

   <?php
    // $sqls="select * from member where memberID='$row[RentID]'";
    $sqls="select * from member left join rent on member.memberID=rent.RentID where member.memberID = '$row[MemberID]'";
    // echo $sqls;exit;
    $results=$db->query($sqls);
    $rowss=$results->fetch_array(MYSQLI_BOTH);


    ?>

      <div id="between-top">
        <div class="container col-10">
          <div id="border-main">
            <div class="head-center">
              <div id="between-top">
                ใบเรียกเก็บเงิน<br>
                ร้านวันทนีบริการ
              </div>
            </div>

            <div id="form-address">
              55 ซ.10  ถ.เทศา 1 ต.ในเมือง <br>อ.เมือง จ.กำแพงเพชร 62000
            </div>

          <div id="details-user">
            <div class="date-center">
              <!-- <?=$_POST['datetoday'];?> -->
              วันที่&nbsp;&nbsp;<?=$today?>
            </div>

            <div class="member-info">
              ผู้ว่าจ้างงาน : คุณ <?=$rowss['fname'];?>&nbsp;&nbsp;<?=$rowss['lname']; ?><br>
              สถานที่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?=$row['Place']; ?>
            </div>
          </div>



            <div class="container col-8">
              <div class="center">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">รหัสการเช่า</th>
                      <th scope="col">เริ่มงานเมื่อ</th>
                      <th scope="col">สิ้นสุดเมื่อ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?=$row['RentID']; ?></td>
                      <td> <?= $datestart?></td>
                      <td><?=$dateend?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="rent-details" id="rent-details">
              รายละเอียดการเช่า
            </div>

            <div class="container col-8">
              <div class="center">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">จำนวน</th>
                      <th scope="col">รหัสอุปกรณ์</th>
                      <th scope="col">ชื่ออุปกรณ์</th>
                      <th scope="col">ราคา</th>
                      <th scope="col">รวม(บาท)</th>
                    </tr>
                  </thead>

                  <!-- <?php
                  $sqls="select ProductName, ProductPrice from products ";

                  $results=$db->query($sqls);
                  $rows=$results->fetch_array(MYSQLI_ASSOC);


                  $priceTent=$_POST['AmountTent']*$rows['ProductPrice']
                  ?> -->
<?php
                  $sqlss="select * from rentdetails  left join rent on rentdetails.RentID = rent.RentID left join products on rentdetails.productID = products.productID where rent.RentID='$_GET[RentID]'";

                  // echo $sqlss;exit;
                  // $sql="select * from rentdetails left join rent on r.RentID=rentdetails.RentID where r.member_id='$_SESSION[sess_userID]'";

                    $result=$db->query($sqlss);
                    $data=[];
                    $i=0;
                      $priceTent=0;
                      $priceTable=0;
                      $priceChair=0;

                  while($rowsall=$result->fetch_array(MYSQLI_ASSOC)){
                    $data[$i]=$rowsall;
                    $i++;


                  }

                  $priceTent=$data[0]['Amount']*$data[0]['ProductPrice'];
                  $priceTable=$data[1]['Amount']*$data[1]['ProductPrice'];
                  $priceChair=$data[2]['Amount']*$data[2]['ProductPrice'];
                  ?>


                  <tbody>
                    <tr>
                      <td><?=$data[0]['Amount']; ?></td>
                      <td><?=$data[0]['ProductID']; ?></td>
                      <td><?= $data[0]['ProductName']; ?></td>
                      <td><?=number_format($data[0]['ProductPrice']);?></td>
                      <td><?=number_format($priceTent)?></td>
                    </tr>

                    <tr>
                      <td><?= $data[1]['Amount']; ?></td>
                      <td><?= $data[1]['ProductID']; ?></td>
                      <td><?= $data[1]['ProductName'];?></td>
                      <td><?=number_format($data[1]['ProductPrice']); ?></td>
                      <td><?=number_format($priceTable)?></td>
                    </tr>

                    <tr>
                      <td><?= $data[2]['Amount']; ?></td>
                      <td>12</td>
                      <td>เก้าอี้</td>
                      <td><?= number_format($data[2]['ProductPrice']); ?></td>
                      <td><?=number_format($priceChair)?></td>
                    </tr>

                  </tbody>

                </table>
              </div>
            </div>

            <?php

                  $discount=0;
                  $allprice=$priceTent+$priceTable+$priceChair;

             // $datesumprice=getNumDay($rows["DateStart"],$rows["DateEnd"]);
                  $datesum= getNumDay($row["DateStart"],$row["DateEnd"]);
                  $priceanddate=$allprice*$datesum;
        // echo $priceanddate;exit;

                  if ($datesum>=5) {
                    $discount=$priceanddate*(10/100);
                  }
                    $sum=$priceanddate-$discount;


                    // if ($datesum>=5) {
                    //   $datesum
                    // }
            ?>

                  <div class="price">
                    <b>รวม &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=number_format ($allprice)?>&nbsp;&nbsp;&nbsp;บาท<br>
                       ส่วนลด &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=number_format ($discount)?>&nbsp;&nbsp;&nbsp;บาท<br>
                       เช่าทั้งหมด&nbsp; <?=$datesum?>วัน &nbsp;รวมสุทธิ&nbsp;&nbsp;&nbsp; <?=number_format ($sum)?>&nbsp;&nbsp;บาท<br></b>
                  </div>



            </div> <!--กรอบ-->
          </div>

        </div>


        <form action="#" method="post" novalidate="novalidate" id="form2">

          <input type="hidden" name="MemberID" id="MemberID" value="<?=$_SESSION['sess_userID']?>">
          <input type="hidden" name="Status" id="Status" value="1">

          <input type="hidden" name="DateStart" id="DateStart" value="<?=$_POST['DateStart']?>">
          <input type="hidden" name="DateEnd" id="DateEnd" value="<?=$_POST['DateEnd']?>">

          <input type="hidden" name="TimeStart" id="TimeStart" value="<?=$_POST['TimeStart']; ?>">
          <input type="hidden" name="TimeEnd" id="TimeEnd" value="<?=$_POST['TimeEnd']; ?>">

          <input type="hidden" name="Place" id="Place" value="<?=$_POST['Place']; ?>">

          <input type="hidden" name="AmountTent" id="AmountTent" value="<?=$_POST['AmountTent']; ?>">
          <input type="hidden" name="ProductTent" id="ProductTent" value="<?=$_POST['ProductTent']; ?>">

          <input type="hidden" name="AmountTable" id="AmountTable" value="<?=$_POST['AmountTable']; ?>">
          <input type="hidden" name="ProductTable" id="ProductTable" value="<?=$_POST['ProductTable']; ?>">


          <input type="hidden" name="AmountChair" id="AmountChair" value="<?= $_POST['AmountChair']; ?>">


          <div class="container" id="button-center">
            <div class="row">
              <div class="col-" id="hid">
                <a class="btn btn-secondary" href="?page=rental_info" role="button">ย้อนกลับ</a>
              </div>
              &nbsp;&nbsp;
            <div class="col-">
              <button id="hid" onclick="window.print();" class="btn btn-primary"> พิมพ์ </button>
            </div>

              <!-- <div class="col-2">
                <button type="submit" class="btn btn-success">ยืนยันการเช่า</button>
              </div> -->
            </div>
          </div>
        </form>


        <script type="text/javascript">
        $(function(){

          // เมื่อฟอร์มการเรียกใช้ evnet submit ข้อมูล
          $("#form2").on("submit",function(e){
            e.preventDefault();
            // Swal.fire(
            //   'Good job!',
            //   'You clicked the button!',
            //   'success'
            // )

            // var formData = $(this).serialize();
            var formData = new FormData(this);

            $.ajax({
              type:'POST',
              url:"rental_save.php",
              data: formData,
              cache:false,
              contentType: false,
              processData: false,
              success: (data) => {
                if (data) {
                  Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 2000,
                    // window.location.reload("rental.php");

                  })}

                  var delayInMilliseconds = 2000; //1 second

                  setTimeout(function() {
                    window.location='?page=my_list';
                    //your code to be executed after 1 second
                  }, delayInMilliseconds);


                  // } if (data=='N') {
                  //   Swal.fire({
                  //       icon: 'error',
                  //       title: 'Oops...',
                  //       text: 'ไม่สามารถบันทึกข้อมูลได้!',
                  //       footer: 'อาจป้อนข้อมูลไม่ครบ'
                  //     });
                  // }else {
                  //   alert(data);
                  // }


                }
              });




            });

          });
          </script>

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

        </body>
