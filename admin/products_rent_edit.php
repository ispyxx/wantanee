
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

#price-box{
  margin-right: 80px;
}
</style>

<body>
<?php $sqll="select * from products where ProductID=$_GET[ProductID]";
// echo $sqll ;exit;
  $result=$db->query($sqll);
  $rowl=$result->fetch_array(MYSQLI_BOTH);
    ?>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลอุปกรณ์</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
          <form action="?page=product_rent_update" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="JavaScript:return fncSubmit();">


          <div class="alert alert-secondary" role="alert">
            <div class="row">
              <div class="col-5">
                <b>ประเภทอุปกรณ์</b>
              </div>
                <div class="col">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="ProductType" id="ProductType" value="1" <?php if($rowl['ProductType']=="1"){?> checked <?php }?>>
                              <label class="form-check-label" for="exampleRadios1">
                                เต็นท์
                              </label>
                            </div>
                            </div>
                  <div class="col">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="ProductType" id="ProductType" value="2" <?php if($rowl['ProductType']=="2"){?> checked <?php }?>>
                              <label class="form-check-label" for="exampleRadios2">
                                โต๊ะ
                              </label>
                            </div>
                            </div>
                  <div class="col">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="ProductType" id="ProductType" value="3" <?php if($rowl['ProductType']=="3"){?> checked <?php }?>>
                              <label class="form-check-label" for="exampleRadios3">
                                เก้าอี้
                              </label>
                            </div>
                            </div>
              </div>
          </div>

          <div class="container" id="center-info">
          <div class="row">
              <div class="mb-2 col">
                <label  class="col-form-label">ชื่ออุปกรณ์:</label>
                <input type="text" class="form-control col-9" name="ProductName" id="ProductName" autocomplete="off" value="<?=$rowl['ProductName']?>" required>
              </div>
          </div>

          <div class="row">
            <div class="col">
              <label  class="col-form-label">จำนวน:</label>
              <input type="text" class="form-control col-10" name="ProductStork" id="ProductStork" autocomplete="off" value="<?=$rowl['ProductStork']?>" required>
            </div>
            <div class="col" id="price-box">
              <label  class="col-form-label">ราคา:</label>
              <input type="text" class="form-control col-10" name="ProductPrice" id="ProductPrice" autocomplete="off" value="<?=$rowl['ProductPrice']?>" required>
            </div>
          </div>
          <br>
          <div id="center-pic">
          <div class="input-group col-10">
            <input type="file" class="form-control" id="ProductPicture" name="ProductPicture" value="<?=$rowl['ProductPicture']?>" autocomplete="off">
            <label class="input-group-text" for="inputGroupFile02">อัปรูปภาพ</label>
          </div>
          </div>

            <!-- <input type="hidden" name="ProductStork"  id="ProductStork"value="0"> -->
            <input type="hidden" name="ProductID"  id="ProductID"value="<?=$rowl['ProductID']?>">
          <br><br>
            <div class="modal-footer" id="footerr">
              <a class="btn btn-secondary" href="?page=products_rentt" role="button">ย้อนกลับ</a>
              <button type="submit" class="btn btn-primary" name="button">แก้ไข</button>
            </div>
              </div>
        </form>
      </div>

    </div>
  </div>
</body>
