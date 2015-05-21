@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Events')
@section('description', 'Events for all of the East Coast Sandhogs baseball organization')
@section('pageclass', 'page-events')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop


@section('content')

<div class="container">
	<h2> Upcming Events </h2>
	<p> Listed below are the most recent upcoming events. </p>
	@include('events.eventTable', ['events'=> App\Event::upcoming(10)->get()])

	<h2> All Events </h2>
	<p> Listed below are all of the events for the East Coast Sandhogs. Click on a column to sort it. </p>
	@include('events.eventTable')
</div>
@stop
