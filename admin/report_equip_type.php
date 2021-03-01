<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />


<style>
#margin-top{
  margin-top: 100px;
  background-color: #2EA697;
}

#margin-topp{
  margin-bottom:  30px;
}

#margin-left{
  margin-left: 135px;
}
#between-button{
  margin-top: 135px;
}
#button-size{

  width: 250px;
  height: 200px;
  /* background-color: #008cba; */
}

body {
  font-family: "Chakra Petch", sans-serif;
  color: #777;
}
#between-margin{
  margin-left: 120px;
}
</style>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Table</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>

<body>


<div id="margin-top">
</div>
<div id="between-margin"><h3>รายงานสถิติการเช่าอุปกรณ์จำแนกตามประเภท</h3></div>
  <div id="margin-topp">
  </div>

<!--
<div class="container">
<form>
  <div class="row">
  <input type="text" name="" style="Width:300px; height:50px;"/>
        <div class="col-2">
        <button type="submit" class="btn btn-primary btn-block"> ค้นหา  </button><br>
      </div>
      </div>
</form>
</div> -->
<!--
<div class="container col-9">
  <table class="table table-striped table-hover">
    <thead>
        <tr>
          <th scope="col">ประจำเดือน</th>
          <th >จำนวน (คน)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>มกราคม</td>
          <td></td>
        </tr>

        <tr>
          <td>กุมภาพันธ์</td>
          <td></td>
        </tr>

        <tr>
          <td>มีนาคม</td>
          <td></td>
        </tr>

        <tr>
            <td>เมษายน</td>
            <td></td>
        </tr>



        <tr>
          <td colspan="2"><b>รวมทั้งหมด</b></td>
        </tr>
      </tbody>
</table>
</div> -->
<div id="between-button">
<div class="container">
<div class="d-grid gap-2 col-10 mx-auto" role="group" aria-label="Basic example">
  <div class="row">
    <div class="col">
      <a class="btn btn-dark btn-lg" href="?page=type_tent" id="button-size" role="button"><br><img src="img/tent.png" width="80" height="80"/><br><br>เต็นท์</a>
    </div>
    <div class="col">
      <a class="btn btn-dark btn-lg" href="?page=type_table" id="button-size" role="button"><br><img src="img/table.png" width="80" height="80"/><br><br>โต๊ะ</a>
    </div>
    <div class="col">
    <a class="btn btn-dark btn-lg" href="?page=type_chair" id="button-size" role="button"><br><img src="img/chair.png" width="80" height="80"/><br><br>เก้าอี้</a>
    </div>
  </div>
</div>
</div>
</div>

</body>
