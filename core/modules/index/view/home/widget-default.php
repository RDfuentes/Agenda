<?php

$events = EventData::getEvery();
foreach($events as $event){

	$thejson[] = array("title"=>$event->title,"url"=>"./?view=editreservation&id=".$event->id,"start"=>$event->date_at."T".$event->time_at);

}
// print_r(json_encode($thejson));

?>
<script>


	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			// defaultDate: '2015-08-12', // DIA PARA COLOCAR EL CALENDARIO 
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			events: <?php echo json_encode($thejson); ?>
		});
		
	});

</script>


<div class="row">
<div class="col-md-12">
<br><br>
<a href="index.php?view=newreservation"><button class="btn btn-danger" href="index.php?view=newreservation" >Nuevo Pedido</button></a> <br><br>
<div id="calendar"></div>

</div>
</div>
