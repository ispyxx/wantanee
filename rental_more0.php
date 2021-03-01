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
    margin-left: 625px;
}
</style>
<body>




  <?php
  $sqlmember="select * from member where MemberID='$_SESSION[sess_userID]'";
  $results=$db->query($sqlmember);
  $rows=$results->fetch_array(MYSQLI_BOTH);
  ?>



     <?php
    $sqlrent="select * from rent where RentID='$_GET[RentID]'";
    // $sqlrent="select * from rent where RentID='$rows[memberID]'";
    // // $sqlrent="select * from rent where RentID='$_SESSION[sess_userID]'";
    // echo "<br><br><br><br><br>";
    // echo $sqlrent;exit;

    $results=$db->query($sqlrent);
    $rowz=$results->fetch_array(MYSQLI_BOTH);


      $datestart=changeDate($rowz["DateStart"]);
      $dateend=changeDate($rowz["DateEnd"]);

      $today=changeDate($rowz["SignDate"]);


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
    <div class="container col-7">
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
        วันที่&nbsp;&nbsp;<?=$today?>
        </div>

        <div class="member-info">
        ผู้ว่าจ้างงาน : คุณ <?=$rows['fname']; ?>&nbsp;&nbsp;<?=$rows['lname']; ?><br>
        สถานที่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?=$rowz['Place']; ?>
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
            <td><?=$rowz['RentID'];?></td>
            <td><?= $datestart?></td>
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
        // $sqls="select ProductName, ProductPrice from products where productID='$_POST[ProductTent]'where 	RentID = '$row[RentID]'";

        // $sqls="select * from rentdetails  left join rent on rentdetails.RentID = rent.RentID left join products on rentdetails.RentID = products.productID where rentdetails.MemberID='$_SESSION[sess_userID]'";
        // $sqls="select * from rent  left join rentdetails on rent.RentID = rentdetails.RentID left join products on rentdetails.RentID = products.productID where rent.RentID= '$row[RentID]'";

        $sqlss="select * from rentdetails  left join rent on rentdetails.RentID = rent.RentID left join products on rentdetails.productID = products.productID where rent.RentID='$_GET[RentID]'";

        // echo $sqlss;exit;
        // $sql="select * from rentdetails left join rent on r.RentID=rentdetails.RentID where r.member_id='$_SESSION[sess_userID]'";

          $result=$db->query($sqlss);
          $data=[];
          $i=0;

        while($rowsall=$result->fetch_array(MYSQLI_ASSOC)){
          $data[$i]=$rowsall;
          $i++;
          // print_r($data);exit;

        }

        $priceTent=$data[0]['Amount']*$data[0]['ProductPrice']
        ?>

        <tbody>
          <tr>
            <td><?=$data[0]['Amount']; ?></td>
            <td><?=$data[0]['ProductID']; ?></td>
            <td><?= $data[0]['ProductName']; ?></td>
            <td><?=number_format($data[0]['ProductPrice']);?></td>
            <td><?=number_format($priceTent)?></td>
          </tr>

          <?php
          $sqls="select ProductName, ProductPrice from products";
          $results=$db->query($sqls);
          $rows=$results->fetch_array(MYSQLI_ASSOC);
          $priceTable=$data[1]['Amount']*$data[1]['ProductPrice']
          ?>

          <tr>
            <td><?= $data[1]['Amount']; ?></td>
            <td><?= $data[1]['ProductID']; ?></td>
            <td><?= $data[1]['ProductName'];?></td>
            <td><?=number_format($data[1]['ProductPrice']); ?></td>
            <td><?=number_format($priceTable)?></td>
          </tr>

          <?php
          $sqls="select ProductName, ProductPrice from products";
          $results=$db->query($sqls);
          $rows=$results->fetch_array(MYSQLI_ASSOC);
          $priceChair=$data[2]['Amount']*$data[2]['ProductPrice']
          ?>

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


      <?php $allprice=$priceTent+$priceTable+$priceChair?>
      <div class="price">
        <b>รวม &nbsp;&nbsp;<?=number_format ($allprice)?><br>
           ส่วนลด &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
           รวมสุทธิ&nbsp;&nbsp; <?=number_format ($allprice)?><br></b>
      </div>
</div>

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
            <div class="col-">
            <a class="btn btn-secondary" href="?page=rental" role="button">ย้อนกลับ</a>
              </div>
              <div class="col-2">
              <button type="submit" class="btn btn-success">ยืนยันการเช่า</button>
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



 }
});




    });

 });
  </script>


</body>
