@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Coaches')
@section('description', 'All of the coaches of the East Coast Sandhogs baseball organization')
@section('pageclass', 'page-coaches')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop


@section('content')

<div class="container">
	<h2> Staff </h2>
	<p> Listed below are all of the coaches for the East Coast Sandhogs. Click on a column to sort it. </p>
	@include('coaches.coachTable')
</div>
@stop
