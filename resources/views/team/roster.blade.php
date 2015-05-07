@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Home')
@section('description', 'Description of the home page')
@section('pageclass', 'page-roster')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{asset('/styles/slippry.css')}}">
	@parent
@stop

@section('lazyscripts')
	@parent
	<script src="{{asset('/js/slippry.min.js')}}"></script>
	<script src="{{asset('/js/roster.js')}}"></script>
@stop

@section('content')
<div class="container"> 
	<div class="col-sm-8"> 
		<h3> East Coast Sandhogs 10U Roster </h3>
		<div class="table-responsive">
		<table class='table table-striped'>
		  <thead>
		    <tr>
		      <th>Player</th>
		      <th>#</th>
		      <th>Age</th>
		    </tr>
		  </thead>
{{-- 		  <tfoot>
		    <tr>
		      <td>Footer content 1</td>
		      <td>Footer content 2</td>
		    </tr>
		  </tfoot> --}}
		  <tbody>
			<tr>
				<td>TJ Dimattia</td>
				<td> 1 </td>
				<td> 10 </td>
			</tr>
			<tr>
				<td>Grace McCormack</td>
				<td> 2 </td>
				<td> 10 </td>
			</tr>
			<tr>
				<td>Jake Lenehan</td>
				<td> 3 </td>
				<td> 10 </td>
			</tr>
			<tr>
				<td>Noah LaFrance</td>
				<td> 4 </td>
				<td> 10 </td>
			</tr>
			<tr>
				<td>Louis Marriotti</td>
				<td> 5 </td>
				<td> 10 </td>
			</tr>
			<tr>
				<td>Jason Selemba</td>
				<td> 6 </td>
				<td> 10 </td>
			</tr>
			<tr>
				<td>Joe Granko</td>
				<td> 7 </td>
				<td> 10 </td>
			</tr>
			<tr>
				<td>Daniel Santaniello</td>
				<td> 8 </td>
				<td> 10 </td>
			</tr>
			<tr>
				<td>Connor Abel </td>
				<td> 9 </td>
				<td> 10 </td>
			</tr>
			<tr>
				<td>Joey Marriotti</td>
				<td> 10 </td>
				<td> 10 </td>
			</tr>
		  </tbody>
		</table>
		</div>
	</div>

	<div class="col-sm-4" id="events"> 
		<h2> Coaches </h2>
		<div class="contact-box">
			<address> 
				<h3><a href="#">Paul McGloin</a></h3>
				<div>
					<div><a href="mailto:mcgloin@electricitybaseball.com"><i class="fa fa-envelope"></i> Email Me</a></div>
					<div><i class="fa fa-mobile"></i> (570) 878-8483 </div>
				</div>
			</address>

			<address> 
				<h3><a href="#">Joe Curreri</a></h3>
				<div>
					<div><a href="mailto:nepridebaseball@gmail.com"><i class="fa fa-envelope"></i> Email Me</a></div>
					<div><i class="fa fa-mobile"></i> (570) 575-1515</div>
				</div>
			</address>

 		</div>

		<h2> Upcoming Events </h2>
		
		<div class="alert alert-warning text-center row" role="alert">
			<div class="col-xs-4"><i class="fa fa-exclamation fa-5x font-orange"></i></div>
			<div class="col-xs-8"> <strong>There are no active events for this team! </strong></div>
		</div>


	</div>

</div>
@stop