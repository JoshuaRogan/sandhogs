@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'All Players')
@section('description', 'All players of the East Coast Sandhogs baseball organization')
@section('pageclass', 'page-players')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop


@section('content')

<div class="container">
	<h2> All Players </h2>
	<p> Listed below are all of the players for the East Coast Sandhogs. Click on a column to sort it. </p>
	@include('players.playerTable')
</div>
@stop
