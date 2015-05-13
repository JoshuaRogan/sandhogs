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
					<form class="form-horizontal"> 
						@include("forms.horizontal.input", ['id' => 'team-name', 'label'=> 'Team Name', 'placeholder'=>'e.g. 10U', 'required'=> true])
						@include("forms.horizontal.input", ['id' => 'team-year', 'label'=> 'Year', 'placeholder'=>'e.g. 2015', 'value' => 2015, 'disabled' => true])
						@include("forms.horizontal.text", ['id' => 'team-description', 'label'=> 'Team Description', 'placeholder'=>'e.g. Players younger than 10.'])

						<div class="form-group">
							<label for="coach-list" class="col-sm-2 control-label">Coaches</label>
							<div class="col-sm-10" id="coach-list">
								@include("forms.horizontal.checkbox", ['id' => '1', 'label'=> 'Paul McGloin', 'inline' => true])
								@include("forms.horizontal.checkbox", ['id' => '52', 'label'=> 'Joe Curreri', 'inline' => true])
								<a href="#" class="checkbox-inline"><i class="fa fa-plus-circle"></i> Add Coach</a></label>
							</div>
						</div>

						<button type="submit" class="btn btn-primary pull-right">Create Team</button>
					</form>
				</div>
			</div>
		</div>
	</div>




</div>
@stop
