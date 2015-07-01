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

		{!! Form::model($team, ['route' => ['team.updateCoachesInfo', $team->slug], 'method' => 'PATCH', 'class' => 'form-inline']) !!}
			@foreach($team->coaches as $coach)
				<div class="row "> 
					<div class="col-sm-4 form-group"> 
						<h4>{{$coach->full_name}} </h4>
					</div>

					<div class="col-sm-4 form-group {{ $errors->has('$coach->id') ? 'has-error' : '' }}">
						{!! Form::label($coach->id, "Role: ", ['class' => '']) !!}
						{!! Form::text("role-$coach->id", $coach->pivot->role ? $coach->pivot->role : null, ['class' => 'form-control', 'placeholder' => 'e.g. Head Coach']) !!}
						{!! $errors->first($coach->id, '<span class="help-block">:message</span>')!!}
					</div>

					<div class="col-sm-4 form-group {{ $errors->has('$coach->id') ? 'has-error' : '' }}">
						{!! Form::label($coach->id, "Number: ", ['class' => '']) !!}
						{!! Form::text("number-$coach->id", $coach->pivot->role ? $coach->pivot->number : null, ['class' => 'form-control', 'placeholder' => 'e.g. 22']) !!}
						{!! $errors->first($coach->id, '<span class="help-block">:message</span>')!!}
					</div>

				</div>
			@endforeach
			{!! Form::submit("Update Roles", ['class'=>'btn btn-primary pull-right']) !!}
		{!! Form::close() !!}

	</div>

</div>
@stop
