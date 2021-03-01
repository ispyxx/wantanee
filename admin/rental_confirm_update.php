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
  margin-right: 30px;
}
#button-center{
    text-align: center;
    margin-left: 425px;
}
</style>
<body>

  <!-- <?php
  $sqls="select * from member where memberID='$_POST[memberID]'";
  // echo $sqls;exit;
  $results=$db->query($sqls);
  $rows=$results->fetch_array(MYSQLI_BOTH);
  // print_r($rows);exit;

  ?> -->

  <?php
  // $sqlss="select * from rentdetails  left join rent on rentdetails.RentID = rent.RentID left join products on rentdetails.productID = products.productID where rent.RentID='$_POST[RentID]'";
  // $sqlq="select * from member  left join rent on member.memberID = rent.RentID  where rent.RentID='$_GET[MemberID]'";
  // $sqlq="select * from member where memberID='$_POST[memberID]'";


  // $sqlq="select * from rent  left join member on rent.RentID = member.memberID  where rent.MemberID='$_POST[RentID]'";
// echo $sqlq;exit;
//   $resultss=$db->query($sqlq);
//   $rows=$resultss->fetch_array(MYSQLI_BOTH);
//   print_r($rows);exit;
//   ?>

  <?php
  $sql="select * from rent where memberID = '$_SESSION[sess_userID]'";
  $resultss=$db->query($sql);
  $row=$resultss->fetch_array(MYSQLI_BOTH);


  $datestart=changeDate($_POST["DateStart"]);
  $dateend=changeDate($_POST["DateEnd"]);

  $today=changeDate($_POST["SignDate"]);

  ?>

  <?php
  $sql="select MemberID from rent where RentID = '$_POST[RentID]'";
  $resultss=$db->query($sql);
  $rows=$resultss->fetch_array(MYSQLI_BOTH);

  $sqlq="select fname, lname from member where memberID = '$rows[MemberID]'";
  $resultss=$db->query($sqlq);
  $rowq=$resultss->fetch_array(MYSQLI_BOTH);
  // print_r($rowq);exit;


?>

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




  <div id="between-top">
    <div class="container col-9">
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

        <div class="date-center">
        <!-- <?=$_POST['datetoday'];?> -->
        วันที่&nbsp;&nbsp;<?= $today?>
        </div>

        <div class="member-info">
        ผู้ว่าจ้างงาน : คุณ <?php echo $rowq['fname']; ?>&nbsp;&nbsp;<?=$rowq['lname']; ?><br>
        สถานที่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?=$_POST['Place']; ?>
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
            <td><?=$_POST['RentID']; ?></td>
            <td> <?= $datestart?></td>
            <td><?=$dateend?></td>
          </tr>
        </tbody>
      </table>
      </div>
      </div>

        <div class="rent-details">
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

        <?php
        $sqls="select ProductName, ProductPrice from products where productID='$_POST[ProductTent]'";
        // echo $sqls;exit;
        $results=$db->query($sqls);
        $rows=$results->fetch_array(MYSQLI_ASSOC);


        $priceTent=$_POST['AmountTent']*$rows['ProductPrice']
        ?>
        <tbody>
          <tr>
            <td><?=$_POST['AmountTent']; ?></td>
            <td><?=$_POST['ProductTent']; ?></td>
            <td><?= $rows['ProductName']; ?></td>
            <td><?= $rows['ProductPrice'];?></td>
            <td><?=number_format ($priceTent)?></td>
          </tr>

          <?php
          $sqls="select ProductName, ProductPrice from products where productID='$_POST[ProductTable]'";
          $results=$db->query($sqls);
          $rows=$results->fetch_array(MYSQLI_ASSOC);
          $priceTable=$_POST['AmountTable']*$rows['ProductPrice']
          ?>

          <tr>
            <td><?php echo $_POST['AmountTable']; ?></td>
            <td><?php echo $_POST['ProductTable']; ?></td>
            <td><?php echo $rows['ProductName']; ?></td>
            <td><?php echo $rows['ProductPrice']; ?></td>
            <td><?=number_format ($priceTable)?></td>
          </tr>

          <?php
          $sqls="select ProductName, ProductPrice from products where productID='$_POST[ProductTable]'";
          $results=$db->query($sqls);
          $rows=$results->fetch_array(MYSQLI_ASSOC);
          $priceChair=$_POST['AmountChair']*5;
          ?>

          <tr>
            <td><?= $_POST['AmountChair']; ?></td>
            <td>12</td>
            <td>เก้าอี้</td>
            <td><?='5'?></td>
            <td><?=number_format ($priceChair)?></td>
          </tr>
        </tbody>

      </table>
      </div>
      </div>


      <?php

            $discount=0;
            $allprice=$priceTent+$priceTable+$priceChair;

       // $datesumprice=getNumDay($rows["DateStart"],$rows["DateEnd"]);
            $datesum= getNumDay($_POST["DateStart"],$_POST["DateEnd"]);
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
        <input type="hidden" name="RentID" value="<?=$_POST['RentID']?>">
          <input type="hidden" name="MemberID" id="MemberID" value="<?=$rowq['MemberID']?>">
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


          <input type="hidden"  name="SignDate"  id="SignDate" value="<?=date('Y-m-d')?>"/>


          <div class="container" id="button-center">
          <div class="row">
            <div class="col-">
            <a class="btn btn-secondary" href="?page=rental" role="button">ย้อนกลับ</a>
              </div>
              <div class="col-2">
              <button type="submit" class="btn btn-success">แก้ไข</button>
              <!-- <a onclick="document.getElementById('id01').style.display='block'" class="btn btn-success btn-lg">Login</a> -->

              </div>
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
 url:"rental_update.php",
 data: formData,
 cache:false,
 contentType: false,
 processData: false,
 success: (data) => {
   if (data) {
     console.log(data);

     // alert(data);

     // alert('5555');
     // print_r(data);
     Swal.fire({
         position: 'center',
         icon: 'success',
         title: 'Your work has been saved',
         showConfirmButton: false,
         timer: 2000,
         // console.log(data);
         // alert(data)
         // window.location.reload("rental.php");

       })}

       var delayInMilliseconds = 2000; //1 second

    setTimeout(function() {
    window.location='?page=rental_info';
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
