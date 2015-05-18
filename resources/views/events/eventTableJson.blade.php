<table class="table table-striped" data-sortable>
	<thead>
		<tr> 
			<th>Dates</th>
			<th>Location</th>
			<th>Event Name</th>
			<th>Team</th>
		</tr>
	</thead>
	<tbody>
	@foreach($events as $event)
		<tr>			
			<td>{{$event->{'Dates'} }}</td>
			<td><a href="https://www.google.com/maps/place/{!!str_replace(' ', '', $event->{'Location'})!!}" target="_blank"><i class="fa fa-map-marker"></i> {{ $event->{'Location'} }}</a></td>
			<td>{{$event->{'Event'} }}</td>
			<td>{{$event->{'Team'} }}</td>
		</tr>
	@endforeach
	</tbody> 
</table>