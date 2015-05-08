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
	    		<h2> East Coast Sandhogs Dashboard</h2>
				<p> Use this page to update any data on the website. Including adding/updating players, coaches, and teams. </p>
			</div>
		</div> 
  </div>
</div>


<div class="container"> 
	<div id="menu" class="row"> 

		@include("dashboard.menu-item", ['url' => '/dashboard/teams', 'title'=> 'Manage Teams', 'description'=> 'Add, update, or remove teams. Add, update, or remove players from their respective teams too.', 'icon'=> 'fa-users'])
		@include("dashboard.menu-item", ['url' => '/dashboard/coaches', 'title'=> 'Manage Coaches', 'description'=> 'Add, update, or remove coaches', 'icon'=> 'fa-briefcase'])
		@include("dashboard.menu-item", ['url' => '/dashboard/events', 'title'=> 'Manage Events', 'description'=> 'Add, update, or remove events. Events can be team specific or include multiple teams.', 'icon'=> 'fa-calendar'])

		<div class="clearfix hidden-xs"></div>
		@include("dashboard.menu-item", ['url' => '/dashboard/global', 'title'=> 'Global Settings', 'description'=> 'Manage global settings such as which year is the active team and style elements such as the <strong>banner slider</strong>.', 'icon'=> 'fa-globe'])
		@include("dashboard.menu-item", ['url' => '/dashboard/social', 'title'=> 'Social Media', 'description'=> 'Manage facebook, twitter, and more!', 'icon'=> 'fa-share-alt'])
		@include("dashboard.menu-item", ['url' => '/dashboard/users', 'title'=> 'Manage Users', 'description'=> 'Manage the website users.', 'icon'=> 'fa-user', 'admin' => true])

	</div>
</div>
@stop
