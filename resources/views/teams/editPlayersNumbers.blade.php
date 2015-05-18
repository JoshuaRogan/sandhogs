@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Dashboard - Teams')
@section('description', 'Make changes to all of the teams of the east coast sandhogs')
@section('pageclass', 'page-dashboard page-db-teams')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop


@section('content')

@include('dashboard.jumbotron', ['heading' => 'East Coast Sandhogs Team Editing', 'content' => 'Use this page to update any team information. ', 'icon'=>'fa-users'])

<div class="container">
	<h3> East Coast Sandhogs <span class="pull-right">{{$team->name}}-{{$team->year}}</span> </h3>

	
	<div> 
		<h4> Current Players </h4>
		<p> Below are the current players for this team. Please give them a number for this team.</p>

		{!! Form::model($team, ['route' => ['team.updatePlayersInfo', $team->slug], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
			@foreach($team->players as $player)
				<div class="form-group {{ $errors->has('$player->id') ? 'has-error' : '' }}"> 
					{!! Form::label($player->id, $player->full_name, ['class' => 'col-sm-6 ']) !!}
					<div class="col-sm-6">
						{!! Form::text($player->id, $player->pivot->number ? $player->pivot->number : null, ['class' => 'form-control', 'placeholder' => 'e.g. 22', 'required'=>'required']) !!}
						{!! $errors->first($player->id, '<span class="help-block">:message</span>')!!}
					</div>
				</div>
			@endforeach
			{!! Form::submit("Update Numbers", ['class'=>'btn btn-primary pull-right']) !!}
		{!! Form::close() !!}

	</div>

</div>
@stop
