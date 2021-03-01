<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>fordev22</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Select2 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

</head>
<body>

	<?php
	include ('config.php');
	$select_data = "SELECT * FROM em_rentt"
			  or die ("Error : ".mysqlierror($select_data));
    $rs_select = mysqli_query($db, $select_data);
                //echo ($query_level);//test query
	?>
	<div class="container">

		<div class="row">
			<div class="col-3">
			</div>


			<div class="col-6">
				<br>
				<form action="se_save.php" method="POST">
				<div class="card">
				<div class="card-header bg-secondary text-white">
    			<h5><i class="fa fa-user-circle-o " aria-hidden="true"></i>
					เรียกข้อมูลจาก Database มาแสดงใน Select + Select2</h5>
  				</div>
  				<div class="card-body">


  					<div class="form-group">
    					<label for="exampleInputEmail1">Product</label>
    					<select class="form-control" name="	em_size_tent">
    					  <option selected disabled value="">--ขนาดของเต็นท์--</option>

    					  <?php foreach ($rs_select as $rs) {?>
    					  	<option  value="<?php echo $rs['em_size_tent']; ?>">
    					  	ขนาด <?php echo $rs['em_size_tent']; ?>
    					  	</option>
    					  <?php }?>

						</select>

  					</div>

  					</div>

<button type="submit" class="btn btn-block btn-danger">
					<i class="fa fa-sign-in" aria-hidden="true"></i>
  					Submit</button>

  				</div>
				</form>
			</div>
			</div>


			<script type="text/javascript">
				$(document).ready(function() {
				$('.select2').select2({
				closeOnSelect: false
				});
				});
			</script>
      <div class="col-3">
			</div>
		</div>
	</div>

</body>
</html>
