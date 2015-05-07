@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Dashboard')
@section('description', 'Admin page for updating any information.')
@section('pageclass', 'page-dashboard')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{asset('/styles/slippry.css')}}">
	@parent
@stop

@section('lazyscripts')
	@parent
	<script src="{{asset('/js/slippry.min.js')}}"></script>
	<script src="{{asset('/js/home.js')}}"></script>
@stop



@section('content')

<div class="jumbotron">
  <div class="container">
    	
  		<div class="row"> 
  			<div class="col-sm-2 hidden-xs">
  				<div class="center-block"><i class="fa fa-cogs fa-5x font-primary"></i></div>
  			</div>
	  		<div class="col-sm-10"> 
	    		<h2> East Coast Sandhogs Dashboard </h2>
				<p> Use this page to update any data on the website. Including adding/updating players, coaches, and teams. </p>
			</div>
		</div> 
  </div>
</div>


<div class="container"> 
	<div id="menu" class="row text-center"> 
		<div class="col-sm-4"> 
			<a href="/dashboard/teams">
				<h3>  Manage Teams</h3>
				<div class="center-block"><i class="fa fa-users fa-5x"></i></div>
			 </a>
		</div>

		<div class="col-sm-4"> 
			<a href="/dashboard/players">
				<h3>  Manage Players </h3>
				<div class="center-block"><i class="fa fa-user fa-5x"></i></div>
			 </a>
		</div>

		<div class="col-sm-4"> 
			<a href="/dashboard/coaches">
				<h3>  Manage Coaches </h3>
				<div class="center-block"><i class="fa fa-user-secret fa-5x"></i></div>
			 </a>
		</div>

		<div class="clearfix hidden-xs"></div>

		<div class="col-sm-4"> 
			<a href="/dashboard/events">
				<h3>  Manage Events </h3>
				<div class="center-block"><i class="fa fa-calendar fa-5x"></i></div>
			 </a>
		</div>

		<!-- Add more content if sysadmin (not coach) --> 
		<div class="col-sm-4"> 
			<a href="/dashboard/users">
				<h3>  Manage Users </h3>
				<div class="center-block"><i class="fa fa-user fa-5x"></i></div>
			 </a>
		</div>

	</div>
</div>
@stop
