
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
