
<?php


	include("config.php");
	session_start();


// echo $datestart,$dateend;exit;

$sqlss="insert into rent(DateStart, DateEnd, TimeStart, TimeEnd, Place, Status, SignDate, MemberID)
     values('$_POST[DateStart]', '$_POST[DateEnd]', '$_POST[TimeStart]', '$_POST[TimeEnd]', '$_POST[Place]', '$_POST[Status]', '$_POST[SignDate]',$_SESSION[sess_userID])";


		 if(mysqli_query($db, $sqlss)){
		     $idrent = mysqli_insert_id($db);

				 echo 1;
				 if($idrent){

					 $sqlTent="insert into rentdetails(RentID,ProductID, Amount)
							 values('$idrent','$_POST[ProductTent]','$_POST[AmountTent]')";
								// echo $sqlTent; exit;
							 $resultTent=$db->query($sqlTent);

							 $sqlsTable="insert into rentdetails(RentID,ProductID, Amount)
									values('$idrent','$_POST[ProductTable]', '$_POST[AmountTable]')";
									$resultTable=$db->query($sqlsTable);


									$sqlChair="insert into rentdetails(RentID,ProductID, Amount)
											values('$idrent',12,'$_POST[AmountChair]')";
											$resultChair=$db->query($sqlChair);

				 }
		   }

		//    $order=0;
		//    $sql = "select * from rentdetails left join rent on rentdetails.RentID=rent.RentID and left join rent on products on rentdetails.RentID=products=ProductID where $_POST[rentID]";
		//    $results=$db->query($sqls);
		//    $row=$results->fetch_array(MYSQLI_ASSOC);


		// 	$order =  $_POST['AmountTent'];
		// 	$pdID =	 $row['ProductID'];
		// 	$stcut = $order - $row['ProductStork'];
			
		// 	$sqlcut = "UPDATE products SET $row['ProductStork']=$stcut WHERE ProductID=$pdID ";
		// 	$result=$db->query($sql);	



		// อันนี้เพิ่งเขียนเพิ่มเติม  จะตัดสต๊อกของโปรดัก
$dataStork=[];
$i=0;

$sql = "select ProductID from rentdetails where RentID = '$_POST[RentID]'";
$results=$db->query($sql);
while ($rows=$results->fetch_array(MYSQLI_ASSOC)) {
  $dataStork[$i]=$rows;
  $i++;
  print_r($dataStork);
}
exit;

$stt=$dataStork[0]["ProductStork"];
$stta=$dataStork[1]["ProductStork"];
$stc=$dataStork[2]["ProductStork"];

$t=$dataStork[0]["ProductID"];
$t1=$dataStork[1]["ProductID"];
$t2=$dataStork[2]["ProductID"];

$cuttent=$stt-$_POST['AmountTent'];
$cuttable=$stta-$_POST['AmountTable'];
$cutchair=$stc-$_POST['AmountChair'];



//เต็นต์
  $sql="update products set ProductID='$_POST[ProductTent]',ProductStork='$cuttent' where ProductID='$t' and ProductID = '$_POST[RentID]'";
$results=$db->query($sql);
// echo $sql;
//table
$sql="update products set ProductID='$_POST[ProductTable]',ProductStork='$cuttable' where ProductID='$t1' and ProductID = '$_POST[RentID]'";
$results=$db->query($sql);
//เก้าอี้
$sql="update products set ProductID=12,ProductStork='$cutchair' where ProductID='$t2' and ProductID = '$_POST[RentID]'";
$results=$db->query($sql);
?>


			