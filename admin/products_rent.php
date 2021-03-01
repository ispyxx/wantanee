


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
	<body>

    <?php
    //เปิด ดึงข้อมูลจาก products
    $data=[]; //อาร์เรย์เก็บข้อมูลทั้งก้อน
    $i=0;
    $sqls="select * from products";
    $result=$db->query($sqls);
    while($rows=$result->fetch_array(MYSQLI_ASSOC)) {
      $data[$i]=$rows;
      $i++;
    }
    // ปิด ดึงข้อมูลจาก products
    $Productype=[];// ประกาศอาร์เรย์ productType

    foreach ($data as $value) {
      $Productype[$value['ProductType']]=[];
    }



        foreach ($Productype as $key => $value) {
          $i=0;
            $Productype[$key]=[];
            foreach ($data as $k => $va) {

              if ($key==$va['ProductType']) {

                $Productype[$key][$i]=$va;
                $i++;
              }
              }

            }

            // $tent=$Productype['เต็นท์'];
            // $table=$Productype['โต๊ะ'];
            // $chair=$Productype['เก้าอี้'];


    ?>

<?php
		$sqls="select * from products";
		$result=$db->query($sqls);
		$rowa=$result->fetch_array(MYSQLI_ASSOC)
?>
    <div id="between-top"></div>

		<div class="container-fluid col-12">
      <div class="alert alert-primary" role="alert">
        <div class="row">
          <div class="col-10" id="head-size">
           ข้อมูลอุปกรณ์
          </div>
          <div class="col-1" id="margin-header">
          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><img src='img/plus.png' width='20' height='20'/>&nbsp;&nbsp;เพิ่มอุปกรณ์</button>
					<!-- <a href="?page=products_rent_add" class='btn btn-secondary'><img src='img/plus.png' width='20' height='20'/>&nbsp;&nbsp;เพื่มอุปกรณ์</a> -->

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
						<th>ราคา</th>
						<th>คงเหลือ</th>
            <th>ภาพอุปกรณ์</th>

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
							<td><?=$row["ProductName"];?></td>
							<td><?=$row["ProductPrice"];?></td>
	            <td><?=$row["ProductStork"];?></td>
	            <td><img src='photo_upload/$row[ProductPicture]' width='150' height='150'/></a></td>
							<!-- <td><a href='javascript:void(0);' class='btn btn-secondary btn-lg col-5' onclick='editFunc($row['ProductID'])'><img src='img/edit-w.png' width='15' height='15'/></a></td> -->
					<!-- <a href="javascript:void(0);" onClick="deleteFunc({{ $member_id }})" data-toggle="tooltip" data-original-title="Delete" class="item btn btn-danger itemdelete"> -->
							<!-- <a href="javascript:void(0)" onClick="editFunc({{ $member_id }})" data-original-title="Edit" class="item btn btn-warning itemedit" > -->
							<!-- href="?page=rental_delete&RentID=<?=$rows['RentID']?>" -->
							<td><a href="javascript:void(0)" onclick="editFunc(<?=$row['ProductID']?>)" class='btn btn-secondary'><img src='img/edit-w.png' width='15' height='15'/></button></td>
								<td><a href="javascript:void(0)" onclick="deleteFunc(<?=$row['ProductID']?>)" class='btn btn-danger'><img src='img/del2.png' width='15' height='15'/></button></td>

								<!-- <td><a href="?page=products_rent_del&ProductID=<?=$row['ProductID']?>" class='btn btn-danger'><img src='img/del2.png' width='15' height='15'/></button></td> -->
<!--
							<td><button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
							  <img src='img/del2.png' width='15' height='15'/></button></td> -->
						</tr>
				<?php	}?>
				</tbody>
			</table>
		</div>
