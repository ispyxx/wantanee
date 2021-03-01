
<style>
body {
  font-family: "Chakra Petch", sans-serif;
  color: #111111;
}

#center-info{
  margin-left: 50px;
}

#footerr{
  margin-right: 80px;
  margin-top: 20px;
}
#center-pic{
  margin-left:  -12px;
}

</style>


<style>
			#margin-top {
			  margin-top: 150px;
			}

			#margin-bottom {
			  margin-top: 216px;
			}
      #alert1{
        text-align: center;
      }
</style>

<body>


<div class="container">
	<div id="margin-bottom">
		</div>
				<div class="alert alert-dark" id="alert1" role="alert">

<?php
	include("config.php");


	$member_photo=$_FILES["ProductPicture"]["tmp_name"];
	$member_photo_name=$_FILES["ProductPicture"]["name"];
	$array_lastname=explode(".",$member_photo_name);
	$c=count($array_lastname)-1;
	$lastname=strtolower($array_lastname[$c]);
	if(!$member_photo){
	$member_photo_name="nophoto.png";
	}

	else{
		if($lastname=='jpg' or $lastname=='gif' or $lastname=='png'){
		$member_photo_name="PD_".time().".".$lastname;
		copy($member_photo,"photo_upload/".$member_photo_name);
		unlink($member_photo);
		}
	}



$sql="update products set ProductName='$_POST[ProductName]', ProductType='$_POST[ProductType]', ProductPrice='$_POST[ProductPrice]', ProductPicture='$member_photo_name',ProductStork='$_POST[ProductStork]' where ProductID = $_POST[ProductID] ";
// echo $sql;exit;

$result=$db->query($sql);


if($result){
echo "แก้ไขข้อมูล สำเร็จ";
echo '<meta http-equiv="refresh" content="2;url=?page=products_rentt" />';
}
else{
echo "แก้ไขข้อมูล ไม่สำเร็จ";
echo '<meta http-equiv="refresh" content="2;url=?page=products_rent_edit" />';
}
?>
</div>
</div>

<div id="margin-bottom">
</div>
