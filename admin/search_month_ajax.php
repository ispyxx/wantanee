<style>
    #fontt-center{
        text-align: center;
        margin-top: 20px;
    }
</style>

<?php
if(!empty($_POST["year"])||(!empty($_POST["month"]))){
      $db_server="localhost";
      $db_user="root";
      $db_pass="";
      $db_src="wantanee";
      $db=new mysqli($db_server,$db_user,$db_pass,$db_src);
      $db->query("set names utf8");
      $year="";
      $month="";
      

      if (empty($_POST["year"])) {
        $_POST["year"] = "";
      }else{
        $year = $_POST["year"];
      }
      if (empty($_POST["month"])) {
        $_POST["month"] = "";
      }else{
        $month = $_POST["month"];
      }
      $data=[];
      $i=0;
      
      if (!empty($year)&&!empty($month)) {
          
        $sql = "select RentId from rent where DateStart like '%$year-%' and DateStart like '%-$month-%'";
        // echo $sql;exit;
        $result = $db->query($sql);
        
        while($row = $result->fetch_assoc()) {
          $data[$i] = $row["RentId"];
          $i++;
        }
        
      }elseif(!empty($year)||!empty($month)){
        $word=(!empty($year))?$year."-%":"%-".$month."-%";
        $sql = "select RentId from rent where DateStart like '$word'";
        $result = $db->query($sql);
        while($row = $result->fetch_assoc()) {
          $data[$i] = $row["RentId"];
          $i++;
        }
      }

      if(count($data) > 0){
        $datas =[];
        $k=0;
        
            $sqls = "select rentdetails.ProductID,ProductName,Amount,ProductPrice,ProductType from rentdetails left join products on rentdetails.ProductID=products.ProductID where rentdetails.RentID in (".implode(',',$data).") ORDER BY products.ProductType ASC";
            $results = $db->query($sqls);
            while($rows = $results->fetch_assoc()) {
            $datas[$k] = $rows;
            $k++;
                        
           }
           
        $getdata=[];
        $count1=0;
        $count2=0;
        $count3=0;
        
        foreach ($datas as $key => $value) {
          if ($value["ProductType"]=="1") {
              $getdata[1][$count1]=$datas[$key];
              $count1++;
          }elseif($value["ProductType"]=="2") {
              $getdata[2][$count2]=$datas[$key];
              $count2++;
          }else{
              $getdata[3][$count3]=$datas[$key];
              $count3++;
          }
        }
        $getdataend=[];
        foreach ($getdata as $key => $value) {
          $getdataend[$key]=[];
            foreach ($value as $k => $param) {
              $getdataend[$key][$param["ProductID"]]=[];
            }
        }
        $oop=0;
        foreach ($getdataend as $key => $value) {
          $oop++;
          foreach ($value as $k => $param) {
              $name="";
              $pri=0;
              $counter=0;
              foreach ($datas as $keys => $values) {
                  if ($k==$values["ProductID"]) {
                      if (empty($name)) {
                          $name=$values["ProductName"];
                          $pri=$values["ProductPrice"];
                          
                      }
                      $counter+=$values["Amount"];
                          $getdataend[$key][$k]["name"]=$name;
                          $getdataend[$key][$k]["counter"]=$counter;
                          $getdataend[$key][$k]["pri"]=$pri*$counter;
                     
                  }
              }
              
            }
        }
  
  switch($month)
  {
  case "01" : $month="มกราคม"; break;
  case "02" : $month="กุมภาพันธ์"; break;
  case "03" : $month="มีนาคม"; break;
  case "04" : $month="เมษายน"; break;
  case "05" : $month="พฤษภาคม"; break;
  case "06" : $month="มิถุนายน"; break;
  case "07" : $month="กรกฎาคม"; break;
  case "08" : $month="สิงหาคม"; break;
  case "09" : $month="กันยายน"; break;
  case "10" : $month="ตุลาคม"; break;
  case "11" : $month="พฤศจิกายน"; break;
  case "12" : $month="ธันวาคม"; break;
  }
        
        ?>
         <div id="groove">
          <div id="betweentop3">
              <div id="font-center">
              
              <h4> สรุปการเช่าและค่าเช่าอุปกรณ์จำแนกตามเดือน </h4><br>
              <h5> เดือน <?=$month?>  ประจำปี <?=$year+543?></h5>
              </div>
          </div>
          
          <?php
          $sumend=0;
              foreach ($getdataend as $key => $value) {
                  $nametype="";
                  if($key==1){
                      $nametype = "เต๊นท์";
                  }elseif($key==2){
                      $nametype = "โต๊ะ";
                  }elseif($key==3){
                      $nametype = "เก้าอี้";
                  }
                  ?>
              <h6 id="font-center"><?=$nametype?></h6><br>
          <div class="container col-7" id="font-center">
          <table class="table table-bordered">
               <thead>
                  <tr>
                  <th scope="col" style="width: 50%;">อุปกรณ์</th>
                  <th scope="col" style="width: 25%;">จำนวนการเช่า</th>
                  <th scope="col" style="width: 25%;">ค่าเช่า</th>
                  </tr>
              </thead>
                  <tbody>
  
                  
                  <?php 
                 $counter=0;
                 $sums=0;
                 foreach ($value as $k => $v) { 
                      ?>
                  <tr>
                  <td><?=$v["name"]?></td>
                  <td><?=$v["counter"]?></td>
                  <td><?=$v["pri"]?></td>
                  </tr>
                  
              <?php
              $counter+=$v["counter"];
              $sums+=$v["pri"];
              
                  }
                  $sumend+=$sums;
                  ?>
                  <tr>
                  <th>รวม</td>
                  <th><?=number_format ($counter)?></td>
                  <th><?=number_format ($sums)?></td>
                  </tr>
                  </tbody>
          </table>
          </div>
          <?php }
              
              ?>
                  <div id="fontt-center">
                  <h5>รวมเป็นเงินทั้งสิ้น <?=number_format ($sumend)?> บาท<h5>
                  </div>
          </div>
          
          <br>
  <div id="font-center">
  <button id="hid" onclick="window.print();" class="btn btn-info"> พิมพ์ </button>
  </div>
      
     
<?php
}else{
    echo "ไม่พบข้อมูล";
}
}
else{
    echo "ไม่พบข้อมูล";
}
?>
      