<!-- <?php $ProductID=$row['ProductID']+1; ?> -->
      <!-- *********************************************************************************************  เพิ่มอุปกรณ์ -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">เพิ่มอุปกรณ์</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="#" method="post" novalidate="novalidate" id="form_add">

                <div class="alert alert-secondary" role="alert">
                  <div class="row">
                    <div class="col-5">
                      <b>ประเภทอุปกรณ์</b>
                    </div>
                      <div class="col">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ProductType" id="ProductType" value="1">
                                    <label class="form-check-label" for="exampleRadios1">
                                      เต็นท์
                                    </label>
                                  </div>
                                  </div>
                        <div class="col">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ProductType" id="ProductType" value="2">
                                    <label class="form-check-label" for="exampleRadios2">
                                      โต๊ะ
                                    </label>
                                  </div>
                                  </div>
                        <div class="col">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ProductType" id="ProductType" value="3">
                                    <label class="form-check-label" for="exampleRadios3">
                                      เก้าอี้
                                    </label>
                                  </div>
                                  </div>
                    </div>
                </div>


                <div class="row">
                    <div class="mb-5 col-6">
                      <label for="recipient-name" class="col-form-label">ชื่ออุปกรณ์:</label>
                      <input type="text" class="form-control col-12" name="ProductName" id="ProductName" autocomplete="off"  required>
                    </div>
                    <div class="mb-2 col-3">
                      <label for="recipient-name" class="col-form-label">ราคา:</label>
                      <input type="text" class="form-control col-9" name="ProductPrice" id="ProductPrice" autocomplete="off" required>
                    </div>
										<div class="mb-2 col-3">
											<label for="recipient-name" class="col-form-label">จำนวน:</label>
											<input type="text" class="form-control col-8" name="ProductStork" id="ProductStork" autocomplete="off"  required>
										</div>

                </div>
                <div class="input-group mb-3">
                  <input type="file" class="form-control" id="ProductPicture" name="ProductPicture" autocomplete="off">
                  <label class="input-group-text" for="inputGroupFile02">อัปรูปภาพ</label>
                </div>
                  <!-- <input type="hidden" name="ProductID" id="ProductID" value="<?$ProductID?>"> -->
                  <!-- <input type="hidden" name="ProductType" id="ProductType" value="1"> -->
                  <!--   -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">เพิ่มอุปกรณ์</button>
                  </div>
              </form>
            </div>

          </div>
        </div>
      </div>


			<!-- *********************************************************************************************  จัดการสต็อก -->
			<div class="modal fade" id="pdStork" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">สต๊อก</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form action="#" method="post" novalidate="novalidate" id="form_stork">
								<!-- ลูปอุปกรณ์มาใส่ -->
								<div class="row">
										<div class="mb-7 col">
											<label for="recipient-name" class="col-form-label">ชื่ออุปกรณ์:</label>
											<select class="form-select" aria-label="Default select example" name="productscount">
												  <option selected disabled value="">-- เลือกอุปกรณ์ --</option>
												<?php
	                      $sqla="select * from products";
	                      $result=$db->query($sqla);
	                      while ($roww=$result->fetch_array(MYSQLI_BOTH)){ ?>
	                        <option value="<?=$roww["ProductID"];?>"><?php echo $roww["ProductName"]; ?></option>
	                      <?php } ?>
											</select>
										</div>
										<div class="mb-1 col">
											<label for="recipient-name" class="col-form-label">จำนวน:</label>
											<input type="text" class="form-control col-9" name="ProductStork" id="ProductStork" autocomplete="off" required>
										</div>
								</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
										<button type="submit" class="btn btn-primary">เพิ่ม</button>
									</div>
							</form>
						</div>

					</div>
				</div>
			</div>




      <!-- *********************************************************************************************  แก้ไข-->

			<?php   $sqll="select * from products";
			// echo $sqll ;exit;
				$result=$db->query($sqll);
				$rowl=$result->fetch_array(MYSQLI_BOTH);
					?>
      <div class="modal fade" id="pdEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลอุปกรณ์</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="#" method="post" novalidate="novalidate" id="form_edit">

                <div class="alert alert-secondary" role="alert">
                  <div class="row">
                    <div class="col-5">
                      <b>ประเภทอุปกรณ์</b>
                    </div>
                      <div class="col">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ProductTypeedit" id="ProductTypeedit" value="1">
                                    <label class="form-check-label" for="exampleRadios1">
                                      เต็นท์
                                    </label>
                                  </div>
                                  </div>
                        <div class="col">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ProductTypeedit" id="ProductTypeedit" value="2">
                                    <label class="form-check-label" for="exampleRadios2">
                                      โต๊ะ
                                    </label>
                                  </div>
                                  </div>
                        <div class="col">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ProductTypeedit" id="ProductTypeedit" value="3">
                                    <label class="form-check-label" for="exampleRadios3">
                                      เก้าอี้
                                    </label>
                                  </div>
                                  </div>
                    </div>
                </div>




								<div class="row">
										<div class="mb-2 col">
											<label  class="col-form-label">ชื่ออุปกรณ์:</label>
											<input type="text" class="form-control col-11" name="ProductNameedit" id="ProductNameedit" autocomplete="off" value="<?=$rowl['ProductName']?>" required>
										</div>
								</div>

								<div class="row">
			            <div class="col">
			              <label  class="col-form-label">จำนวน:</label>
			              <input type="text" class="form-control col-10" name="ProductStorkedit" id="ProductStorkedit" autocomplete="off" value="<?=$rowl['ProductStork']?>" required>
			            </div>
			            <div class="col" id="price-box">
			              <label  class="col-form-label">ราคา [บาท]:</label>
			              <input type="text" class="form-control col-10" name="ProductPriceedit" id="ProductPriceedit" autocomplete="off" value="<?=$rowl['ProductPrice']?>" required>
			            </div>
			          </div>
								<br><br>
                <div class="input-group mb-3">
                  <input type="file" class="form-control" id="ProductPictureedit" name="ProductPictureedit" value="<?=$rowl['ProductPicture']?>" autocomplete="off">
                  <label class="input-group-text" for="inputGroupFile02">อัปรูปภาพ</label>
                </div>
                  <!-- <input type="hidden" name="ProductID" id="ProductID" value="<?$ProductID?>"> -->
                  <!-- <input type="hidden" name="ProductType" id="ProductType" value="1"> -->
	                  <!-- <input type="hidden" name="ProductStork"  id="ProductStork"value="0"> -->
									<input type="hidden" name="ProductID"  id="ProductID"value="<?=$row['ProductID']?>">

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">แก้ไข</button>
                  </div>
              </form>
            </div>

          </div>
        </div>
      </div>

			<!-- ********************************************************************************************************** ลบ -->

			<!-- Modal -->
