@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Teams')
@section('description', 'All of the teams of the East Coast Sandhogs baseball organization')
@section('pageclass', 'page-teams')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
	<script src="{{asset('/js/sortable.min.js')}}"></script>
	<script src="{{asset('/js/schedule.js')}}"></script>
@stop


@section('content')

<div class="container">
	<h2> Teams </h2>
	<p> Listed below are all of the teams for the East Coast Sandhogs. Click on a column to sort it. </p>
	@include('teams.teamTable')
</div>
@stop
