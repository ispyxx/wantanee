<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />


<style>
#margin-top{
  margin-top: 100px;
  background-color: #2EA697;
}

#margin-topp{
  margin-bottom:  30px;
}

#margin-left{
  margin-left: 135px;
}


body {
  font-family: "Chakra Petch", sans-serif;
  color: #777;
}

</style>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Table</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>

<body>


<div id="margin-top">
</div>
<div id="bg-header">
      <div class="container">
      <div id="margin-left"><h2>รายงานสรุปจำนวนผู้ว่าจ้างงาน</h2></div>
      </div>
  </div>
  <div id="margin-topp">
  </div>

  <?php
      $jan=0;
      $fub=0;
      $mar=0;
      $Apr=0;
      $May=0;
      $Jun=0;

      $Jul=0;
      $Aug=0;
      $Sep=0;
      $Oct=0;
      $Nov=0;
      $Dec=0;



      $sql="select month(od_date_start) from rent_order";
      $result=$db->query($sql);
      while($row=$result->fetch_array(MYSQLI_ASSOC)){
        if($row["month(od_date_start)"]==1){
          $jan++;
        }
        if($row["month(od_date_start)"]==2){
          $fub++;
        }
        if($row["month(od_date_start)"]==3){
          $mar++;
        }
        if($row["month(od_date_start)"]==4){
          $Apr++;
        }
        if($row["month(od_date_start)"]==5){
          $May++;
        }
        if($row["month(od_date_start)"]==6){
          $Jun++;
        }


        if($row["month(od_date_start)"]==7){
          $Jul++;
        }
        if($row["month(od_date_start)"]==8){
          $Aug++;
        }
        if($row["month(od_date_start)"]==9){
          $Sep++;
        }
        if($row["month(od_date_start)"]==10){
          $Oct++;
        }
        if($row["month(od_date_start)"]==11){
          $Nov++;
        }
        if($row["month(od_date_start)"]==12){
          $Dec++;
        }

}
      $all=$jan+$fub+$mar+$Apr+$May+$Jun+$Jul+$Aug+$Sep+$Oct+$Nov+$Dec;
?>


<div class="container col-9">
  <table class="table table-striped table-hover">
    <thead>
        <tr>
          <th scope="col">ประจำเดือน</th>
          <th >จำนวน (คน)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>มกราคม</td>
          <td><?=$jan?></td>
        </tr>

        <tr>
          <td>กุมภาพันธ์</td>
          <td><?=$fub?></td>
        </tr>

        <tr>
          <td>มีนาคม</td>
          <td><?=$mar?></td>
        </tr>

        <tr>
            <td>เมษายน</td>
            <td><?=$Apr?></td>
        </tr>

        <tr>
          <td>พฤษภาคม</td>
          <td><?=$May?></td>
        </tr>

        <tr>
            <td>มิถุนายน</td>
            <td><?=$Jun?></td>
        </tr>

        <tr>
            <td>กรกฎาคม</td>
            <td><?=$Jul?></td>
        </tr>

        <tr>
            <td>สิงหาคม</td>
            <td><?=$Aug?></td>
        </tr>

        <tr>
            <td>กันยายน</td>
            <td><?=$Sep?></td>
        </tr>

        <tr>
            <td>ตุลาคม</td>
            <td><?=$Oct?></td>
        </tr>

        <tr>
            <td>พฤศจิกายน</td>
            <td><?=$Nov?></td>
        </tr>

        <tr>
            <td>ธันวาคม</td>
            <td><?=$Dec?></td>
        </tr>

        <tr>
          <td><b>รวมทั้งหมด</b></td>
          <td><?=$all?></td>
        </tr>
      </tbody>
</table>
</div>
</body>
