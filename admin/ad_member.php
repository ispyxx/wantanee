
<style>

#margin-top {
	margin-top: 100px;
}

#margin-bottom {
	margin-top: 216px;
}

body {
  font-family: "Chakra Petch", sans-serif;
  color: #777;
}
</style>



<?php
 $sql="select * from member";
 $result=$db->query($sql);
 $row=$result->fetch_array(MYSQLI_BOTH);
 ?>



<?php
$strKeyword=null;
if(isset($_POST["txtKeyword"])){
$strKeyword=$_POST["txtKeyword"];
}
?>

<div id="margin-top">
</div>

<h3>ข้อมูลสมาชิก</h3>

<form id="form2" name="form2" method="post" action="">
  <p>

    <center>
    <label>
      <input type="text" name="txtKeyword" id="txtKeyword" value="<?=$strKeyword?>" />
    </label>
    <label>

        <button type="submit" class="btn btn-warning">ค้นหา</button>


			</center>

            <!--<input type="submit"  name="button" id="button" value="Submit" />-->
    </label>
  </p>

</form>

<div class="container">

<table class="table table-striped table-hover">
<thead>
		<tr>
              <th>ชื่อ</th>
              <th>นามสกุล</th>
              <th>เบอร์โทร</th>

               <th>ที่อยู่</th>
               <th>แก้ไข</th>
                <th>ลบ</th>


        </tr>
 </thead>
 <tbody>
        <?php

$sql="select * 	 from member where fname LIKE '%".$strKeyword."%' or address LIKE '%".$strKeyword."%' or number LIKE '%".$strKeyword."%' or lastname LIKE '%".$strKeyword."%'";
$result=$db->query($sql);
while($row=$result->fetch_array(MYSQLI_BOTH)){
	?>

        <tr>
 <td><?=$row["fname"]?></td>
 <td><?=$row["lastname"]?></td>
 <td><?=$row["number"]?></td>
 <td><?=$row["address"]?></td>
 <td><a class="btn btn-secondary" href="?page=ad_member_edit&memberID=<?=$row['memberID']?>"  role="button">แก้ไข</a></td>
 <td><a class="btn btn-danger" href="?page=ad_member_del&memberID=<?=$row['memberID']?>" role="button">ลบ</a></td>

 </div>


</tr>

<?php
}
?>

</table>
</div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!--
<script>
$("#edit-member1").hide();
$(document).ready(function() {
	$("#edits").click(function(){

   $("#edit-member1").show();

 });

});


</script> -->