<div class="modal fade" id="pddel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">คำเตือน</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
			<form action="#" method="post" novalidate="novalidate" id="form_del">
	      <div class="modal-body">
	        ต้องการลบข้อมูล?
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ย้อนกลับ</button>
	        <!-- <button type="submit" onClick="delFunc(<?=$row['ProductID']?>)" class="btn btn-danger">ลบ</button> -->
					<!-- <a href="javascript:void(0);" onClick="delFunc(<?=$row['ProductID']?>)" data-toggle="tooltip" data-original-title="Delete" class="item btn btn-danger itemdelete"> -->
	      </div>
					<input type="hidden" name="productID" value="<?=$_POST["ProductID"]?>">
		</form>
    </div>
  </div>
</div>

	</body>

  <script type="text/javascript">

		$(document).ready(function() {
			var dataTable = $('#customer-grid').DataTable();
			$('#form_stork').submit(function(e) {
		 		 e.preventDefault();
		 		 var formData = new FormData(this);
		 		 $.ajax({
		 		 type:'POST',
		 		 url: "product_rent_stork_update.php",
		 		 data: formData,
		 		 cache:false,
		 		 contentType: false,
		 		 processData: false,
		 		 success: (data) => {
		 				 Swal.fire({
		 						 position: 'center',
		 						 icon: 'success',
		 						 title: 'เพิ่มจำนวนสำเร็จ',
		 						 showConfirmButton: false,
		 						 timer: 1500
		 					 });
		 				 $("#pdStork").modal('hide');

		 				 // var dataTable = $('#customer-grid').DataTable();
		 				 oTable.fnDraw(false);

		 		 },
		 		 error: function(data){
		 		 console.log(data);
		 		 Swal.fire({
		 				 icon: 'error',
		 				 title: 'Oops...',
		 				 text: 'เพิ่มจำนวนไม่ได้!'

		 			 });
		 		 }
		  });
		 });

		} );

  $(function(){
     // เมื่อฟอร์มการเรียกใช้ evnet submit ข้อมูล
     $("#form_add").on("submit",function(e){
         e.preventDefault();
 var formData = new FormData(this);
 $.ajax({
 type:'POST',
 url:"product_rent_save.php",
 data: formData,
 cache:false,
 contentType: false,
 processData: false,
 success: (data) => {
   if (data) {
     console.log(data);
     Swal.fire({
         position: 'center',
         icon: 'success',
         title: 'Your work has been saved'+data,
         showConfirmButton: false,
         // timer: 2000,

         // window.location.reload("rental.php");
       })}
       // var delayInMilliseconds = 2000; //1 second

    setTimeout(function() {
    window.location='?page=products_rent';
    //your code to be executed after 1 second
    }, delayInMilliseconds);
 }
});
    });
 });


 																																			// ปุ่มแก้ไขข้อมูล
