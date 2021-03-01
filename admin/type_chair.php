<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 800px;
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
#button-l{
  margin-left: 20px;
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
$row=$result->fetch_array(MYSQLI_ASSOC);
//echo $sql;exit;
// print_r($row[1]);exit;

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
  "chair": <?=$row[1]?>,

},
{
  "year": "กุมภาพันธ์",
  "chair": <?=$row[2]?>,


},
{
  "year": "มีนาคม",
  "chair": <?=$row[3]?>,


},
{
  "year": "เมษายน",
  "chair": <?=$row[4]?>,


},
{
  "year": "พฤษภาคม",
  "chair": <?=$row[5]?>,


},
{
  "year": "มิถุนายน",
  "chair": <?=$row[6]?>,


},
{
  "year": "กรกฎาคม",
  "chair": <?=$row[7]?>,


},
{
  "year": "สิงหาคม",
  "chair": <?=$row[8]?>,


},
{
  "year": "กันยายน",
  "chair": <?=$row[9]?>,


},
{
  "year": "ตุลาคม",
  "chair": <?=$row[10]?>,


},
{
  "year": "พฤศจิกายน",
  "chair": <?=$row[11]?>,


},
{
  "year": "ธันวาคม",
  "chair": <?=$row[12]?>,


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

createSeries("chair", "เก้าอี้");

}); // end am4core.ready()
</script>
<style type="text/css">
	@media print{
		#hid{
		   display: none; /* ซ่อน  */
		}
	}
</style>
<body>

  <div class="container" id="margin-1">

        <div id="margin-2"><h3>สถิติการเช่าเก้าอี้</h3><div class="d-grid gap-2 d-md-flex justify-content-md-end" id="button-l">
          <button id="hid" onclick="window.print();" class="btn btn-primary"> พิมพ์ </button>
          </div></div>

  </div>


<!-- HTML -->
<div id="chartdiv"></div>

</body>
