
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
// session_start();

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
	$member_photo_name="Product_".time().".".$lastname;
	copy($member_photo,"photo_upload/".$member_photo_name);
	unlink($member_photo);
	}
}

$sql="insert into products(ProductName, ProductType, ProductPrice, ProductPicture, ProductStork)
values('$_POST[ProductName]','$_POST[ProductType]','$_POST[ProductPrice]','$member_photo_name','$_POST[ProductStork]')";
$result=$db->query($sql);
// echo $sql;exit;
if($result){
echo "บันทึกข้อมูล สำเร็จ";
echo '<meta http-equiv="refresh" content="2;url=?page=products_rentt" />';
}
else{
echo "บันทึกข้อมูล ไม่สำเร็จ";
echo '<meta http-equiv="refresh" content="2;url=?page=products_rent_add" />';
}
?>


</div>
</div>

<div id="margin-bottom">
</div>
