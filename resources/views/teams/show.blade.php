@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', "Team $team->name")
@section('description', "$team->name $team->year team of the East Coast Sandhogs baseball organization")
@section('pageclass', 'page-roster page-team')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
	<script src="{{asset('/js/roster.js')}}"></script>
@stop


@section('content')

<div class="container">
	<h2> East Coast Sandhogs <span class="pull-right">{{$team->name}} {{$team->year}} </h2>
	{{-- <p> Listed below are all of the teams for the East Coast Sandhogs. Click on a column to sort it. </p> --}}
	<div class="col-md-8"> 
		<h3>Roster</h3>
		<div class="panel-group" id="players" role="tablist" aria-multiselectable="true">
		@foreach($team->players as $player)
			@include('players.listItem', ['player' => $player]) 
		@endforeach
		</div>
	</div>

	<div class="col-md-4">
		<h3>Coaching Staff </h3>
		@foreach($team->coaches as $coach)
			<div>
				<h4><a href="{{ route('staff.show', [$coach->slug] )}} ">{{$coach->full_name}}</a></h4>
				<p>{{$coach->email}}</p>
				<p>{{$coach->description or ''}}</p>
			</div>
		@endforeach
	</div>
</div>
@stop
