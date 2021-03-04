

<!DOCTYPE html>
<html>
	<title>Datatable Demo </title>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
		<!-- <script type="text/javascript" charset="utf8" src="assets/dataTables/js/dataTables.bootstrap.min.js"></script> -->
		<script type="text/javascript" charset="utf8" src="assets/datatables/js/dataTables.bootstrap4.min.js"></script>
		<link rel="stylesheet" href="assets/datatables/css/dataTables.bootstrap4.min.css">

    <!-- อะเลิท -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


    <style>

    body {
      font-family: "Chakra Petch", sans-serif;
      color: #111111;
    }

      #between-top{
        margin-bottom: 35px;
      }

      #head-size{
        font-size: 1.3em;
      }
      #margin-header{
        margin-right:20px;
      }
    </style>
	</head>

  <div id="between-top"></div>

  <div class="container-fluid col-12">
    <div class="alert alert-primary" role="alert">
      <div class="row">
        <div class="col-10" id="head-size">
         ข้อมูลอุปกรณ์
        </div>
        <div class="col-1" id="margin-header">
        <!-- <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><img src='img/plus.png' width='20' height='20'/>&nbsp;&nbsp;เพิ่มอุปกรณ์</button> -->
        <a href="?page=products_rent_add" class='btn btn-dark'><img src='img/plus.png' width='20' height='20'/>&nbsp;&nbsp;เพื่มอุปกรณ์</a>

        </div>
        <!-- <div class="col-1" id="margin-header">
        <a href="javascript:void(0);" onclick="del(<?=$rowa["ProductID"];?>)" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#pdStork" data-bs-whatever="@mdo"><img src='img/plus.png' width='20' height='20'/>&nbsp;&nbsp;จัดการสต็อก</a>
        </div> -->
        </div>
    </div>
    <table id="customer-grid"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
      <thead>
        <tr>

          <th>รหัสอุปกรณ์</th>
          <th>ประเภท</th>
          <th>ชื่ออุปกรณ์</th>
          
<th>รูปภาพ</th>
          <th>แก้ไข</th>
          <th>ลบ</th>
        </tr>
      </thead>

      <tbody>
        <?php $sqls="select * from products";
        $result=$db->query($sqls);
        while ($row=$result->fetch_array(MYSQLI_ASSOC)){


          if($row["ProductType"]=='1'){
              // echo "กำลังดำเนินการ";
              $row["ProductType"]='เต็นท์';   
          }
          elseif ($row["ProductType"]=='2') {
            $row["ProductType"]='โต๊ะ';
          }
          elseif ($row["ProductType"]=='3') {
            $row["ProductType"]='เก้าอี้';
          }
          elseif(empty($row["ProductType"])){
            // echo "สำเร็จ";
               $row["Status"]="";
          }
          ?>
          <tr>
            <td><?=$row["ProductID"];?></td>
            <td><?=$row["ProductType"];?></td>
            <td>แก้</td>
                <td><img src='photo_upload/<?=$row["ProductPicture"]?>' width='150' height='150'/></a></td>
        
            <td><a href="?page=products_rent_edit&ProductID=<?=$row['ProductID']?>"  class='btn btn-secondary'><img src='img/edit-w.png' width='15' height='15'/></button></td>
            <td><a href="?page=products_rent_del&ProductID=<?=$row['ProductID']?>"  class='btn btn-danger'><img src='img/del2.png' width='15' height='15'/></button></td>

              <!-- <td><a href="?page=products_rent_del&ProductID=<?=$row['ProductID']?>" class='btn btn-danger'><img src='img/del2.png' width='15' height='15'/></button></td> -->
<!--
            <td><button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
              <img src='img/del2.png' width='15' height='15'/></button></td> -->
          </tr>
      <?php	}?>
      </tbody>
    </table>
  </div>


  <script type="text/javascript" language="javascript" >
    $(document).ready(function() {
      var dataTable = $('#customer-grid').DataTable( {
      } );
    } );
  </script>