function editFunc(id){
	$.ajax({
											 type:"POST",
											 url: "selectdata.php",
											 data: { id: id },
											 dataType: 'json',
											 success: function(res){
													 $('#pdEdit').modal('show');
													 $('#ProductStorkedit').val(res.ProductStork);
													 $('#ProductNameedit').val(res.ProductName);
													 $('#ProductTypeedit').val(res.ProductType);
													 $('#ProductPriceedit').val(res.ProductPrice);
													 $('#ProductPictureedit').val(res.ProductPicture);


													 },
                                   error: function (jqXHR, textStatus, errorThrown) {
                                  alert("ไม่สำเร็จ");
																		console.log(res);
                                    }
													 });

}

  </script>
	  <script type="text/javascript">

function deleteFunc(id){
	$.ajax({
											 type:"POST",
											 url: "deldata.php",
											 data: { id: id },
											 dataType: 'json',
											 success: function(res){
													 $('#pddel').modal('show');
													 success: function(res){
	 														var oTable = $('#membercustomer').dataTable();
	 														oTable.fnDraw(false);
	 														successFunction(1);

	 												},

													 },
                                   error: function (jqXHR, textStatus, errorThrown) {
                                  alert("ไม่สำเร็จ");
																		console.log(res);
                                    }
													 });

}

  </script>
  <!-- *******************************************************************  แก้ไข -->
  <script type="text/javascript">
  $(function(){
     // เมื่อฟอร์มการเรียกใช้ evnet submit ข้อมูล
     $("#form_add").on("submit",function(e){
         e.preventDefault();
 var formData = new FormData(this);
 $.ajax({
 type:'POST',
 url:"product_rent_update.php",
 // data: formData,
 cache:false,
 contentType: false,
 processData: false,
 success: (data) => {
   if (data) {
     console.log(data);
     Swal.fire({
         position: 'center',
         icon: 'success',
         title: 'Your work has been saved'+data,
         showConfirmButton: false,
         timer: 2000,

         // window.location.reload("rental.php");
       })}
       var delayInMilliseconds = 2000; //1 second

    setTimeout(function() {
    window.location='?page=products_rent';
    //your code to be executed after 1 second
    }, delayInMilliseconds);
 }
});
    });
 });
  </script>

	<!-- *******************************************************************  ลบข้อมูล -->
  <script type="text/javascript">
  $(function delFunc(productID){
     // เมื่อฟอร์มการเรียกใช้ evnet submit ข้อมูล
     $("#form_del").on("submit",function(e){
         e.preventDefault();
 var formData = new FormData(this);
 $.ajax({
 type:'POST',
 url:"product_rent_del.php",
 // data: productID,
 // type: 'DELETE',
 cache:false,
 contentType: false,
 processData: false,
 success: (data) => {
   if (data) {
     // console.log(data);
     Swal.fire({
         position: 'center',
         icon: 'success',
         title: 'Your work has been saved'+data,
         showConfirmButton: false,
         // timer: 2000,

         // window.location.reload("rental.php");
       })}
       // var delayInMilliseconds = 2000; //1 second

    setTimeout(function() {
    window.location='?page=products_rent';
    //your code to be executed after 1 second
    }, delayInMilliseconds);
 }
});
    });
 });
  </script>

	<script>
	function pdEdit(ProductID){

			$.ajax({
			type:"POST",
			url: "product_rent_update.php", //หน้าที่ไปดึงข้อมูล
			data: ProductID: ProductID,
			// dataType: 'json',
			success: function(editt){
					$('#pdEdit').modal('show');
					$('#ProductID').val(editt.ProductID);
					$('#ProductName').val(editt.ProductName);
					$('#ProductPrice').val(editt.ProductPrice);
					$('#ProductPicture').val(editt.ProductPicture);
					$('#ProductStork').val(editt.ProductStork);
					}
					});
			}
		</script>

</html>
