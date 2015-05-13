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
<div class="jumbotron">
  <div class="container">
    	
  		<div class="row"> 
  			<div class="col-sm-2 hidden-xs">
  				<div class="center-block"><i class="fa fa-users fa-5x font-primary"></i></div>
  			</div>
	  		<div class="col-sm-10"> 
	    		<h2> East Coast Sandhogs Team Editing </h2>
				<p> Use this page to update the 2015 <strong class="font-red">9U</strong> Sandhogs Team</p>
			</div>
		</div> 
  </div>
</div>


<div class="container">
	<div id="team"> 
		<!-- Show all of the teams -->
		<h3> 9U East Coast Sandhogs - 2015</h3>
		<div id="menu" class="row"> 
			@include("dashboard.menu-item", ['url' => '/dashboard/team/9u/', 'title'=> 'Update Team Info', 'icon'=> 'fa-user', 'description'=> "Update basic team information including team descriptions, name, images, and more."])
			@include("dashboard.menu-item", ['url' => '/dashboard/team/9u/', 'title'=> 'Update Coaches', 'icon'=> 'fa-briefcase', 'description'=> "Add or remove coaches from this team."])
			@include("dashboard.menu-item", ['url' => '/dashboard/team/9u/', 'title'=> 'Update Schedule', 'icon'=> 'fa-calendar', 'description'=> "Add new events, update current events, and mark games as <strong class='font-green'>won</strong> or <strong class='font-red'>loss</strong>. "])

			<div class="clearfix hidden-xs"></div>
			@include("dashboard.menu-item", ['url' => '/dashboard/team/9u/', 'title'=> 'Update Stats', 'icon'=> 'fa-line-chart', 'description'=> "Add or remove coaches from this team."])
			@include("dashboard.menu-item", ['url' => '/dashboard/team/9u/', 'title'=> 'Add Players', 'icon'=> 'fa-user-plus', 'description'=> "Add <strong>multiple</strong> players at one time.<br/><em>See form below to add one player.</em>"])
			@include("dashboard.menu-item", ['url' => '/dashboard/team/9u/', 'title'=> 'Contact Team', 'icon'=> 'fa-envelope-o', 'description'=> "Contact the entire team or specfic players via email, facebook, twitter, etc."])
		</div>


		<h3><i class="fa fa-pencil"></i> Edit Current Roster </h3>
		<p class="lead"> Click any player to view their profile. Click the <i class="fa fa-pencil"></i> icon to edit or click the <i class="fa fa-trash"></i> to delete the player from this team </p>

		<div id="current-roster"> 
			<table class='roster table table-striped'>
			  <thead>
			    <tr>
			      <th>Player</th>
			      <th>Number</th>
			      <th><span class="pull-rigt">Actions</span></th>
			    </tr>
			  </thead>
			  <tbody>
				<tr>
					<td> <a href="/team/9u/2015/player/51235">Josh Rogan</a> </td>
					<td> 10 </td>
					<td> 
						<div class="col-xs-6">
							<a href="/dashboard/team/9u/2015/player/51235/edit/"><i class="fa fa-pencil fa-lg"></i></a> 
						</div>

						<div class="col-xs-6">
							<a href="/dashboard/team/9u/2015/player/51235/edit/"><i class="fa fa-trash fa-lg"></i></a> 
						</div>
					</td>
				</tr>

			  </tbody>
			</table>

			<table class='roster table table-striped'>
			  <thead>
			    <tr>
			      <th>Coach</th>
			      <th>Number</th>
			      <th><span class="pull-rigt">Actions</span></th>
			    </tr>
			  </thead>
			  <tbody>
				<tr>
					<td> <a href="/team/9u/2015/player/51235">Paul McGloin</a> </td>
					<td> 22 </td>
					<td> 
						<div class="col-xs-6">
							<a href="/dashboard/team/9u/2015/player/51235/edit/"><i class="fa fa-pencil fa-lg"></i></a> 
						</div>

						<div class="col-xs-6">
							<a href="/dashboard/team/9u/2015/player/51235/edit/"><i class="fa fa-trash fa-lg"></i></a> 
						</div>
					</td>
				</tr>

			  </tbody>
			</table>
		</div>


		<h3><i class="fa fa-user-plus"></i> Add Players <small>Existing Players Only</small> <small><span class="pull-right"><a href="#">New Player <i class="fa fa-plus-circle"></i></a></span></small></h3>
		<p class="lead"> Add existing players to this team. Use the <strong>New Player</strong> button above to create players that are not on any team yet. <strong class="font-red">Don't create players who are on other teams!</strong> Simply, just add them to this team! </p>
		<div id="update-roster"> 

		</div>
	</div>


	<div class="row"> 
		<div class="col-xs-12"> 
			<div class="panel panel-primary">
				<div id="create-new-player" class="panel-heading"><strong>Add New Player</strong></div>
				<div class="panel-body">
					<div class="alert alert-danger" role="alert"><strong><i class="fa fa-exclamation-triangle"></i> Don't add players that exist on other teams!</strong></div>
					<p>Create a New Player </p>


					<form class="form-horizontal"> 
						@include("forms.horizontal.input", ['id' => 'player-first', 'label'=> 'First Name', 'placeholder'=>'e.g. John', 'required'=> true])
						@include("forms.horizontal.input", ['id' => 'player-last', 'label'=> 'Last Name', 'placeholder'=>'e.g. Doe', 'required'=> true])
						@include("forms.horizontal.input", ['id' => 'player-birth-year', 'label'=> 'Birth Year', 'placeholder'=>'e.g. 1996', 'required'=> true])
						@include("forms.horizontal.input", ['id' => 'player-number', 'label'=> 'Number', 'placeholder'=>'e.g. 14', 'required'=> true])
						@include("forms.horizontal.input", ['id' => 'player-email','type' => 'email', 'label'=> 'Email:', 'placeholder'=>'e.g. JohnDoe@sandhogs.com'])
						@include("forms.horizontal.input", ['id' => 'player-position', 'label'=> 'Position(s):', 'placeholder'=>'e.g. 1B, SS, P'])

						@include("forms.horizontal.text", ['id' => 'player-description', 'label'=> 'Player Description', 'placeholder'=>'e.g. John is a power left handed hitter.'])
						
				

						<button type="submit" class="btn btn-primary pull-right">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>




</div>
@stop
