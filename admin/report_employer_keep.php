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
color: #1E1D1D;
}

#fontta {
  font-family: "Chakra Petch", sans-serif;
color: #1E1D1D;
}

#margin-top2{
  margin-top: 100px;
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
</script>
<style type="text/css">
	@media print{
		#hid{
		   display: none; /* ซ่อน  */
		}
	}
</style>
<body>


  <div id="margin-top">
  </div>
  <div id="bg-header">
    <div class="container">
      <div id="margin-left"><h2>รายงานสรุปจำนวนผู้ว่าจ้างงาน</h2> <div class="d-grid gap-2 d-md-flex justify-content-md-end" id="button-l">
        <button id="hid" onclick="window.print();" class="btn btn-primary"> พิมพ์ </button>
        </div></div>
    </div>
  </div>


<!-- ***************************************************************************************** -->
  <div id="margin-topp">
  </div>
  <!--
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



  $sql="select memberID from member";
  $result=$db->query($sql);
  while($row=$result->fetch_array(MYSQLI_ASSOC)){
  if($row["memberID"]==1){
  $jan++;
}
if($row["memberID"]==2){
$fub++;
}
if($row["memberID"]==3){
$mar++;
}
if($row["memberID"]==4){
$Apr++;
}
if($row["memberID"]==5){
$May++;
}
if($row["memberID"]==6){
$Jun++;
}


if($row["memberID"]==7){
$Jul++;
}
if($row["memberID"]==8){
$Aug++;
}
if($row["memberID"]==9){
$Sep++;
}
if($row["memberID"]==10){
$Oct++;
}
if($row["memberID"]==11){
$Nov++;
}
if($row["memberID"]==12){
$Dec++;
}

}
$all=$jan+$fub+$mar+$Apr+$May+$Jun+$Jul+$Aug+$Sep+$Oct+$Nov+$Dec;
?> -->


<?php
$sql="select * from rent_order";
$result=$db->query($sql);
$row=$result->fetch_array(MYSQLI_BOTH);
?>

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
//
// $sql="SELECT YEAR(`od_date_start`) AS `year`,
// SUM(IF(MONTH(`od_date_start`)=1,`member_id`,NULL)) AS `1`,
// SUM(IF(MONTH(`od_date_start`)=2,`member_id`,NULL)) AS `2`,
// SUM(IF(MONTH(`od_date_start`)=3,`member_id`,NULL)) AS `3`,
// SUM(IF(MONTH(`od_date_start`)=4,`member_id`,NULL)) AS `4`,
// SUM(IF(MONTH(`od_date_start`)=5,`member_id`,NULL)) AS `5`,
// SUM(IF(MONTH(`od_date_start`)=6,`member_id`,NULL)) AS `6`,
// SUM(IF(MONTH(`od_date_start`)=7,`member_id`,NULL)) AS `7`,
// SUM(IF(MONTH(`od_date_start`)=8,`member_id`,NULL)) AS `8`,
// SUM(IF(MONTH(`od_date_start`)=9,`member_id`,NULL)) AS `9`,
// SUM(IF(MONTH(`od_date_start`)=10,`member_id`,NULL)) AS `10`,
// SUM(IF(MONTH(`od_date_start`)=11,`member_id`,NULL)) AS `11`,
// SUM(IF(MONTH(`od_date_start`)=12,`member_id`,NULL)) AS `12`
// FROM `rent_order` GROUP BY `year`";
// $result=$db->query($sql);
// $row=$result->fetch_array(MYSQLI_ASSOC);


$sqlss="SELECT YEAR(`od_date_start`) AS `year`,
SUM(IF(MONTH(`od_date_start`)=1,1,0)) AS `1`,
SUM(IF(MONTH(`od_date_start`)=2,1,0)) AS `2`,
SUM(IF(MONTH(`od_date_start`)=3,1,0)) AS `3`,
SUM(IF(MONTH(`od_date_start`)=4,1,0)) AS `4`,
SUM(IF(MONTH(`od_date_start`)=5,1,0)) AS `5`,
SUM(IF(MONTH(`od_date_start`)=6,1,0)) AS `6`,
SUM(IF(MONTH(`od_date_start`)=7,1,0)) AS `7`,
SUM(IF(MONTH(`od_date_start`)=8,1,0)) AS `8`,
SUM(IF(MONTH(`od_date_start`)=9,1,0)) AS `9`,
SUM(IF(MONTH(`od_date_start`)=10,1,0)) AS `10`,
SUM(IF(MONTH(`od_date_start`)=11,1,0)) AS `11`,
SUM(IF(MONTH(`od_date_start`)=12,1,0)) AS `12`
FROM `rent_order`GROUP BY `year`";
$result=$db->query($sqlss);
$rows=$result->fetch_array(MYSQLI_ASSOC);
$sumall=$rows[1]+$rows[2]+$rows[3]+$rows[4]+$rows[5]+$rows[6]
+$rows[7]+$rows[8]+$rows[9]+$rows[10]+$rows[11]+$rows[12];
// echo $row;exit;
// print_r($sumall);exit;

