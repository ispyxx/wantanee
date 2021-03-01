<?php require_once('../condb.php'); ?>
<?php
//error_reporting( error_reporting() & ~E_NOTICE );
session_start();
// print_r($_SESSION);

$query_buyer = "SELECT * FROM tbl_member WHERE  member_id=$member_id " or die("Error:" . mysqli_error());
$buyer = mysqli_query($conn, $query_buyer) or die ("Error in query: $query_buyer " . mysqli_error());
$row_buyer = mysqli_fetch_assoc($buyer);
$totalRows_buyer = mysqli_num_rows($buyer);

	//echo 'ss'.$row_buyer;

?>
<br>
  <table width="700" border="1" align="center" class="table">
    <tr>
      <td width="1558" colspan="9" align="center">
      <strong>สั่งซื้อสินค้า</strong></td>
    </tr>
    <tr class="success">
    <td align="center">ลำดับ</td>
      <td align="center">ภาพ</td>
       <td align="center">สินค้า</td>
      <td align="center">ราคา</td>
      <td align="center">จำนวน</td>
      <td align="center">รายการ</td>
      <td align="center">รวมยอด</td>
    </tr>
  <form  name="formlogin" action="saveorder.php" method="POST" id="login" class="form-horizontal">
<?php
	require_once('../condb.php');
	$total=0;
	foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
	{
		$sql = "select * from tbl_product where p_id=$p_id";
		$query = mysqli_query($conn, $sql);
		$row	= mysqli_fetch_array($query);
		$sum	= $row['p_price']*$p_qty;
		$total	+= $sum;
    echo "<tr>";
	echo "<td align='center'>";
	echo  $i += 1;
	echo "</td>";
  echo "<td align='center'>";
  echo "<img src='../backend/img/".$row['p_img']."' width='30'>";
  echo "</td>";
    echo "<td>" . $row["p_name"] . "</td>";
    echo "<td align='right'>" .number_format($row['p_price'],2) ."</td>";
    echo "<td align='right'>$p_qty</td>";
    echo "<td align='right'>".number_format($sum,2)."</td>";
    echo "<td align='right'>"."</td>";
    echo "</tr>";
?>

<input type="hidden"  name="p_name[]" value="<?php echo $row['p_name']; ?>" class="form-control" required placeholder="ชื่อ-สกุล" />


    <?php
	}
  echo "<tr>";


    echo "<td  align='right' colspan='5'><b>ค่าส่ง</b></td>";
    echo "<td  align='right' colspan=''><b>60 บาท</b></td>";
    echo "<td align='right'>"."<b>".number_format($total+60,2)."</b>"."</td>";
    echo "</tr>";
?>
</table>
		</div>
	</div>
</div>
<div class="container">
  <div class="row">
  <div class="col-md-3"></div>
    <div class="col-md-6" style="background-color:#f4f4f4">
      <h3 align="center" style="color:green">
      <span class="glyphicon glyphicon-shopping-cart"> </span>
         ที่อยู่ในการจัดส่งสินค้า  </h3>

        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="name" value="<?php echo $row_buyer['m_name']; ?>" class="form-control" required placeholder="ชื่อ-สกุล" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <textarea name="address" class="form-control"  rows="3"  required placeholder="ที่อยู่ในการส่งสินค้า"><?php echo $row_buyer['m_address']; ?></textarea>
          </div>

        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="phone" value="<?php echo $row_buyer['m_tel']; ?>" class="form-control" required placeholder="เบอร์โทรศัพท์" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="email"  name="email" class="form-control" value="<?php echo $row_buyer['m_email']; ?>" required placeholder="อีเมล์" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12" align="center">
            <input name="member_id" type="hidden" id="member_id" value="<?php echo $row_buyer['member_id']; ?>">
            <button type="submit" class="btn btn-success" id="btn">
             ยืนยันสั่งซื้อ </button>
             <a href="index.php" class="btn btn-danger">ยกเลิก</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php

mysqli_free_result($buyer);
?>
