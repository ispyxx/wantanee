<?php
include('h.php');
//1. เชื่อมต่อ database:
include('config.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
error_reporting(error_reporting() & ~E_NOTICE);
//2. query ข้อมูลจากตาราง tb_admin:


$sql = "select * from member";
$result = $db->query($sql);
$row = $result->fetch_array(MYSQLI_BOTH);


//  $sql="select * from rent_order where orderID=$_GET[orderID]";
// $result=$db->query($sql);
// $row=$result->fetch_array(MYSQLI_BOTH);
?>
<script>
  $(document).ready(function() {
    $('#example1').DataTable({
      "aaSorting": [
        [0, 'ASC']
      ],
      //"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
    });
  });
</script>

<table border="2" class="display table table-bordered" id="example1" align="center">
  <thead>
    <tr class="info">
      <th>ชื่อ</th>
      <th>นามสกุล</th>
      <th>เพศ</th>
      <th>เบอร์โทร</th>
      <th>ที่อยู่</th>
      <th>edit</th>
      <th>delete</th>
    </tr>
  </thead>


  <?php do { ?>

    <tr>
      <td><?php echo $row['fname']; ?></td>
      <td><?php echo $row['lastname']; ?></td>
      <td><?php echo $row['sex']; ?></td>
      <td><?php echo $row['number']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><a href="admin.php?act=edit&ID=<?php echo $row_am['a_id']; ?>" class="btn btn-warning btn-xs"> แก้ไข </a> </td>
      <td><a href="admin_form_delete_db.php?ID=<?php echo $row_am['a_id']; ?>" class='btn btn-danger btn-xs' onclick="return confirm('ยันยันการลบ')">ลบ</a> </td>
    </tr>

  <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>

</table>