?>

<div class="container col-9" id="fontta">
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
        <td><?=$rows[1]?></td>
      </tr>

      <tr>
        <td>กุมภาพันธ์</td>
        <td><?=$rows[2]?></td>
      </tr>

      <tr>
        <td>มีนาคม</td>
        <td><?=$rows[3]?></td>
      </tr>

      <tr>
        <td>เมษายน</td>
        <td><?=$rows[4]?></td>
      </tr>

      <tr>
        <td>พฤษภาคม</td>
        <td><?=$rows[5]?></td>
      </tr>

      <tr>
        <td>มิถุนายน</td>
        <td><?=$rows[6]?></td>
      </tr>

      <tr>
        <td>กรกฎาคม</td>
        <td><?=$rows[7]?></td>
      </tr>

      <tr>
        <td>สิงหาคม</td>
        <td><?=$rows[8]?></td>
      </tr>

      <tr>
        <td>กันยายน</td>
        <td><?=$rows[9]?></td>
      </tr>

      <tr>
        <td>ตุลาคม</td>
        <td><?=$rows[10]?></td>
      </tr>

      <tr>
        <td>พฤศจิกายน</td>
        <td><?=$rows[11]?></td>
      </tr>

      <tr>
        <td>ธันวาคม</td>
        <td><?=$rows[12]?></td>
      </tr>

      <tr>
        <td><b>รวมทั้งหมด</b></td>
        <td><?=$sumall?></td>
      </tr>
    </tbody>
  </table>
</div>

<!-- Styles -->
<style>
#chartdiv {
width: 100%;
height: 500px;
}

</style>


<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>


<?php
$sql="select od_amphoe from rent_order";
$results=$db->query($sql);
$data=[];
$i=0;
while($rows=$results->fetch_array(MYSQLI_ASSOC)){
$data[$i]=$rows['od_amphoe'];
$i++;
}


$datas=array_count_values($data);

// print_r($datas)
?>
<!-- Styles -->
<style>
#chartdiv {
width: 80%;
height: 700px;
}

</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart3D);

// Add data
chart.data = [{
"year": "เมืองกำแพงเพชร",
"income": <?=$datas['เมืองกำแพงเพชร']?>,
"color": chart.colors.next()
}, {
"year": "ไทรงาม",
"income": <?=$datas['ไทรงาม']?>,
"color": chart.colors.next()
}, {
"year": "คลองลาน",
"income": <?=$datas['คลองลาน']?>,
"color": chart.colors.next()
}, {
"year": "ขาณุวรลักษบุรี",
"income": <?=$datas['ขาณุวรลักษบุรี']?>,
"color": chart.colors.next()
}, {
"year": "คลองขลุง",
"income": <?=$datas['คลองขลุง']?>,
"color": chart.colors.next()
}, {
"year": "พรานกระต่าย",
"income": <?=$datas['พรานกระต่าย']?>,
"color": chart.colors.next()
}, {
"year": "ลานกระบือ",
"income": <?=$datas['ลานกระบือ']?>,
"color": chart.colors.next()
}, {
"year": "ทรายทองวัฒนา",
"income": <?=$datas['ทรายทองวัฒนา']?>,
"color": chart.colors.next()
}, {
"year": "ปางศิลาทอง",
"income": <?=$datas['ปางศิลาทอง']?>,
"color": chart.colors.next()
}, {
"year": "บึงสามัคคี",
"income": <?=$datas['บึงสามัคคี']?>,
"color": chart.colors.next()
}, {
"year": "โกสัมพีนคร",
"income": <?=$datas['โกสัมพีนคร']?>,
"color": chart.colors.next()
}];

// Create axes
var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "year";
categoryAxis.numberFormatter.numberFormat = "#";
categoryAxis.renderer.inversed = true;

var  valueAxis = chart.xAxes.push(new am4charts.ValueAxis());

// Create series
var series = chart.series.push(new am4charts.ColumnSeries3D());
series.dataFields.valueX = "income";
series.dataFields.categoryY = "year";
series.name = "Income";
series.columns.template.propertyFields.fill = "color";
series.columns.template.tooltipText = "{valueX}";
series.columns.template.column3D.stroke = am4core.color("#fff");
series.columns.template.column3D.strokeOpacity = 0.2;

}); // end am4core.ready()
</script>

<div class="container" id="margin-top2">
  <div id="margin-left"><h2>สรุปจำนวนผู้ว่าจ้างงาน(อำเภอ)</h2></div>
</div>

<div class="container">
<!-- HTML -->
<div id="chartdiv"></div>
</div>


</body>
