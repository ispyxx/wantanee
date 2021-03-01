

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
</head>

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
  margin-left:  -20px;
}
#alert-res{
  margin-left:  30px;
}
</style>

<body>

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เพิ่มอุปกรณ์</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <form action="?page=product_rent_save" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="JavaScript:return fncSubmit();">

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

          <div class="container" id="center-info">
          <div class="row">
              <div class="mb-2 col">
                <label for="recipient-name" class="col-form-label">ชื่ออุปกรณ์:</label>
                <input type="text" class="form-control col-9" name="ProductName" id="ProductName" autocomplete="off"  required>
              </div>
          </div>

          <div class="row">
            <div class="col-5">
              <label for="recipient-name" class="col-form-label">จำนวน:</label>
              <input type="text" class="form-control col-10" name="ProductStork" id="ProductStork" autocomplete="off"  maxlength="4" required>
            </div>
            <div class="col-5">
              <label for="recipient-name" class="col-form-label">ราคา:</label>
              <input type="text" class="form-control col-10" name="ProductPrice" id="ProductPrice" autocomplete="off"  maxlength="5"required>
            </div>
          </div>
          <br>
          <div id="center-pic">
          <div class="input-group col-10">
            <input type="file" class="form-control" id="ProductPicture" name="ProductPicture" autocomplete="off">
            <label class="input-group-text" for="inputGroupFile02">อัปรูปภาพ</label>
          </div>
          </div>

          <br>

            <div class="modal-footer" id="footerr">
              <a class="btn btn-secondary" href="?page=products_rent" role="button">ย้อนกลับ</a>
              <!-- <a class="btn btn-primary" href="?page=product_rent_save" role="button">บันทึก</a> -->
              <button type="submit" class="btn btn-primary" name="button">บันทึก</button>
            </div>
            </div>

        </form>
      </div>

    </div>
  </div>
</body>
