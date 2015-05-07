@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Coaching Staff')
@section('description', 'All of the staff for the East Coast Sandhogs')
@section('pageclass', 'page-staff')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{asset('/styles/slippry.css')}}">
	@parent
@stop

@section('lazyscripts')
	@parent
	<script src="{{asset('/js/slippry.min.js')}}"></script>
	<script src="{{asset('/js/home.js')}}"></script>
@stop



@section('content')
	
	<!-- COACHING STAFF BANNER EXPLAIN HOW THEY ARE THE BEST--> 

	<div class="container"> 
	<section id="staff"> 
		<h2> Current Staff for East Coast Sandhogs </h2>


		<section class="row"> 
			<h3> Paul McGloin <small>Baseball President <em>2015-Present</em></small> </h3>

			<div class="col-md-4 col-xs-12"> 
				<img class="img-responsive center-block" src="img/staff/male1.png" alt='staff image'>
			</div>
			
			<div class="col-md-8 col-xs-12"> 
				<ul class="fa-ul"> 
					<li><i class="fa-li fa fa-check"></i>Associate Scout, San Francisco Giants: 2015 – Present</li>
					<li><i class="fa-li fa fa-check"></i>Associate Scout, New York Yankees: 2012 – 2015</li>
					<li><i class="fa-li fa fa-check"></i>Owner/Head Instructor, Electric City Baseball &amp; Softball Academy (Established 2009)</li>
					<li><i class="fa-li fa fa-check"></i>Has coached over 30 Major League Baseball Draft Picks – 6 who have reached the big league level</li>
					<li><i class="fa-li fa fa-check"></i>Head Baseball Coach, West Scranton High School: 2005 – 2011</li>
					<li><i class="fa-li fa fa-check"></i>Assistant Baseball Coach/Recruiting Coordinator, Northwest Florida State College – NJCAA I: 2003 – 2004</li>
					<li><i class="fa-li fa fa-check"></i>Assistant Baseball Coach/Pitching Coach, Drexel University – NCAA I: 2001 – 2003</li>
					<li><i class="fa-li fa fa-check"></i>Assistant Baseball Coach, Bourne Braves of the Cape Cod Summer Collegiate Baseball League: 2004</li>
					<li><i class="fa-li fa fa-check"></i>Assistant Baseball Coach, Alexandria Beetles of the Northwoods Summer Collegiate Baseball League: 2003</li>
					<li><i class="fa-li fa fa-check"></i>Envoy for Major League Baseball International – Europe: 2002</li>
					<li><i class="fa-li fa fa-check"></i>Assistant Baseball Coach, Scranton Red Soxx of the Atlantic Collegiate Baseball League: 2001</li>
					<li><i class="fa-li fa fa-check"></i>Assistant Baseball Coach/Recruiting Coordinator, Keystone College – NJCAA III: 2001</li>
					<li><i class="fa-li fa fa-check"></i>Assistant Baseball Coach/Recruiting Coordinator, Lackawanna College – NJCAA II: 2000 – 2001</li>
				</ul>

				<address> 
					<i class="fa fa-envelope"></i> <a href="mailto:mcgloin@electricitybaseball.com">mcgloin@electricitybaseball.com</a> <br/>
					<i class="fa fa-mobile"></i> (570) 878-8483
				</address> 
			</div>
		</section>

		<section class="row"> 
			<h3> Joe Curreri <small> Scout Team Co-General Manager<em>2015-Present</em></small> </h3>

			<div class="col-md-4 col-xs-12 col-md-push-8"> 
				<img class="img-responsive center-block" src="img/staff/male2.png" alt='staff image'>
			</div>
			
			<div class="col-md-8 col-xs-12 col-md-pull-4"> 
				<ul class="fa-ul"> 
					<li><i class="fa-li fa fa-check"></i>Associate Scout, San Francisco Giants: 2015 – Present</li>
					<li><i class="fa-li fa fa-check"></i>Associate Scout, New York Yankees: 2012 – 2015</li>
					<li><i class="fa-li fa fa-check"></i>Owner/Head Instructor, Electric City Baseball &amp; Softball Academy (Established 2009)</li>
					<li><i class="fa-li fa fa-check"></i>Has coached over 30 Major League Baseball Draft Picks – 6 who have reached the big league level</li>
					<li><i class="fa-li fa fa-check"></i>Head Baseball Coach, West Scranton High School: 2005 – 2011</li>
					<li><i class="fa-li fa fa-check"></i>Assistant Baseball Coach/Recruiting Coordinator, Northwest Florida State College – NJCAA I: 2003 – 2004</li>
					<li><i class="fa-li fa fa-check"></i>Assistant Baseball Coach/Pitching Coach, Drexel University – NCAA I: 2001 – 2003</li>
					<li><i class="fa-li fa fa-check"></i>Assistant Baseball Coach, Bourne Braves of the Cape Cod Summer Collegiate Baseball League: 2004</li>
					<li><i class="fa-li fa fa-check"></i>Assistant Baseball Coach, Alexandria Beetles of the Northwoods Summer Collegiate Baseball League: 2003</li>
					<li><i class="fa-li fa fa-check"></i>Envoy for Major League Baseball International – Europe: 2002</li>
					<li><i class="fa-li fa fa-check"></i>Assistant Baseball Coach, Scranton Red Soxx of the Atlantic Collegiate Baseball League: 2001</li>
					<li><i class="fa-li fa fa-check"></i>Assistant Baseball Coach/Recruiting Coordinator, Keystone College – NJCAA III: 2001</li>
					<li><i class="fa-li fa fa-check"></i>Assistant Baseball Coach/Recruiting Coordinator, Lackawanna College – NJCAA II: 2000 – 2001</li>
				</ul>

				<address> 
					<i class="fa fa-envelope"></i> <a href="mailto:nepridebaseball@gmail.com">nepridebaseball@gmail.com</a> <br/>
					<i class="fa fa-mobile"></i> (570) 575-1515
				</address> 
			</div>

			
		</section>












	</section>
</div>


@stop
