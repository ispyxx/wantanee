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
      <div id="margin-2"><h3>ปฏิทิน</h3></div>
</div>

  <div class="container col-8">
<div class="accordion accordion-flush" id="accordionFlushExample">

  <?php
  $sqls="select orderID, od_date_start,od_date_end,od_place,od_time_start,od_time_end from rent_order order by od_date_start asc";
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
  foreach ($month as $key => $value) {
    $k=0;
    foreach ($data as $v) {
      $get_date = explode("-",$v['od_date_start']);
      $months=$get_date[1];
      if ($key==$months) {
        $month[$key][$k]=$v;
        $k++;
      }
    }
  }

?>
<?php
  $thai_month =array(
  "1"=>"มกราคม",
  "2"=>"กุมภาพันธ์",
  "3"=>"มีนาคม",
  "4"=>"เมษายน",
  "5"=>"พฤษภาคม",
  "6"=>"มิถุนายน",
  "7"=>"กรกฎาคม",
  "8"=>"สิงหาคม",
  "9"=>"กันยายน",
  "10"=>"ตุลาคม",
  "11"=>"พฤศจิกายน",
  "12"=>"ธันวาคม"
  );
  $i=1;
foreach ($month as $value) {

    ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#month<?=$i?>" aria-expanded="false" aria-controls="flush-collapseOne">
        ประจำเดือน <?=$thai_month[$i]?>
      </button>
    </h2>
    <div id="month<?=$i?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">

        <div class="container">
        <table class="table table-striped table-hover"style="width:100%">
          <thead class="thead-dark">
            <tr>
              <th scope="col">วันที่เริ่ม</th>
              <th scope="col">เวลาเริ่ม</th>
              <th scope="col">วันที่สิ้นสุด</th>
              <th scope="col">เวลาสิ้นสุด</th>
              <th scope="col">สถานที่</th>
              <th scope="col">ดูเพิ่มเติม</th>

            </tr>
          </thead>

          <tbody>
            <?php foreach ($value as $key => $v): ?>
            <tr>
              <td><?=$v['od_date_start']?></td>
              <td><?=$v['od_time_start']?></td>
              <td><?=$v['od_date_end']?></td>
              <td><?=$v['od_time_end']?></td>
              <td><?=$v['od_place']?></td>
              <td><a href="?page=info_show&orderID=<?=$v['orderID']?>" class="btn btn-info btn-lg "><img src="img/search.png" width="15" height="15"/></td>

            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </div>
      </div>
  </div>
</div>
<?php
$i++;
}

?>
</div>
</div>


</body>
