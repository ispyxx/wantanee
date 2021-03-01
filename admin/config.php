<!doctype html>
<html>
<head>
<meta charset="utf-8">

</head>

<body>
      <?php
      $db_server="localhost";
      $db_user="root";
      $db_pass="";
      $db_src="wantanee";
      $db=new mysqli($db_server,$db_user,$db_pass,$db_src);
      if($db->connect_errno){
      echo "ไม่สามารถติดต่อ MySQL ได้: ".$db->connect_error;
      }
      $db->query("set names utf8");
      ?>

</body>
</html>
