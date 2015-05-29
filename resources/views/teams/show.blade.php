@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', "Team $team->name")
@section('description', "$team->name $team->year team of the East Coast Sandhogs baseball organization")
@section('pageclass', 'page-roster page-team')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop


@section('content')

<div class="container">
	<h2> East Coast Sandhogs <span class="pull-right">{{$team->name}} {{$team->year}} </h2>
	{{-- <p> Listed below are all of the teams for the East Coast Sandhogs. Click on a column to sort it. </p> --}}
	<div class="col-md-8"> 
		<h3>Roster</h3>
		<div class="panel-group" id="players" role="tablist" aria-multiselectable="true">
		@foreach($team->players as $player)
			@include('players.listItem', ['player' => $player]) 
		@endforeach

		@if($team->name == "SCOUT TEAM") 
			<h3 class='font-red'> Roster will be announced July 1, 2015 </h3>
		@endif
		
		</div>
	</div>

	<div class="col-md-4">
		<h3>Coaching Staff </h3>
		@foreach($team->coaches as $coach)
			<div>
				<h4><a href="{{ route('staff.show', [$coach->slug] )}} ">{{$coach->full_name}}</a></h4>
				<p>{{$coach->email}}</p>
				<p>{{$coach->description or ''}}</p>
			</div>
		@endforeach


		<h3>Upcoming Events</h3>
		<ul class="list-unstyled"> 
		@foreach($team->events as $event)
			<li> <a href="{{ route('event.show', [$event->slug] )}} "> {{$event->name}} </a> </li>
		@endforeach
		</ul>

		<h3> Media </h3>
		<div class="alert alert-warning text-center row" role="alert">
			<div class="col-xs-4"><i class="fa fa-exclamation-circle fa-5x font-orange"></i></div>
			<div class="col-xs-8 simple-padding-3"> <strong>There is no media associated with this team yet! </strong></div>
		</div>

		<h2> Updates </h2>
		{{-- <div class="alert alert-warning text-center row" role="alert">
			<div class="col-xs-4"><i class="fa fa-exclamation-circle fa-5x font-orange"></i></div>
			<div class="col-xs-8 simple-padding-3"> <strong>There are no updates associated with this team yet! </strong></div>
		</div> --}}

		<div class="social-media facebook-page col-xs-12 clearfix"> 
		<h2 class='font-facebook-blue'> <i class="fa fa-facebook-official"></i> Feed </h2>
			<div class="center-block"> 
				<div class="embed-responsive embed-responsive-16by9 center-block text-center ">
					<div class="fb-page" data-width='500' data-height='1000' data-href="https://www.facebook.com/sandhogs?fref=ts" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/sandhogs?fref=ts"><a href="https://www.facebook.com/sandhogs?fref=ts">East Coast Sandhogs</a></blockquote></div></div>
				</div>
			</div>
		</div>

		<div class="social-media twitter-page col-xs-12 clearfix">
		<h2 class='font-twitter-blue'><i class='fa fa-twitter'></i> Feed</h2>
			<a class="twitter-timeline" href="https://twitter.com/ECSandhogs" data-widget-id="604142773655191552">Tweets by @ECSandhogs</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>



	</div>
</div>
@stop
