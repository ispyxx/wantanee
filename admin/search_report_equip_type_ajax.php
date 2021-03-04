<?php
if (!empty($_POST["year"]) || !empty($_POST["month"])) {
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

    $sql = "select RentId from rent where DateStart like '%$year-%' and DateStart like '%-$month-%'";
    
    $result = $db->query($sql);

    while ($row = $result->fetch_assoc()) {
      $data[$i] = $row["RentId"];
      $i++;
    }
  } elseif (!empty($year) || !empty($month)) {
    $word = (!empty($year)) ? $year . "-%" : "%-" . $month . "-%";
    $sql = "select RentId from rent where DateStart like '$word'";
    $result = $db->query($sql);
    while ($row = $result->fetch_assoc()) {
      $data[$i] = $row["RentId"];
      $i++;
    }
  }
  if (count($data) > 0) {
    $datas = [];
    $k = 0;

    $sqls = "select rentdetails.ProductID,ProductName,Amount,ProductType from rentdetails left join products on rentdetails.ProductID=products.ProductID where rentdetails.RentID in (" . implode(',', $data) . ") and products.ProductType='$_POST[type]' ORDER BY products.ProductType ASC";
    $results = $db->query($sqls);
    while ($rows = $results->fetch_assoc()) {
      $datas[$k] = $rows;
      $k++;
    }
    $getdataend=[];
    
    
    foreach ($datas as $key => $param) {
        $getdataend[$param["ProductID"]] = [];
      }

    // print_r($getdataend);exit;
      foreach ($getdataend as $k => $param) {
        $name = "";
        $counter = 0;
        foreach ($datas as $keys => $values) {
          if ($k == $values["ProductID"]) {
            if (empty($name)) {
              $name = $values["ProductName"];
            }
            $counter += $values["Amount"];
            $getdataend[$k]["name"] = $name;
            $getdataend[$k]["counter"] = $counter;
          }
        }
      }
    //   echo "<pre>";
    //   print_r($getdataend);exit;

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
    $type="";
    switch ($_POST["type"]) {
        case '1':
            $type="เต๊นท์";
            break;
        case '2':
            $type="โต๊ะ";
            break;
        case '3':
            $type="เก้าอี้";
            break;
        default:
            $type="";
            break;
    }

?>
    <div id="groove">
      <div id="betweentop3">
        <div id="font-center">

          <h4> สรุปการเช่าและค่าเช่าอุปกรณ์จำแนกตามประเภท </h4><br>
          <h5> เดือน <?= $month ?> ประจำปี <?= $year + 543 ?></h5>
        </div>
      </div>

        <h6 id="font-center"><?= $type ?></h6><br>
        <div class="container col-7" id="font-center">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col" style="width: 50%;">อุปกรณ์</th>
                <th scope="col" style="width: 25%;">จำนวการเช่า</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $counter = 0;
         
              foreach ($getdataend as $k => $v) {  ?>
                <tr>
                  <td><?= $v["name"] ?></td>
                  <td><?= $v["counter"] ?></td>
                </tr>
              <?php
                $counter += $v["counter"];
               
              }
              ?>
              <tr>
                <th>รวม</td>
                <th><?= $counter ?></td>
               
              </tr>
            </tbody>

          </table>
        </div>
    
    </div>
    <br>

    <div id="font-center">

      <form action="pdf.php" method="post">
        <input type="hidden" name="month" id="month" value="<?= $_POST["month"] ?>">
        <input type="hidden" name="year" id="year" value="<?= $_POST["year"] ?>">
        <button id="hid" type="submit" class="btn btn-info"> พิมพ์ </button>
      </form>
      <br>

    </div>
<?php } else {
    echo "ไม่พบข้อมูล";
  }
} else {
  echo "ไม่พบข้อมูล";
}

?>