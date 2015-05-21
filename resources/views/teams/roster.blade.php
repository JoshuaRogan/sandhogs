@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Home')
@section('description', 'Description of the home page')
@section('pageclass', 'page-roster')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop

@section('content')
<div class="container"> 
	<div class="col-md-8"> 
		<h3> East Coast Sandhogs {{$age_group}} Roster </h3>
		{{-- <p> Click any player to see more information </p> --}}

	  	<div class="panel-group" id="players" role="tablist" aria-multiselectable="true">
			@foreach ($roster as $player)

				@if(strtolower($age_group) === strtolower($player->{'Team'}))
					<?php $flag = true ?>
					@include('profile.player', ['player' => $player]) 
				@endif

			@endforeach
		</div>



		@if(!isset($flag))
			<div class="alert alert-danger text-center row" role="alert">
				<div class="col-xs-4"><i class="fa fa-exclamation-circle fa-5x font-red"></i></div>
				<div class="col-xs-8 simple-padding-3"> <strong>There are no players for this team! </strong></div>
			</div>
		@endif
	</div>



	<div class="col-md-4" id="coaches"> 
		<h2> All Coaches </h2>
		<div class="contact-box">
			<address class="hidden"> 
				<h3><a href="#">Paul McGloin</a></h3>
				<div>
					<div><a href="mailto:mcgloin@electricitybaseball.com"><i class="fa fa-envelope"></i> Email Me</a></div>
					<div><i class="fa fa-mobile"></i> (570) 878-8483 </div>
				</div>
			</address>

			<address class="hidden"> 
				<h3><a href="#">Joe Curreri</a></h3>
				<div>
					<div><a href="mailto:nepridebaseball@gmail.com"><i class="fa fa-envelope"></i> Email Me</a></div>
					<div><i class="fa fa-mobile"></i> (570) 575-1515</div>
				</div>
			</address>

			<ul class="list-unstyled"> 
				<li> <strong>17U Elite: </strong>
					<ul class="list-inline"> 
						<li> Ken Spangenberg </li>
						<li> Tom Donohue </li> 
						<li> Dean Pettinato</li>
					</ul>
				</li>
				<li> <strong>17U Prospect: </strong>
					<ul class="list-inline"> 
						<li> Phil Stokes </li>
						<li> Ricky Breymier </li> 
					</ul>
				</li>
				<li> <strong>15/16U: </strong>
					<ul class="list-inline"> 
						<li> Anthony Duchnowski </li>
						<li> Chris King </li> 
					</ul>
				</li>
				<li> <strong>13U: </strong>
					<ul class="list-inline"> 
						<li> Paul Chmiel </li>
						<li> John Connor</li> 
					</ul>
				</li>
				<li> <strong>12U: </strong>
					<ul class="list-inline"> 
						<li> Ken Grundtg </li>
						<li> Dave Stafursky </li> 
					</ul>
				</li>

				<li> <strong>10U: </strong>
					<ul class="list-inline"> 
						<li> Jon Woytach </li>
						<li> Eddie Decker </li> 
					</ul>
				</li>

				<li> <strong>9U: </strong>
					<ul class="list-inline"> 
						<li> Tony DiMattia </li>
						<li> Lou Mariotti </li> 
						<li> Sean McCormack</li>
					</ul>
				</li>
				
		

			</ul>


 		</div>

		<h2> Upcoming Events </h2>
		
		<div class="alert alert-warning text-center row" role="alert">
			<div class="col-xs-4"><i class="fa fa-exclamation-circle fa-5x font-orange"></i></div>
			<div class="col-xs-8 simple-padding-3"> <strong>There are no active events for this team! </strong></div>
		</div>

		<h2> Photos &amp; Videos </h2>
		<div class="alert alert-warning text-center row" role="alert">
			<div class="col-xs-4"><i class="fa fa-exclamation-circle fa-5x font-orange"></i></div>
			<div class="col-xs-8 simple-padding-3"> <strong>There is no media associated with this team yet! </strong></div>
		</div>


	</div>

</div>
@stop