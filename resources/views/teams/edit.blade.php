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
	<div id="teams"> 
		<!-- Show all of the teams -->
		<h3> East Coast Sandhogs - 2015  <small><span class="pull-right"><a href="#create-new-team">Edit Team <i class="fa fa-plus-circle"></i> </a></span></small></h3>

		<h4> Current Players </h4>
		@foreach($team->players as $player)
			<pre> {{$player}} </pre>
		@endforeach

		<h4> Current Staff </h4>
		@foreach($team->coaches as $coach)
			<pre> {{$coach}} </pre>
		@endforeach 

		<h4> Events </h4>
		@foreach($team->events as $event)
			<pre> {{$event}} </pre>
		@endforeach 

	</div>

	<div class="row"> 
		<div class="col-xs-12"> 
			<div class="panel panel-primary">
				<div id="create-new-team" class="panel-heading">Edit Team</div>
				<div class="panel-body">
					<p>Edit a team/age group to the East Coast Sandhogs Organization.</p>
						{!! Form::model($team, ['route' => ['team.update', $team->slug], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
							@include('teams.form')
							{!! Form::submit("Update Team", ['class'=>'btn btn-primary pull-right']) !!}
						{!! Form::close() !!}
					</form>
				</div>
			</div>
		</div>
	</div>




</div>
@stop
