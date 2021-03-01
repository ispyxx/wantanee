
<?php
	include("config.php");
	session_start();

$sql="update rent set DateStart='$_POST[DateStart]', DateEnd='$_POST[DateEnd]', TimeStart='$_POST[TimeStart]', TimeEnd='$_POST[TimeEnd]', Place='$_POST[Place]',Status='$_POST[Status]',SignDate='$_POST[SignDate]' where RentID = $_POST[RentID] ";

$result=$db->query($sql);
$selectdata_old=[];
$i=0;
$sql = "select ProductID from rentdetails where RentID = '$_POST[RentID]'";

$results=$db->query($sql);
while ($rows=$results->fetch_array(MYSQLI_ASSOC)) {
  $selectdata_old[$i]=$rows;
  $i++;
}
 $t=$selectdata_old[0]["ProductID"];
  $t1=$selectdata_old[1]["ProductID"];
   $t2=$selectdata_old[2]["ProductID"];
//เต็นต์
  $sql="update rentdetails set ProductID='$_POST[ProductTent]',Amount='$_POST[AmountTent]' where ProductID='$t' and RentID = '$_POST[RentID]'";
$results=$db->query($sql);
// echo $sql;
//table
$sql="update rentdetails set ProductID='$_POST[ProductTable]',Amount='$_POST[AmountTable]' where ProductID='$t1' and RentID = '$_POST[RentID]'";
$results=$db->query($sql);
//เก้าอี้
$sql="update rentdetails set ProductID=12,Amount='$_POST[AmountChair]' where ProductID='$t2' and RentID = '$_POST[RentID]'";
$results=$db->query($sql);
 ?>
