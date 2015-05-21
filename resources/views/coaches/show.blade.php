@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', "$coach->full_name")
@section('description', "Coach profile for $coach->full_name of the East Coast Sandhogs")
@section('pageclass', 'page-coaches')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop


@section('content')

<div class="container">
	<h2> East Coast Sandhogs Staff Profile</h2>
	<div class="col-md-4 center-block"> 
		<img class="img-responsive center-block" src='http://cdn.flaticon.com/png/256/16612.png'>
	</div>
	
	<div class="col-md-8"> 
		<h3> {{$coach->full_name}} </h3>
		<ul class="list-unstyled"> 
			<li class='clearfix'>Email:<span class="pull-right">{!!$coach->email or '<samp class="font-red">Coming Soon</samp>'!!}</span> </li>
			<li class='clearfix'>Phone:<span class="pull-right">{!!$coach->phone or '<samp class="font-red">Coming Soon</samp>'!!}</span> </li>
			<li class='clearfix'>Bio:  <span class="pull-right">{!!$coach->bio or '<samp class="font-red">Coming Soon</samp>'!!}</span> </li>
			<li class='clearfix'>Teams:  <span class="pull-right">{!!$coach->teams_coaching_links!!}</span> </li>
		</ul>
	</div>
</div>
@stop
