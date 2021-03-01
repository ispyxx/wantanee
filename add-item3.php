<html>
<head>
<title>ThaiCreate.Com JavaScript Add/Remove Element</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href='assets\jquery-datejquery-ui.min.css' rel='stylesheet' type='text/css'>
<script src='assets\jquery-datejquery-ui.min.js' type='text/javascript'></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<!-- time -->
<link rel="stylesheet" type="text/css" href="/jquery.datetimepicker.css"/ >
<script src="/jquery.js"></script>
<script src="/build/jquery.datetimepicker.full.min.js"></script>
</head>
<body>


<form method="post" action="">
<input type="text" name="Number" pattern="[0-9]{1,}" title="กรอกตัวเลขเท่านั้น" required onkeypress="return enforcechar(this, 10)">
<br/>
<input type="text" name="Test"pattern="[A-Za-zก-ฮ]{1,}" title="กรอกตัวอักษรเท่านั้น" required>
<br/>
<input type="submit">
</form>


<br><br><br>
<input type="text" id="demo_text_1" />
<input type="text" id="demo_text_2" />

<script type="text/javascript">
$G("demo_text_1").addEvent("keydown", numberOnly);
$G("demo_text_1").addEvent("keyup", maxVal);
$G("demo_text_2").addEvent("keydown", numberOnly);
$G("demo_text_2").addEvent("keyup", maxVal);
</script>

<script type="text/javascript">
// ฟังก์ชั่นรับการกดคีย์ เป็นตัวเลขเท่านั้น
var numberOnly = function( event ) {
  var key = GEvent.keyCode(event); // อ่านค่า keycode
  if ( !(  ( key > 48 && key < 68 ) || ( key > 95 && key < 106 ) || key == 8 || key == 9 || key == 37 || key == 39 ) ) {
    GEvent.stop(event); // ยกเลิก event
    return false; // คืนค่า false
  };
};
// ฟังก์ชั่นตรวจสอบค่าเกินกำหนด (100)
var maxVal = function( event ) {
  if(parseFloat(GEvent.element(event).value) > 3) {
     alert('ไม่สามารถกรอกข้อมูลเกิน 100 ได้');
  };
};
</script>

<div style="width: 20%; float:left">
   #left content in here
</div>

<div style="width: 80%; float:right">
   #right content in there
</div>


<!-- ปฏิทิน -->
<br><br><br><br>
<script type="text/javascript">
$(document).ready(function(){
 // Date Object
 $('#datepicker1').datepicker({
  dateFormat: "yy-mm-dd",
  minDate: new Date('2017-12-5')
 });

 // Number
 $('#datepicker2').datepicker({
  dateFormat: "yy-mm-dd",
  minDate: 0
 });

 // String
 $('#datepicker3').datepicker({
  dateFormat: "yy-mm-dd",
  minDate: "-3w"
 });
});
</script>


<!-- วันที่เลือก id 2 -->
<p>Date1: <input type="text" id="datepicker"></p>
<p>Date2: <input type="text" id="datepicker2"></p>
<p>Date3: <input type="text" id="datepicker3"></p>

<style>
.highlight a{
  background-color: #29f274 !important;
  color: #ffffff !important;
}
</style>

<script type='text/javascript'>

// An array of highlighting dates ( 'dd-mm-yyyy' )
var highlight_dates = ['1-1-2018','11-1-2018','18-1-2018','28-1-2018'];

$(document).ready(function(){

 // Initialize datepicker
 $('#datepicker').datepicker({
  beforeShowDay: function(date){
   var month = date.getMonth()+1;
   var year = date.getFullYear();
   var day = date.getDate();

   // Change format of date
   var newdate = day+"-"+month+'-'+year;

   // Set tooltip text when mouse over date
   var tooltip_text = "New event on " + newdate;

   // Check date in Array
   if(jQuery.inArray(newdate, highlight_dates) != -1){
    return [true, "highlight", tooltip_text ];
   }
   return [true];
  }
 });
});
</script>

<!-- Text box element -->
<input type='text' id='datepicker'>




<br><br><br><br>
<!-- time -->
<script type='text/javascript'>
jQuery('#datetimepicker5').datetimepicker({
 datepicker:false,
 allowTimes:[
  '12:00', '13:00', '15:00',
  '17:00', '17:05', '17:20', '19:00', '20:00'
 ]
});
</script>
<label>
      time<br>
    <input type="time" id="datetimepicker">

    <input id="datetimepicker" type="text" >
    </label>

    <br><br><br>

    <!-- em_size_tent	em_color_tent	em_style_table -->  em_rentt


  <br><br><br>

  <?
  	mysql_connect("localhost","root","root") or die(mysql_error());
  	mysql_select_db("rent");
  ?>
  <body>
  	<form action="" method="post" name="form1">
  		List Menu<br>
  		  <select name="lmName1">
  			<option value=""><-- Please Select Item --></option>
  			<?
        // ORDER BY CustomerID ASC
  			$strSQL = "SELECT * FROM em_rentt ";
  			$objQuery = mysql_query($strSQL);
  			while($objResuut = mysql_fetch_array($objQuery))
  			{
  			?>
  			<option value="<?=$objResuut["em_size_tent"];?>"><?=$objResuut["em_size_tent"]." - ".$objResuut["Name"];?></option>
  			<?
  			}
  			?>
  		  </select>
  		<input name="btnSubmit" type="submit" value="Submit">
  	</form>
  </body>


  <br><br><br><br><br><br>

        <!-- เรียกข้อมูลในฐานข้อมูลมาทำ dropdown -->
  <?php
  include ('config.php');
  $select_data = "SELECT * FROM em_rentt"
        or die ("Error : ".mysqlierror($select_data));
    $rs_select = mysqli_query($db, $select_data);
                //echo ($query_level);//test query
  ?>

  <select class="form-control" name="od_style_table" id="od_style_table">
    <option selected disabled value="-">--รูปแบบโต๊ะ--</option>

    <?php foreach ($rs_select as $rs) {?>
      <option  value="<?php echo $rs['em_style_table']; ?>">
       <?php echo $rs['em_style_table']; ?>
      </option>
    <?php }?>

</select>


</body>
</html>
