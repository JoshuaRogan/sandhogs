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
	<p> Listed below are all of the events for the East Coast Sandhogs </p>
	<div> 
		<table class="table table-striped">
			<tr> 
				<th>Dates</th>
				<th>Location</th>
				<th>Name</th>
			</tr>

			<tr>
				<td>August 7-9, 2015</td>
				<td>Lehigh Valley, PA</td>
				<td>15th Annual ECTB National Championship Series</td>
			</tr>
			<tr>
				<td>August 15-16, 2015</td>
				<td>Lansdale, PA</td>
				<td>Grand Slam Golden Spikes Tournament</td>
			</tr>
			<tr>
				<td>August 28-30, 2015</td>
				<td>Flemington, NJ</td>
				<td>Diamond Nation Summer Finale</td>
			</tr>
			<tr>
				<td>September 12-13, 2015</td>
				<td>Newburgh, NY</td>
				<td>NYEB Fall Brawl (10u)</td>
			</tr>
			<tr>
				<td>September 19-20, 2015</td>
				<td>Lehigh Valley, PA</td>
				<td>3rd Annual ECTB Keystone State Kickoff (10u)</td>
			</tr>
		</table>
	</div>
</div>
@stop
