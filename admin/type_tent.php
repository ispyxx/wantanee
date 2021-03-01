<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 900px;
}

body {
  font-family: "Chakra Petch", sans-serif;
  color: #1E1D1D;
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
<style type="text/css">
	@media print{
		#hid{
		   display: none; /* ซ่อน  */
		}
	}
</style>
<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>




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
$month=[];
foreach ($data as $key => $value) {

  $get_date = explode("-",$value['od_date_start']);
  $month[$get_date[1]]=[];

}
foreach ($month as $k=> $v) {
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
      $month[$k][1]=$a1;
      $month[$k][2]=$a2;
      $month[$k][3]=$a3;
    }
  }
}

// print_r($month);
// exit;
?>


<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

 // Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);

// Add data
chart.data = [{
  "year": "มกราคม",
  "tent4": <?=$month['01'][1]?>,
  "tent8": <?=$month['01'][2]?>,
  "tent10": <?=$month['01'][3]?>
},
{
  "year": "กุมภาพันธ์",
  "tent4": <?=$month['02'][1]?>,
  "tent8": <?=$month['02'][2]?>,
  "tent10": <?=$month['02'][3]?>
},
{
  "year": "มีนาคม",
  "tent4": <?=$month['03'][1]?>,
  "tent8": <?=$month['03'][2]?>,
  "tent10": <?=$month['03'][3]?>
},
{
  "year": "เมษายน",
  "tent4": <?=$month['04'][1]?>,
  "tent8": <?=$month['04'][2]?>,
  "tent10": <?=$month['04'][3]?>
},
{
  "year": "พฤษภาคม",
  "tent4": <?=$month['05'][1]?>,
  "tent8": <?=$month['05'][2]?>,
  "tent10": <?=$month['05'][3]?>
},
{
  "year": "มิถุนายน",
  "tent4": <?=$month['06'][1]?>,
  "tent8": <?=$month['06'][2]?>,
  "tent10": <?=$month['06'][3]?>
},
{
  "year": "กรกฎาคม",
  "tent4": <?=$month['07'][1]?>,
  "tent8": <?=$month['07'][2]?>,
  "tent10": <?=$month['07'][3]?>
},
{
  "year": "สิงหาคม",
  "tent4": <?=$month['08'][1]?>,
  "tent8": <?=$month['08'][2]?>,
  "tent10": <?=$month['08'][3]?>
},
{
  "year": "กันยายน",
  "tent4": <?=$month['09'][1]?>,
  "tent8": <?=$month['09'][2]?>,
  "tent10": <?=$month['09'][3]?>
},
{
  "year": "ตุลาคม",
  "tent4": <?=$month['10'][1]?>,
  "tent8": <?=$month['10'][2]?>,
  "tent10": <?=$month['10'][3]?>
},
{
  "year": "พฤศจิกายน",
  "tent4": <?=$month['11'][1]?>,
  "tent8": <?=$month['11'][2]?>,
  "tent10": <?=$month['11'][3]?>
},
{
  "year": "ธันวาคม",
  "tent4": <?=$month['12'][1]?>,
  "tent8": <?=$month['12'][2]?>,
  "tent10": <?=$month['12'][3]?>
},
];

// Create axes
var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "year";
categoryAxis.numberFormatter.numberFormat = "#";
categoryAxis.renderer.inversed = true;
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.cellStartLocation = 0.1;
categoryAxis.renderer.cellEndLocation = 0.9;

var  valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
valueAxis.renderer.opposite = true;

// Create series
function createSeries(field, name) {
  var series = chart.series.push(new am4charts.ColumnSeries());
  series.dataFields.valueX = field;
  series.dataFields.categoryY = "year";
  series.name = name;
  series.columns.template.tooltipText = "{name}: [bold]{valueX}[/]";
  series.columns.template.height = am4core.percent(100);
  series.sequencedInterpolation = true;

  var valueLabel = series.bullets.push(new am4charts.LabelBullet());
  valueLabel.label.text = "{valueX}";
  valueLabel.label.horizontalCenter = "left";
  valueLabel.label.dx = 15;
  valueLabel.label.hideOversized = false;
  valueLabel.label.truncate = false;

  var categoryLabel = series.bullets.push(new am4charts.LabelBullet());
  categoryLabel.label.text = "{name}";
  categoryLabel.label.horizontalCenter = "right";
  categoryLabel.label.dx = -15;
  categoryLabel.label.fill = am4core.color("#fff");
  categoryLabel.label.hideOversized = false;
  categoryLabel.label.truncate = false;
}

createSeries("tent4", "ขนาด 4*4");
createSeries("tent8", "ขนาด 4*8");
createSeries("tent10", "ขนาด 4*10");

}); // end am4core.ready()
</script>

<body>
  <div class="container" id="margin-1">
        <div id="margin-2"><h3>สถิติการเช่าเต้นท์</h3><div class="d-grid gap-2 d-md-flex justify-content-md-end" id="button-l">
          <button id="hid" onclick="window.print();" class="btn btn-primary"> พิมพ์ </button>
          </div></div>
  </div>
<!-- HTML -->
<div id="chartdiv"></div>

</body>
