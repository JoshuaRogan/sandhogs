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

	<div class="row"> 
		<div class="col-xs-12"> 
			<div class="panel panel-primary">
				<div id="create-new-team" class="panel-heading">Edit Team</div>
				<div class="panel-body">
					<p>Edit the <strong>{{$team->name}}-{{$team->year}}</strong> team of the East Coast Sandhogs Organization.</p>
						{!! Form::model($team, ['route' => ['team.update', $team->slug], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
							@include('teams.form')
							{!! Form::submit("Update Team", ['class'=>'btn btn-primary pull-right']) !!}
						{!! Form::close() !!}

						{!! Form::open(['method' => 'DELETE', 'route' => ['team.destroy', $team->slug]])!!}
							{!! Form::submit("Delete Team", ['class'=>'btn btn-danger pull-left']) !!}
						{!! Form::close()!!}
					</form>
				</div>
			</div>
		</div>
	</div>

	
	<div> 
		<div>
			<h4> Current Staff </h4>
			<p> Below are the current coaches for this team. Click the pencil to make a global change to the staff member. Click the eye to view their public profile. </p>
			@include("coaches.coachTable", ['coaches' => $team->coaches, 'dashboard'=> true])
			<p><a class="btn btn-primary" href="{{route('team.editCoachesInfo', ['team'=> $team->slug])}}" role="button">Update Roles &amp; Numbers</a></p>
		</div>

		<div>
			<h4> Current Players </h4>
			<p> Below are the current coaches for this team. Click the pencil to make a global change to the player. Click the eye to view their public profile.</p>
			@include("players.playerTable", ['players' => $team->players, 'dashboard'=> true])
			<p><a class="btn btn-primary" href="{{route('team.editPlayersInfo', ['team'=> $team->slug])}}" role="button">Update Numbers</a></p>
		</div>
		
		<div class="clearfix"> 
			<h4> Events </h4>
			<p> Below are the events for this team. Click the pencil to make a global change to the event.</p>
			@include("events.eventTable", ['events'=> $team->events, 'dashboard'=> true])
		</div>
	</div>

</div>
@stop
