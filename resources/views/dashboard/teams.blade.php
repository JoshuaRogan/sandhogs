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
				<p> Use this page to update any team information.  </p>
			</div>
		</div> 
  </div>
</div>


<div class="container">
	<div id="teams"> 
		<!-- Show all of the teams -->

	</div>

	<div class="row"> 
		<div class="col-xs-12"> 
			<div class="panel panel-primary">
				<div class="panel-heading">Create New Team</div>
				<div class="panel-body">
					<p>Form to create a new team</p>
					<form> 
						@include("forms.vertical.input", ['id' => 'playername', 'label'=> 'Team Name'])
					</form>
				</div>
			</div>
		</div>
	</div>




</div>
@stop
