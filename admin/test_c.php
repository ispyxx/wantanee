<a class="btn btn-info btn-lg" href="?page=report_damaged_devices_add" role="button"><img src="img/plus.png" width="30" height="30"/>&nbsp;&nbsp;แจ้งอุปกรณ์ชำรุด</a>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>วันที่แจ้ง</th>
      <th>อุปกรณ์</th>
      <th>ปัญหาที่พบ</th>
      <th>รูปภาพ</th>

      <th>สถานะ</th>
      <th>แก้ไข</th>
      <th>ลบ</th>


    </tr>
  </thead>
  <tbody>


<?php

$sql="select * from em_damaged where tool_date";
$result=$db->query($sql);
while($row=$result->fetch_array(MYSQLI_BOTH)){
?>
 <tr>

   <td><?=$row["tool_date"]?></td>
   <td><?=$row["tool_name"]?></td>
   <td><?=$row["tool_problem"]?></td>
   <td><img src="photo_upload/<?=$row["tool_pic"]?>" class="img-thumbnail" id="myImg" height="150"width="150" ></td>
   <td><div class="alert alert-secondary" role="alert"><?=$row["tool_status"]?> </div> </td>

<?php
 if(@$_SESSION["sess_username"]){
?>
<!-- <td><a href="?page=member_delete&member_id=<?=$row["member_id"]?>" onclick="return confirm('คุณแน่ใจจะลบจริงหรือไม่')">
<img src="img/delete.png" width="54" height="57" /></td>
 <td><a href="?page=member_edit&member_id=<?=$row["member_id"]?>" onclick="return confirm('คุณแน่ใจจะแก้ไขจริงหรือไม่')">
 <img src="img/edit.png" width="47" height="52" /> </td> -->

 <td><a class="btn btn-secondary" href="?page=test_edit&em_damgedID=<?=$row['em_damgedID']?>"  role="button">แก้ไข</a></td>
  <td><a class="btn btn-danger" href="?page=report_damaged_devices_del&em_damgedID=<?=$row['em_damgedID']?>" role="button">ลบ</a></td>

 </tr>

<?php
 }
}
?>

</table>
</div>
