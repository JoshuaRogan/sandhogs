{{-- All of the events for the current year --}}
@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Events')
@section('description', 'All of the East Coast Sandhogs events for this year')
@section('pageclass', 'page-schedule')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop


@section('content')

<div class="container">
	<h2> All Events </h2>
	<p> Listed below are all of the events for the East Coast Sandhogs. Click on a column to sort it.  </p>
	<div> 
		@include("events.eventTableJson")
	</div>
</div>
@stop
