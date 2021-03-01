
<?php
include("config.php");
session_start();


// $sql="insert into products(ProductID, ProductStork) values('$_POST[ProductID]', '$_POST[ProductStork]')";
$sql="update products set ProductType='$_POST[ProductType]', ProductName='$_POST[ProductName]', ProductPrice='$_POST[ProductPrice]',  ProductStork=ProductStork+'$_POST[ProductStork]',  where ProductID = $_POST[productscount]";
// $sql="update products set ProductName='$_POST[ProductName]', ProductType='$_POST[ProductType]', ProductPrice='$_POST[ProductPrice]', ProductPicture='$_POST[	ProductPicture]', ProductStork='$_POST[ProductStork]'= where RentID = $_POST[RentID] ";
echo $sql;
$result=$db->query($sql);

?>
