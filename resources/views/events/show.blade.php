@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', "$event->name")
@section('description', "Information regarding the event $event->name that starts on $event->start_date_string and ends on $event->end_date_string.")
@section('pageclass', 'page-event')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop


@section('content')

<div class="container">
	<h2> {{$event->name}} </h2>
	<div class="col-md-7"> 
		<h3> Location Information </h3>
		<div class="embed-responsive embed-responsive-4by3">
			<iframe class="embed-responsive-item" width="600" height="450" style="border:0" src="https://www.google.com/maps/embed/v1/place?q={{$event->google_maps_location}}&amp;key=AIzaSyCkGf3VBrW7ofD-iDti70pD46FUKaUghO4"></iframe>
		</div>
	</div>

	<div class="col-md-5"> 
		<h3> Event Information </h3>
		<div class="panel panel-primary">
			<div class="panel-heading">{{$event->name}}</div>
			<div class="panel-body">
				<ul class="list-unstyled"> 
					<li><strong>Start Date: </strong> <span class="pull-right">{{$event->start_date_string}}</span> </li>
					<li><strong>End Date: </strong> <span class="pull-right">{{$event->end_date_string}}</span> </li>
					<li><strong>Location: </strong> <span class="pull-right"><a href="https://www.google.com/maps/place/{{$event->google_maps_location}}" target="_blank"><i class="fa fa-map-marker"></i> {{ $event->location }}</a></span> </li>
					<li><strong>Team(s): </strong> <span class="pull-right">@foreach($event->teams as $team) <a href="{{route('team.show', [$team->slug] )}}"> {{$team->name}} </a> @endforeach</span></li>
					<li><strong>Coaches(s): </strong> <span class="pull-right">@foreach($event->teams as $team) @foreach($team->coaches as $coach) <a href="{{route('staff.show', [$coach->slug] )}}"> {{$coach->full_name}} </a> @endforeach  @endforeach</span></li>
				</ul>
			</div>
		</div>


	</div>

	
</div>
@stop
