 <!-- FullCalendar -->
 <link href='vendor/fullcalendar-3.10.0/fullcalendar.css' rel='stylesheet' media="all" />

<!-- Main CSS-->
<link href="css/theme.css" rel="stylesheet" media="all">

<style type="text/css">
    /* force class color to override the bootstrap base rule
       NOTE: adding 'url: #' to calendar makes this unneeded
     */
    .fc-event, .fc-event:hover {
          color: #fff !important;
          text-decoration: none;
    }
    </style>
<div class="row">
    <div class="col">
      <div class="au-card">
        <div id="calendar"></div>
      </div>
    </div><!-- .col -->
</div>
<?php
  $sql = "select DateStart,RentId from rent";
  $result = $db->query($sql);
  $data=[];
  $i=0;
  while($row = $result->fetch_assoc()) {
    $data[$i] = $row;
    $i++;
  }
  $task =[];
  foreach ($data as $key => $value) {
    $task[$value["DateStart"]] =[];
  }
  foreach ($task as $k => $v) {
    $run=0;
    $task[$k] =[];
    foreach ($data as $key => $value) {
      if ($k==$value["DateStart"]) {
        $task[$k][$run] =$value["RentId"];
        $run++;
      }
    }
  }
  $gettask[]=[];
  $i=0;
  foreach ($data as $key => $value) {
    
    $gettask[$key]["start"]=$value["DateStart"];
    $gettask[$key]["title"]="รหัสการเช่า ".$value["RentId"];
    $gettask[$i]["url"]="#";
  }
 
?>
 <!-- Jquery JS-->
 <script src="vendor/jquery-3.2.1.min.js"></script>
 <!-- full calendar requires moment along jquery which is included above -->
 <script src="vendor/fullcalendar-3.10.0/lib/moment.min.js"></script>
    <script src="vendor/fullcalendar-3.10.0/fullcalendar.js"></script>

    <script type="text/javascript">




$(function() {
  var task = <?php echo json_encode($gettask); ?>;
  // alert(task[0].start);
  var i=0;
  task.forEach(element => {
    if (element=="start") {
      task[i].start = moment().format(start);
    i++;
    }
    
  });
  console.log(task[0].start);
  // for now, there is something adding a click handler to 'a'
  var tues = moment().day(2).hour(19);

  // build trival night events for example data
  var events =  task;

  var trivia_nights = []

  // for(var i = 1; i <= 4; i++) {
  //   var n = tues.clone().add(i, 'weeks');
  //   console.log("isoString: " + n.toISOString());
  //   trivia_nights.push({
  //     title: 'Trival Night @ Pub XYZ',
  //     start: n.toISOString(),
  //     allDay: false,
  //     url: '#'
  //   });
  // }

  // setup a few events
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listWeek'
    },
    events: events.concat(trivia_nights)
  });
});
    </script>