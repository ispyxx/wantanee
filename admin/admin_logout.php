<style>
			body {
				background-color: #2EA697;
			}
			#margin-top {
			  margin-top: 150px;
			}

			#margin-bottom {
			  margin-top: 224px;
			}
</style>

<div id="margin-top">
  <div class="container">
    <div class="alert alert-success"style="padding: 40px 0;" role="alert">
      <div class="col-7">
        <?php
        session_destroy();
        echo"Logout สำเร็จ";
        echo"<meta http-equiv='refresh' content='1;url=https://wantanee.com/' />";

        ?>
      </div>
    </div>
  </div>
</div>

<div id="margin-bottom">
  </div>
