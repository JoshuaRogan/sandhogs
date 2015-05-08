@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Dashboard - Coaches')
@section('description', 'Make changes to the the coaching staff of the East Coast Sandhogs.')
@section('pageclass', 'page-dashboard page-db-coaches')

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
  				<div class="center-block"><i class="fa fa-briefcase fa-5x font-primary"></i></div>
  			</div>
	  		<div class="col-sm-10"> 
	    		<h2> East Coast Sandhogs Coaches Editing </h2>
				<p> Use this page to update the coaching staff of the East Coast Sandhogs</p>
			</div>
		</div> 
  </div>
</div>


<div class="container">
	<div id="team"> 
		<!-- Show all of the teams -->
		<h3> East Coast Sandhogs Coaching Staff</h3>


		<h3><i class="fa fa-pencil"></i> Edit Current Staff </h3>
		<p class="lead"> Click any coach to view their profile. Click the <i class="fa fa-pencil"></i> icon to edit or click the <i class="fa fa-trash"></i> to delete the coach from the Sandhogs organization. </p>
		<div id="current-roster"> 
			<table class='roster table table-striped'>
			  <thead>
			    <tr>
			      <th>Coach</th>
			      <th>Teams</th>
			      <th><span class="pull-rigt">Actions</span></th>
			    </tr>
			  </thead>
			  <tbody>
				<tr>
					<td> <a href="/team/9u/2015/player/51235">Paul McGloin</a> </td>
					<td> 9U (Head Coach), 10U (Assitant Coach), 13U (Assitant Coach) </td>
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



	</div>

	<h3><i class="fa fa-user-plus"></i> Create Coaches</h3>
	<p class="lead"> Use this form to create a <strong>new coach</strong> for the East Coast Sandhogs</p>

	<div class="row"> 

		<div class="col-xs-12"> 
			<div class="panel panel-primary">
				<div id="create-new-player" class="panel-heading"><strong>Add New Coach</strong></div>
				<div class="panel-body">
					<!--<p>Create a New Coach </p>-->
					<form class="form-horizontal"> 
						@include("forms.horizontal.input", ['id' => 'coach-first', 'label'=> 'First Name', 'placeholder'=>'e.g. John', 'required'=> true])
						@include("forms.horizontal.input", ['id' => 'coach-last', 'label'=> 'Last Name', 'placeholder'=>'e.g. Doe', 'required'=> true])
						@include("forms.horizontal.input", ['id' => 'coach-email','type' => 'email', 'label'=> 'Email:', 'placeholder'=>'e.g. JohnDoe@sandhogs.com','required'=> true])
						@include("forms.horizontal.text", ['id' => 'coach-description', 'label'=> 'Coach Description', 'placeholder'=>'e.g. John is an expert pitching coach.'])
						
						<button type="submit" class="btn btn-primary pull-right">Coach Generator</button>
					</form>
				</div>
			</div>
		</div>
	</div>




</div>
@stop
