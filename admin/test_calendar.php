<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>





<style>

body {
  font-family: "Chakra Petch", sans-serif;
  color: #777;
}

#margin-1{
  /* margin-left: 80px; */
  margin-top: 50px;
  margin-bottom: 40px;
}
#margin-2{
  margin-left: 130px;

}


</style>

<body>
<div class="container" id="margin-1">
      <div id="margin-2"><h3>รายงานสรุปการเช่าและค่าเช่าอุปกรณ์จำแนกตามเดือน</h3></div>
</div>
  <?php
  	 $sql="select * from rent_order";
  	 $result=$db->query($sql);
  	 // $row=$result->fetch_array(MYSQLI_BOTH);
     while($row=$result->fetch_array(MYSQLI_ASSOC)){
     }
   ?>



   <?php



   $sql2="SELECT YEAR(`od_date_start`) AS `year`,
   SUM(IF(MONTH(`od_date_start`)=1,`od_size_tentID`,NULL)) AS `1`,
   SUM(IF(MONTH(`od_date_start`)=2,`od_size_tentID`,NULL)) AS `2`,
   SUM(IF(MONTH(`od_date_start`)=3,`od_size_tentID`,NULL)) AS `3`,
   SUM(IF(MONTH(`od_date_start`)=4,`od_size_tentID`,NULL)) AS `4`,
   SUM(IF(MONTH(`od_date_start`)=5,`od_size_tentID`,NULL)) AS `5`,
   SUM(IF(MONTH(`od_date_start`)=6,`od_size_tentID`,NULL)) AS `6`,
   SUM(IF(MONTH(`od_date_start`)=7,`od_size_tentID`,NULL)) AS `7`,
   SUM(IF(MONTH(`od_date_start`)=8,`od_size_tentID`,NULL)) AS `8`,
   SUM(IF(MONTH(`od_date_start`)=9,`od_size_tentID`,NULL)) AS `9`,
   SUM(IF(MONTH(`od_date_start`)=10,`od_size_tentID`,NULL)) AS `10`,
   SUM(IF(MONTH(`od_date_start`)=11,`od_size_tentID`,NULL)) AS `11`,
   SUM(IF(MONTH(`od_date_start`)=12,`od_size_tentID`,NULL)) AS `12`
   FROM `rent_order` WHERE `od_size_tentID` !=1 GROUP BY `year`";
   // echo $sql;exit;
   $result=$db->query($sql2);
   $row2=$result->fetch_array(MYSQLI_ASSOC);
   // print_r($row1);exit;
   // print_r($row1);exit;

   $sql1="SELECT YEAR(`od_date_start`) AS `year`,
   SUM(IF(MONTH(`od_date_start`)=1,`od_size_tentID`,NULL)) AS `1`,
   SUM(IF(MONTH(`od_date_start`)=2,`od_size_tentID`,NULL)) AS `2`,
   SUM(IF(MONTH(`od_date_start`)=3,`od_size_tentID`,NULL)) AS `3`,
   SUM(IF(MONTH(`od_date_start`)=4,`od_size_tentID`,NULL)) AS `4`,
   SUM(IF(MONTH(`od_date_start`)=5,`od_size_tentID`,NULL)) AS `5`,
   SUM(IF(MONTH(`od_date_start`)=6,`od_size_tentID`,NULL)) AS `6`,
   SUM(IF(MONTH(`od_date_start`)=7,`od_size_tentID`,NULL)) AS `7`,
   SUM(IF(MONTH(`od_date_start`)=8,`od_size_tentID`,NULL)) AS `8`,
   SUM(IF(MONTH(`od_date_start`)=9,`od_size_tentID`,NULL)) AS `9`,
   SUM(IF(MONTH(`od_date_start`)=10,`od_size_tentID`,NULL)) AS `10`,
   SUM(IF(MONTH(`od_date_start`)=11,`od_size_tentID`,NULL)) AS `11`,
   SUM(IF(MONTH(`od_date_start`)=12,`od_size_tentID`,NULL)) AS `12`
   FROM `rent_order` WHERE `od_size_tentID` !=2 GROUP BY `year`";

   // echo $sql2;exit;
   $result=$db->query($sql1);
   $row1=$result->fetch_array(MYSQLI_ASSOC);
   // echo $row;exit;
   // print_r($row2);exit;


   $sql11="SELECT YEAR(`od_size_tentID`) AS `year`,
   SUM(IF(MONTH(`od_size_tentID`)=1,`od_amount_table`,NULL)) AS `1`,
   SUM(IF(MONTH(`od_size_tentID`)=2,`od_amount_table`,NULL)) AS `2`,
   SUM(IF(MONTH(`od_size_tentID`)=3,`od_amount_table`,NULL)) AS `3`,
   SUM(IF(MONTH(`od_size_tentID`)=4,`od_amount_table`,NULL)) AS `4`,
   SUM(IF(MONTH(`od_size_tentID`)=5,`od_amount_table`,NULL)) AS `5`,
   SUM(IF(MONTH(`od_size_tentID`)=6,`od_amount_table`,NULL)) AS `6`,
   SUM(IF(MONTH(`od_size_tentID`)=7,`od_amount_table`,NULL)) AS `7`,
   SUM(IF(MONTH(`od_size_tentID`)=8,`od_amount_table`,NULL)) AS `8`,
   SUM(IF(MONTH(`od_size_tentID`)=9,`od_amount_table`,NULL)) AS `9`,
   SUM(IF(MONTH(`od_size_tentID`)=10,`od_amount_table`,NULL)) AS `10`,
   SUM(IF(MONTH(`od_size_tentID`)=11,`od_amount_table`,NULL)) AS `11`,
   SUM(IF(MONTH(`od_size_tentID`)=12,`od_amount_table`,NULL)) AS `12`
   FROM `rent_order` WHERE `od_amount_table` !=1 GROUP BY `year`";
   // echo $sql11;exit;
   $result=$db->query($sql11);
   $row11=$result->fetch_array(MYSQLI_ASSOC);
   //print_r($row11);exit;
   $sqls = "select orderID,od_date_start,od_size_tentID,od_amount_tent from rent_order order by od_date_start asc";
   $results=$db->query($sqls);
   $data=[];
   $i=0;
   while($rows=$results->fetch_array(MYSQLI_ASSOC)){
     $data[$i]=$rows;
     $i++;
   }
   $monthtent=[];
   foreach ($data as $key => $value) {

     $get_date = explode("-",$value['od_date_start']);
     $monthtent[$get_date[1]]=[];

   }
   foreach ($monthtent as $k=> $v) {
     $a1=0;
     $a2=0;
     $a3=0;
     foreach ($data as $key => $value) {
       $get_date = explode("-",$value['od_date_start']);
       $m=$get_date[1];
       if ($k==$m) {
         if ($value['od_size_tentID']==1) {
           $a1+=$value['od_amount_tent'];
         }
         if ($value['od_size_tentID']==2) {
           $a2+=$value['od_amount_tent'];
         }
         if ($value['od_size_tentID']==3) {
           $a3+=$value['od_amount_tent'];
         }
         $monthtent[$k][1]=$a1;
         $monthtent[$k][2]=$a2;
         $monthtent[$k][3]=$a3;
       }
     }
   }

    ?>


    <!-- ******************************************************************* โต๊ะ -->
    <?php

    $sql2="SELECT YEAR(`od_date_start`) AS `year`,
    SUM(IF(MONTH(`od_date_start`)=1,`od_style_tableID`,NULL)) AS `1`,
    SUM(IF(MONTH(`od_date_start`)=2,`od_style_tableID`,NULL)) AS `2`,
    SUM(IF(MONTH(`od_date_start`)=3,`od_style_tableID`,NULL)) AS `3`,
    SUM(IF(MONTH(`od_date_start`)=4,`od_style_tableID`,NULL)) AS `4`,
    SUM(IF(MONTH(`od_date_start`)=5,`od_style_tableID`,NULL)) AS `5`,
    SUM(IF(MONTH(`od_date_start`)=6,`od_style_tableID`,NULL)) AS `6`,
    SUM(IF(MONTH(`od_date_start`)=7,`od_style_tableID`,NULL)) AS `7`,
    SUM(IF(MONTH(`od_date_start`)=8,`od_style_tableID`,NULL)) AS `8`,
    SUM(IF(MONTH(`od_date_start`)=9,`od_style_tableID`,NULL)) AS `9`,
    SUM(IF(MONTH(`od_date_start`)=10,`od_style_tableID`,NULL)) AS `10`,
    SUM(IF(MONTH(`od_date_start`)=11,`od_style_tableID`,NULL)) AS `11`,
    SUM(IF(MONTH(`od_date_start`)=12,`od_style_tableID`,NULL)) AS `12`
    FROM `rent_order` WHERE `od_style_tableID` !=1 GROUP BY `year`";
    // echo $sql;exit;
    $result=$db->query($sql2);
    $row2=$result->fetch_array(MYSQLI_ASSOC);
    // print_r($row1);exit;
    // print_r($row1);exit;

    $sql1="SELECT YEAR(`od_date_start`) AS `year`,
    SUM(IF(MONTH(`od_date_start`)=1,`od_style_tableID`,NULL)) AS `1`,
    SUM(IF(MONTH(`od_date_start`)=2,`od_style_tableID`,NULL)) AS `2`,
    SUM(IF(MONTH(`od_date_start`)=3,`od_style_tableID`,NULL)) AS `3`,
    SUM(IF(MONTH(`od_date_start`)=4,`od_style_tableID`,NULL)) AS `4`,
    SUM(IF(MONTH(`od_date_start`)=5,`od_style_tableID`,NULL)) AS `5`,
    SUM(IF(MONTH(`od_date_start`)=6,`od_style_tableID`,NULL)) AS `6`,
    SUM(IF(MONTH(`od_date_start`)=7,`od_style_tableID`,NULL)) AS `7`,
    SUM(IF(MONTH(`od_date_start`)=8,`od_style_tableID`,NULL)) AS `8`,
    SUM(IF(MONTH(`od_date_start`)=9,`od_style_tableID`,NULL)) AS `9`,
    SUM(IF(MONTH(`od_date_start`)=10,`od_style_tableID`,NULL)) AS `10`,
    SUM(IF(MONTH(`od_date_start`)=11,`od_style_tableID`,NULL)) AS `11`,
    SUM(IF(MONTH(`od_date_start`)=12,`od_style_tableID`,NULL)) AS `12`
    FROM `rent_order` WHERE `od_style_tableID` !=2 GROUP BY `year`";

    // echo $sql2;exit;
    $result=$db->query($sql1);
    $row1=$result->fetch_array(MYSQLI_ASSOC);
    // echo $row;exit;
    // print_r($row2);exit;



    $sql11="SELECT YEAR(`od_style_tableID`) AS `year`,
    SUM(IF(MONTH(`od_style_tableID`)=1,`od_amount_table`,NULL)) AS `1`,
    SUM(IF(MONTH(`od_style_tableID`)=2,`od_amount_table`,NULL)) AS `2`,
    SUM(IF(MONTH(`od_style_tableID`)=3,`od_amount_table`,NULL)) AS `3`,
    SUM(IF(MONTH(`od_style_tableID`)=4,`od_amount_table`,NULL)) AS `4`,
    SUM(IF(MONTH(`od_style_tableID`)=5,`od_amount_table`,NULL)) AS `5`,
    SUM(IF(MONTH(`od_style_tableID`)=6,`od_amount_table`,NULL)) AS `6`,
    SUM(IF(MONTH(`od_style_tableID`)=7,`od_amount_table`,NULL)) AS `7`,
    SUM(IF(MONTH(`od_style_tableID`)=8,`od_amount_table`,NULL)) AS `8`,
    SUM(IF(MONTH(`od_style_tableID`)=9,`od_amount_table`,NULL)) AS `9`,
    SUM(IF(MONTH(`od_style_tableID`)=10,`od_amount_table`,NULL)) AS `10`,
    SUM(IF(MONTH(`od_style_tableID`)=11,`od_amount_table`,NULL)) AS `11`,
    SUM(IF(MONTH(`od_style_tableID`)=12,`od_amount_table`,NULL)) AS `12`
    FROM `rent_order` WHERE `od_amount_table` !=1 GROUP BY `year`";
    // echo $sql11;exit;
    $result=$db->query($sql11);
    $row11=$result->fetch_array(MYSQLI_ASSOC);
    //print_r($row11);exit;
    $sqls = "select orderID,od_date_start,od_style_tableID,od_amount_table from rent_order order by od_date_start asc";
    $results=$db->query($sqls);
    $data=[];
    $i=0;
    while($rows=$results->fetch_array(MYSQLI_ASSOC)){
      $data[$i]=$rows;
      $i++;
    }
    $month=[];
    foreach ($data as $key => $value) {

      $get_date = explode("-",$value['od_date_start']);
      $month[$get_date[1]]=[];

    }
    foreach ($month as $k=> $v) {
      $a1=0;
      $a2=0;
      foreach ($data as $key => $value) {
        $get_date = explode("-",$value['od_date_start']);
        $m=$get_date[1];
        if ($k==$m) {
          if ($value['od_style_tableID']==1) {
            $a1+=$value['od_amount_table'];
          }
          if ($value['od_style_tableID']==2) {
            $a2+=$value['od_amount_table'];
          }
          $month[$k][1]=$a1;
          $month[$k][2]=$a2;
        }
      }
    }

    $pricetable1=$month[$k][1]*10;
    $pricetable2=$month[$k][2]*10;

     ?>



     <!-- ********************************************************************* เก้าอี้ -->
      <?php
     $pricechair=0;

     $sql="SELECT YEAR(`od_date_start`) AS `year`,
     SUM(IF(MONTH(`od_date_start`)=1,`od_amount_chair`,NULL)) AS `1`,
     SUM(IF(MONTH(`od_date_start`)=2,`od_amount_chair`,NULL)) AS `2`,
     SUM(IF(MONTH(`od_date_start`)=3,`od_amount_chair`,NULL)) AS `3`,
     SUM(IF(MONTH(`od_date_start`)=4,`od_amount_chair`,NULL)) AS `4`,
     SUM(IF(MONTH(`od_date_start`)=5,`od_amount_chair`,NULL)) AS `5`,
     SUM(IF(MONTH(`od_date_start`)=6,`od_amount_chair`,NULL)) AS `6`,
     SUM(IF(MONTH(`od_date_start`)=7,`od_amount_chair`,NULL)) AS `7`,
     SUM(IF(MONTH(`od_date_start`)=8,`od_amount_chair`,NULL)) AS `8`,
     SUM(IF(MONTH(`od_date_start`)=9,`od_amount_chair`,NULL)) AS `9`,
     SUM(IF(MONTH(`od_date_start`)=10,`od_amount_chair`,NULL)) AS `10`,
     SUM(IF(MONTH(`od_date_start`)=11,`od_amount_chair`,NULL)) AS `11`,
     SUM(IF(MONTH(`od_date_start`)=12,`od_amount_chair`,NULL)) AS `12`
     FROM `rent_order` GROUP BY `year`";
     $result=$db->query($sql);
     // $row=$result->fetch_array(MYSQLI_ASSOC);
     // echo $row;exit;

     while($row=$result->fetch_array(MYSQLI_ASSOC)){
       $pricechair=$row[1]*5;
       // print_r($row[1]);exit;

// print_r($monthtent[$k][1]);exit;
$price1=(($monthtent['01'][1]*700)+($monthtent['01'][2]*700)+($monthtent['01'][3]*700)+($month['01'][1]*10)+($month['01'][2]*10)+$row[1]*5);
$price2=(($monthtent['02'][1]*700)+($monthtent['02'][2]*700)+($monthtent['02'][3]*700)+($month['02'][1]*10)+($month['02'][2]*10)+$row[2]*5);
$price3=(($monthtent['03'][1]*700)+($monthtent['03'][2]*700)+($monthtent['03'][3]*700)+($month['03'][1]*10)+($month['03'][2]*10)+$row[3]*5);
$price4=(($monthtent['04'][1]*700)+($monthtent['04'][2]*700)+($monthtent['04'][3]*700)+($month['04'][1]*10)+($month['04'][2]*10)+$row[4]*5);
$price5=(($monthtent['05'][1]*700)+($monthtent['05'][2]*700)+($monthtent['05'][3]*700)+($month['05'][1]*10)+($month['05'][2]*10)+$row[5]*5);
$price6=(($monthtent['06'][1]*700)+($monthtent['06'][2]*700)+($monthtent['06'][3]*700)+($month['06'][1]*10)+($month['06'][2]*10)+$row[6]*5);

$price7=(($monthtent['07'][1]*700)+($monthtent['07'][2]*700)+($monthtent['07'][3]*700)+($month['07'][1]*10)+($month['07'][2]*10)+$row[7]*5);
$price8=(($monthtent['08'][1]*700)+($monthtent['08'][2]*700)+($monthtent['08'][3]*700)+($month['08'][1]*10)+($month['08'][2]*10)+$row[8]*5);
$price9=(($monthtent['09'][1]*700)+($monthtent['09'][2]*700)+($monthtent['09'][3]*700)+($month['09'][1]*10)+($month['09'][2]*10)+$row[9]*5);
$price10=(($monthtent['10'][1]*700)+($monthtent['10'][2]*700)+($monthtent['10'][3]*700)+($month['10'][1]*10)+($month['10'][2]*10)+$row[10]*5);
$price11=(($monthtent['11'][1]*700)+($monthtent['11'][2]*700)+($monthtent['11'][3]*700)+($month['11'][1]*10)+($month['11'][2]*10)+$row[11]*5);
$price12=(($monthtent['12'][1]*700)+($monthtent['12'][2]*700)+($monthtent['12'][3]*700)+($month['12'][1]*10)+($month['12'][2]*10)+$row[12]*5);

// print_r($priceall);exit;
     	?>


  <div class="container col-8">
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Jan" aria-expanded="false" aria-controls="flush-collapseOne">
        ประจำเดือน มกราคม
      </button>
    </h2>
    <div id="Jan" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">



      </div>
  </div>
  <!--  -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Feb" aria-expanded="false" aria-controls="flush-collapseTwo">
        ประจำเดือน กุมภาพันธ์
      </button>
    </h2>
    <div id="Feb" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">



      </div>
  </div>
  <!--  -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Mar" aria-expanded="false" aria-controls="flush-collapseThree">
        ประจำเดือน มีนาคม
      </button>
    </h2>
    <div id="Mar" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">


        </div>
  </div>
  <!--  -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Apr" aria-expanded="false" aria-controls="flush-collapseThree">
        ประจำเดือน เมษายน
      </button>
    </h2>
    <div id="Apr" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">



      </div>
  </div>
  <!--  -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#May" aria-expanded="false" aria-controls="flush-collapseThree">
        ประจำเดือน พฤษภาคม
      </button>
    </h2>
    <div id="May" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">


      </div>
  </div>
  <!--  -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Jun" aria-expanded="false" aria-controls="flush-collapseThree">
        ประจำเดือน มิถุนายน
      </button>
    </h2>
    <div id="Jun" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">



        </div>
  </div>



  <!--  -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Jul" aria-expanded="false" aria-controls="flush-collapseThree">
        ประจำเดือน กรกฎาคม
      </button>
    </h2>
    <div id="Jul" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">


        </div>
  </div>
  <!--  -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Aug" aria-expanded="false" aria-controls="flush-collapseThree">
        ประจำเดือน สิงหาคม
      </button>
    </h2>
    <div id="Aug" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">

        </div>
  </div>
  <!--  -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Sep" aria-expanded="false" aria-controls="flush-collapseThree">
        ประจำเดือน กันยายน
      </button>
    </h2>
    <div id="Sep" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">


        </div>
  </div>
  <!--  -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Oct" aria-expanded="false" aria-controls="flush-collapseThree">
        ประจำเดือน ตุลาคม
      </button>
    </h2>
    <div id="Oct" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">



        </div>
  </div>
  <!--  -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Nov" aria-expanded="false" aria-controls="flush-collapseThree">
        ประจำเดือน พฤศจิกายน
      </button>
    </h2>
    <div id="Nov" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">


        </div>
  </div>
  <!--  -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Dec" aria-expanded="false" aria-controls="flush-collapseThree">
        ประจำเดือน ธันวาคม
      </button>
    </h2>
    <div id="Dec" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">



        </div>
  </div>
</div>
</div> <!-- container -->

<?php
}
?>
</body>
