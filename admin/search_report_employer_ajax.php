<style>
  #fontt-center {
    text-align: center;
    margin-top: 20px;
  }
</style>

<?php
if (!empty($_POST["year"]) || (!empty($_POST["month"]))) {
    
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_src = "wantanee";
$db = new mysqli($db_server, $db_user, $db_pass, $db_src);
$db->query("set names utf8");
$year = "";
$month = "";


if (empty($_POST["year"])) {
  $_POST["year"] = "";
} else {
  $year = $_POST["year"];
}
if (empty($_POST["month"])) {
  $_POST["month"] = "";
} else {
  $month = $_POST["month"];
}
$data = [];
$i = 0;

if (!empty($year) && !empty($month)) {

  $sql = "select count(RentID) as nub , amphoe from rent left join member on rent.MemberID=member.memberID where DateStart like '%$year-%' and DateStart like '%-$month-%' group by amphoe";
  // echo $sql; exit;
  $result = $db->query($sql);

  while ($row = $result->fetch_assoc()) {
    $data[$i] = $row;
    $i++;
  }

 
switch ($month) {
  case "01":
    $month = "มกราคม";
    break;
  case "02":
    $month = "กุมภาพันธ์";
    break;
  case "03":
    $month = "มีนาคม";
    break;
  case "04":
    $month = "เมษายน";
    break;
  case "05":
    $month = "พฤษภาคม";
    break;
  case "06":
    $month = "มิถุนายน";
    break;
  case "07":
    $month = "กรกฎาคม";
    break;
  case "08":
    $month = "สิงหาคม";
    break;
  case "09":
    $month = "กันยายน";
    break;
  case "10":
    $month = "ตุลาคม";
    break;
  case "11":
    $month = "พฤศจิกายน";
    break;
  case "12":
    $month = "ธันวาคม";
    break;
}
if(count($data) > 0){?>

<div id="groove">
  <div id="betweentop3">
    <div id="font-center">

      <h4> สรุปจำนวนผู้ว่าจ้างงาน </h4><br>
      <h5> เดือน <?= $month ?> ประจำปี <?= $year + 543 ?></h5>
    </div>
  </div>

  
    <h6 id="font-center"></h6><br>
    <div class="container col-7" id="font-center">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col" style="width: 50%;">อำเภอ</th>
            <th scope="col" style="width: 25%;">จำนวน (คน)</th>
          </tr>
        </thead>
        <tbody>
        <?php
        
        $sums=0; //ประกาศตัวแปร ++
        //  $sumend+=$v["nub"];
          foreach ($data as $k => $v) {
          ?>
            <tr>
              <td><?= $v["amphoe"] ?></td>
              <td><?= $v["nub"] ?></td>
            </tr>

          <?php 
          $sums+=$v["nub"]; //การบวก++
          }
        
          ?>
          <tr>
            <th>รวม</td>
            <th><?=$sums?></td>
          </tr>
        </tbody>
      </table>
    </div>
 
  <!-- <div id="fontt-center">
    <h5>รวมเป็นเงินทั้งสิ้น <?= number_format($sumend) ?> บาท<h5>
  </div> -->
</div>

<br>
<div id="font-center">
  <button id="hid" onclick="window.print();" class="btn btn-info"> พิมพ์ </button>
</div>



  <?php
}else{
    echo "ไม่พบข้อมูล";
}
}if(empty($year) || empty($month)){
    echo "เลือกข้อมูลไม่ครบ";
}
 }
else{
    echo "ไม่พบข้อมูล";
}
?>

