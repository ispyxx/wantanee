
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



$sql="delete from products where ProductID='$_GET[ProductID]'";
// echo $sql;exit;
$result=$db->query($sql);


if($result){
echo "ลบข้อมูล สำเร็จ";
echo '<meta http-equiv="refresh" content="2;url=?page=products_rentt" />';
}
else{
echo "ลบข้อมูล ไม่สำเร็จ";
echo '<meta http-equiv="refresh" content="2;url=?page=products_rent_edit" />';
}
?>

</div>
</div>

<div id="margin-bottom">
</div>
