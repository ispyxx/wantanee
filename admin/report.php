<html>


  <?php
      $jan=0;
      $fub=0;
      $mar=0;
      $Apr=0;
      $May=0;
      $Jun=0;

      $Jul=0;
      $Aug=0;
      $Sep=0;
      $Oct=0;
      $Nov=0;
      $Dec=0;

      $sql="select month(od_date_start) from rent_order";
      $result=$db->query($sql);
      while($row=$result->fetch_array(MYSQLI_ASSOC)){
        if($row["month(od_date_start)"]==1){
          $jan++;
        }
        if($row["month(od_date_start)"]==2){
          $fub++;
        }
        if($row["month(od_date_start)"]==3){
          $mar++;
        }
        if($row["month(od_date_start)"]==4){
          $Apr++;
        }
        if($row["month(od_date_start)"]==5){
          $May++;
        }
        if($row["month(od_date_start)"]==6){
          $Jun++;
        }


        if($row["month(od_date_start)"]==7){
          $Jul++;
        }
        if($row["month(od_date_start)"]==8){
          $Aug++;
        }
        if($row["month(od_date_start)"]==9){
          $Sep++;
        }
        if($row["month(od_date_start)"]==10){
          $Oct++;
        }
        if($row["month(od_date_start)"]==11){
          $Nov++;
        }
        if($row["month(od_date_start)"]==12){
          $Dec++;
        }

}
      $all=$jan+$fub+$mar+$Apr+$May+$Jun+$Jul+$Aug+$Sep+$Oct+$Nov+$Dec;
?>


  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['เดือน', 'จำนวน(คน)'],
          ['มกราคม',  <?=$jan?>],
          ['กุมภาพันธ์', <?=$fub?>],
          ['มีนาคม',  <?=$mar?>],
          ['เมษายน',  <?=$Apr?>],
          ['พฤษภาคม',  <?=$May?>],
          ['มิถุนายน',  <?=$Jun?>],

          ['กรกฎาคม',  <?=$Jul?>],
          ['สิงหาคม',  <?=$Aug?>],
          ['กันยายน',  <?=$Sep?>],
          ['ตุลาคม',  <?=$Oct?>],
          ['พฤศจิกายน',  <?=$Nov?>],
          ['ธันวาคม',  <?=$Dec?>]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
