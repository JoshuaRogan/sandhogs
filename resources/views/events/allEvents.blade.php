{{-- All of the events for the current year --}}
@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Events')
@section('description', 'All of the East Coast Sandhogs events for this year')
@section('pageclass', 'page-schedule')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
	<script src="{{asset('/js/sortable.min.js')}}"></script>
	<script src="{{asset('/js/schedule.js')}}"></script>

@stop


@section('content')

<div class="container">
	<h2> All Events </h2>
	<p> Listed below are all of the events for the East Coast Sandhogs. Click on a column to sort it.  </p>
	<div> 
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
	</div>
</div>
@stop
