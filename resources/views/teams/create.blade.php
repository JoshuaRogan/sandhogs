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
		<h3> East Coast Sandhogs - 2015  <small><span class="pull-right"><a href="#create-new-team">Add Team <i class="fa fa-plus-circle"></i> </a></span></small></h3>
		<div id="menu" class="small-menu row"> 
			@include("dashboard.menu-item", ['url' => '/dashboard/team/9u/2015', 'title'=> '9U', 'icon'=> 'fa-users', 'columnSize' => 'col-sm-3', 'description'=> "Players nine and under."])
			@include("dashboard.menu-item", ['url' => '/dashboard/team/9u/2015', 'title'=> '9U', 'icon'=> 'fa-users', 'columnSize' => 'col-sm-3', 'description'=> "Players nine and under.", 'ribbon'=> true])
			@include("dashboard.menu-item", ['url' => '/dashboard/team/9u/2015', 'title'=> '9U', 'icon'=> 'fa-users', 'columnSize' => 'col-sm-3', 'description'=> "Players nine and under."])
			@include("dashboard.menu-item", ['url' => '/dashboard/team/9u/2015', 'title'=> '9U', 'icon'=> 'fa-users', 'columnSize' => 'col-sm-3', 'description'=> "Players nine and under."])

			<div class="clearfix hidden-xs"></div>
			@include("dashboard.menu-item", ['url' => '/dashboard/team/9u/2015', 'title'=> '9U', 'icon'=> 'fa-users', 'columnSize' => 'col-sm-3', 'description'=> "Players nine and under."])
			@include("dashboard.menu-item", ['url' => '/dashboard/team/9u/2015', 'title'=> '9U', 'icon'=> 'fa-users', 'columnSize' => 'col-sm-3', 'description'=> "Players nine and under."])
			@include("dashboard.menu-item", ['url' => '/dashboard/team/9u/2015', 'title'=> '9U', 'icon'=> 'fa-users', 'columnSize' => 'col-sm-3', 'description'=> "Players nine and under."])
			@include("dashboard.menu-item", ['url' => '/dashboard/team/9u/2015', 'title'=> '9U', 'icon'=> 'fa-users', 'columnSize' => 'col-sm-3', 'description'=> "Players nine and under.", 'approval'=>true, 'admin' => true])
		</div>

	</div>

	<div class="row"> 
		<div class="col-xs-12"> 
			<div class="panel panel-primary">
				<div id="create-new-team" class="panel-heading">Create New Team</div>
				<div class="panel-body">
					<p>Add a team/age group to the East Coast Sandhogs Organization. <strong class="font-red"> Requires Admin Approval!</strong></p>
						{!! Form::model(new App\Team, ['route' => ['team.store'], 'class' => 'form-horizontal']) !!}
							@include('teams.form')
							{!! Form::submit("Create Team", ['class'=>'btn btn-primary pull-right']) !!}
						{!! Form::close() !!}
					</form>
				</div>
			</div>
		</div>
	</div>




</div>
@stop
