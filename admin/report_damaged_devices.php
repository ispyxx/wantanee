
<style>

#margin-top {
	margin-top: 100px;
}
#margin-top2 {
	margin-top: 50px;
}

#margin-bottom {
	margin-top: 216px;
}

#margin-before {
	margin-bottom:20px;
}
#margin-top2 {
	margin-top: 20px;
}
#margin-button-form{
	margin-top: -5px;
}
#margin-add {
	margin-left: 900px;
}

body {
  font-family: "Chakra Petch", sans-serif;
color: #1E1D1D;
}
</style>

<style>


#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 550px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)}
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
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
<body>
<div id="margin-top">
</div>

<h3>รายงานอุปกรณ์ที่ชำรุดเสียหาย</h3>

<div id="margin-add">
<a class="btn btn-info btn-lg" href="?page=report_damaged_devices_add" role="button"><img src="img/plus.png" width="30" height="30"/>&nbsp;&nbsp;แจ้งอุปกรณ์ชำรุด</a>
</div>
<div id="margin-top2"></div>

	<div class="alert alert-secondary" role="alert">

			<form id="form2" name="form2" method="post" action="">

					<center>

						<label>
							<input type="text" name="txtKeyword" id="txtKeyword" value="<?=$strKeyword?>" autocomplete="off" />
						</label>
						<label>
							<button type="submit" class="btn btn-warning">ค้นหา</button>
						</center>
						<!--<input type="submit"  name="button" id="button" value="Submit" />-->
					</label>

			</form>

	</div>





<div id="margin-before"></div>
<div class="container">

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

			$sql="select * from em_damaged where tool_date LIKE '%".$strKeyword."%' or tool_name LIKE '%".$strKeyword."%' or tool_problem LIKE '% ".$strKeyword."%' or tool_status LIKE '%".$strKeyword."%'";

			$result=$db->query($sql);

			while($row=$result->fetch_array(MYSQLI_BOTH)){
				?>
				<tr>
				<td><?=$row["tool_date"]?></td>
				<td><?=$row["tool_name"]?></td>
				<td><?=$row["tool_problem"]?></td>
				<td><img src="photo_upload/<?=$row["tool_pic"]?>" class="img-thumbnail" id="myImg" height="150"width="150" ></td>
				<td>

			<div class="alert alert-secondary" role="alert">
				<?=$row["tool_status"]?>
				</div>
				</td>

				<td><a class="btn btn-secondary" href="?page=report_damaged_devices_edit&em_damgedID=<?=$row['em_damgedID']?>"  role="button">แก้ไข</a></td>
				<td><a class="btn btn-danger" href="?page=report_damaged_devices_del&em_damgedID=<?=$row['em_damgedID']?>" role="button">ลบ</a></td>

			</div>


		</tr>

		<?php

	}
	?>

	<!-- The Modal -->
	<div id="myModal" class="modal">
	  <span class="close">&times;</span>
	  <img class="modal-content" id="img01">
	  <div id="caption"></div>
	</div>

	<script>
	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById("myImg");
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	img.onclick = function(){
	  modal.style.display = "block";
	  modalImg.src = this.src;
	  captionText.innerHTML = this.alt;
	}

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}
	</script>

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
</body>
