<!DOCTYPE html>
<html>
  <head>
    <title>Car Booking Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src="assets/js/date.js"></script>  <!--date-->
<style>
	.groove {border-style: groove;}
  #rcorners2 {
		border-style: groove;
		border-radius: 10px;}
	#margin-top {
		  margin-top: 50px;
		}
	#margin-between-top {
			margin-top: 20px;
		}
	#margin-between-bottom {
			margin-top: 20px;
		}
	#margin-between-left {
			margin-left: 20 px;
		}
	#margin-between-right {
			margin-right: 20px;
		}
  #margin-left {
      margin-left: 20 px;
    }
  #font-size-title{
      font-size: 1.5em;
      font-family:sans-serif;
    }
    #dt {
      text-indent: -500px;
      height: 25px;
      width: 200px;
    }

	}
</style>

	</head>

	  <body>

						<div class="container col-7">
								<div class="groove">
									<div class="alert alert-secondary" role="alert">
									  A simple secondary alert—check it out!
									</div>
														<div id="margin-top">
														</div>

                                                                                              <!-- ************************************ หมวดเต็นท์ -->

								<div class="container">
										<div class="col-md-12">
													<div  id="rcorners2">

                            <div class="alert alert-secondary" role="alert" id="font-size-title">
                              เต็นท์
                            </div>
														<div id="margin-between-top">
														</div>



                            <form id="form1" name="form1" method="post" action="">
                             <table id="myTbl" width="650" border="1" cellspacing="2" cellpadding="0">
                               <tr id="firstTr">

                                 <div class="row">
                                                 <div class="col-md-4">
                                                       <select class="form-select" name="data2[]" id="data2[]" required>
                                                       <option selected disabled value="">ขนาดของเต็นท์...</option>
                                                       <option>4*4</option>
                                                       <option>4*8</option>
                                                       <option>4*10</option>
                                                       </select>
                                                  </div>

                                                   <div class="col-md-4">
                                                     <select class="form-select" name="data2[]" id="data2[]" required>
                                                     <option selected disabled value="">สีเต็นท์...</option>
                                                     <option>สีขาว</option>
                                                     <option>สีเขียว</option>
                                                     <option>สีเขียว/น้ำเงิน</option>
                                                     </select>
                                                   </div>

                                                   <div class="col-md-4">
                                                       <select class="form-select" name="data2[]" id="data2[]" required>
                                                       <option selected disabled value="">จำนวน...</option>
                                                       <option>...</option>
                                                       </select>
                                                   </div>

;




                                  </div>
                                          <!-- name="data2[]" id="data2[]" -->

                                 </tr>
                             </table>

                             <table id="myTbl" width="650" border="1" cellspacing="2" cellpadding="0">
                            <tr id="firstTr">
                            <!-- // table id="myTbl"
                            // tr id="firstTr" -->

                            <script language="javascript" src="js/jquery-1.4.1.min.js"></script>
                            <script type="text/javascript">
                            $(function(){
                                $("#addRow").click(function(){
                                    $("#myTbl").append($("#firstTr").clone());
                                });
                                $("#removeRow").click(function(){
                                    if($("#myTbl tr").size()>1){
                                        $("#myTbl tr:last").remove();
                                    }else{
                                        alert("ต้องมีรายการข้อมูลอย่างน้อย 1 รายการ");
                                    }
                                });
                            });
                            </script>




                            <div id="margin-between-top">
                    			  </div>

                                <div class="row">
                                  	<div class="col-md-2">
                                        <button type="button" id="addRow" class="btn btn-outline-success btn-sm">+เพิ่มข้อมูล</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" id="removeRow" class="btn btn-outline-secondary btn-sm">-ลบข้อมูล</button>
                                    </div>
    	                          </div>

														<div id="margin-between-bottom">
														</div>
												</div>
											</div>
								</div>



                                                                                            <!-- ************************************ หมวดโต๊ะ -->

                <div class="container">
                    <div class="col-md-12">
                          <div  id="rcorners2">

                            <div class="alert alert-secondary" role="alert" id="font-size-title">
                              โต๊ะ
                            </div>
                            <div id="margin-between-top">
                            </div>


                                <div class="row">
                                                <div class="col-md-4">
                                                      <select class="form-select" id="validationCustom04" required>
                                                      <option selected disabled value="">ลักษณะโต๊ะ...</option>
                                                      <option>ทรงกลม</option>
                                                      <option>ทรงสี่เหลี่ยม</option>
                                                      </select>
                                                 </div>

                                                  <div class="col-md-4">
                                                      <select class="form-select" id="validationCustom04" required>
                                                      <option selected disabled value="">จำนวน...</option>
                                                      <option>...</option>
                                                      </select>
                                                  </div>
                                 </div>


                            <div id="margin-between-top">
                            </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <button type="button" id="addRow" class="btn btn-outline-success btn-sm">+เพิ่มข้อมูล</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" id="removeRow" class="btn btn-outline-secondary btn-sm">-ลบข้อมูล</button>
                                    </div>
                                </div>

                            <div id="margin-between-bottom">
                            </div>
                        </div>
                      </div>
                </div>


                                                                                            <!-- ************************************ หมวดเก้าอี้ -->

                <div class="container">
                  <div class="col-md-12">
                    <div  id="rcorners2">

                    <div class="alert alert-secondary" role="alert" id="font-size-title">
                    เก้าอี้
                    </div>
                    <div id="margin-between-top">
                    </div>


                                          <div class="row">
                                            <div class="col-md-4">
                                              <select class="form-select" id="validationCustom04" required>
                                              <option selected disabled value="">จำนวน...</option>
                                              <option>...</option>
                                              </select>
                                            </div>
                                          </div>


                    <div id="margin-between-top">
                    </div>

                      <div class="row">
                        <div class="col-md-2">
                        <button type="button" id="addRow" class="btn btn-outline-success btn-sm">+เพิ่มข้อมูล</button>
                        </div>
                        <div class="col-md-2">
                        <button type="button" id="removeRow" class="btn btn-outline-secondary btn-sm">-ลบข้อมูล</button>
                        </div>
                      </div>

                    <div id="margin-between-bottom">
                    </div>
                    </div>
                  </div>
                </div>


                                                    <!-- ************************************     รายละเอียดวันเวลาและสถานที่ -->

                <div class="container">
                  <div class="col-md-12">
                    <div  id="rcorners2">

                    <div class="alert alert-secondary" role="alert" id="font-size-title">
                    รายละเอียดวันเวลาและสถานที่
                    </div>
                    <div id="margin-between-top">
                    </div>


                      <!-- <div class="row">

                        <div class="col-md-4">
                          <label>time<br></label><br>
                          <input type="date" id="datePickerId" />

                      </div>

                      <div class="col-md-4">
                          <label>time<br>
                         <input type="time">
                         </label>



                      <div id="margin-between-top">
                      </div>

                      <div id="margin-between-bottom">
                      </div>
                      </div>

                  </div> -->

                  <div class="col-md-7">

                   <label>ที่อยู่</label>
                     <input type="text" class="form-control" placeholder=" " name="address" >

                  </div>
                </div>







						<!-- <div class="container">
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
						  <label class="form-check-label" for="flexRadioDefault1">
						    Default radio
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
						  <label class="form-check-label" for="flexRadioDefault2">
						    Default checked radio
						  </label>
						</div>
							</div> -->



							  </div>


					  </div>
            	  </div>
                	  </div>





	  </body>
</html>
