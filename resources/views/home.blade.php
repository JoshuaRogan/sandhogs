@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Home')
@section('description', 'Northeast Pride Baseball and the new East Coast Sandhogs Baseball Organization (formerly players and coaches of the Moosic Mets) are proud to announce their partnership agreement effective for the 2015 season and beyond. Along with this collaboration, both organizations are very excited to be the representative of Major League Baseball’s San Francisco Giants with the development of the San Francisco Giants East Coast Scout Team.')
@section('pageclass', 'page-home')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop



@section('content')


@include('skeleton.banner')

<div class="container">

	<div id="upcomingEvents" class="col-xs-12 col-md-5"> 
		<h2> Upcoming Events </h2>

		{{-- <div class="alert alert-warning text-center row" role="alert">
			<div class="col-xs-4"><i class="fa fa-exclamation-circle fa-5x font-orange"></i></div>
			<div class="col-xs-8 simple-padding-3"> <strong>There are no active events for the Sandhogs!</strong></div>
		</div> --}}
		<ul  class="list-unstyled events">
			@foreach(App\Event::upcoming(6)->get() as $event)
				@include('events.homeEvent')
			@endforeach
		</ul>

		<div class="col-xs-12"> 
			<a class="btn btn-info btn-lg btn-block" href="{{route('event.index')}}" role="button" id="allEvents">All Events</a>
		</div>
	</div>

	<div id="capture" class="col-xs-12 col-md-7">
		{{-- <img class="img-responsive center-block logo" alt="East Coast Sandhogs" src="img/footer-logo.png">  --}}

	  	
	  	<h2>San Francisco Giants High School Scout Team Highlights Partnership</h2>
		<blockquote>
			<p>"We are excited to attach our name to the San Francisco Giants. Their reputation speaks for itself. Though our partnership with such a quality organization as the Northeast Pride, we feel that we can provide the best possible travel baseball experience and opportunity for all our players throughout the Northeast." </p>
			<footer><cite title="Paul McGloin">Paul McGloin of the San Francisco Giants and East Coast Sandhogs</cite></footer>
		</blockquote>		

		<blockquote>
			<p> "Northeast Pride Baseball is very excited for the opportunity to be working with such a storied MLB franchise in the San Francisco Giants. The ability to bring national attention and exposure to all the players in our region is a great honor. We look forward to working with Paul McGloin and the rest of the East Coast Sandhogs baseball family on creating a great brand of baseball here in our area."</p>
			<footer><cite title="Joe Curreri">Joe Curreri of the Northeast Pride</cite></footer>
		</blockquote>
		<p><a href="/files/press_release.pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> Press Release</a></p>

	
	</div>

	<div id='social-media'> 

		<div class="col-xs-12 clearfix"> 
			<div class="col-md-6"> 
				<h2 class='font-facebook-blue'> <i class="fa fa-facebook-official"></i> Feed </h2>
				<div class="embed-responsive embed-responsive-16by9 center-block text-center ">
					<div class="fb-page" data-width='500' data-height='800' data-href="https://www.facebook.com/sandhogs?fref=ts" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/sandhogs?fref=ts"><a href="https://www.facebook.com/sandhogs?fref=ts">East Coast Sandhogs</a></blockquote></div></div>
				</div>
			</div>

			<div class="col-md-6"> 
			<h2 class='font-twitter-blue'><i class='fa fa-twitter'></i> Feed</h2>
			<a class="twitter-timeline" href="https://twitter.com/ECSandhogs" data-widget-id="604142773655191552"></a>
			<script>
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
			</script>

		</div> 

	</div> 

	  
	</div>






	<section id="doforyou" class="col-xs-12"> 
		<h3 class="text-center"> What we can do for you. </h3>

		<div class="col-md-4">
			<div class="img-container center-block"><img class="img-responsive center-block" src="img/doforyou/expose-og.png" alt="exposure"> </div>
			<h4> Exposure </h4>
			<p>By combining for one common goal, it will open doors for all players within this power house organization. The San Francisco Giants High School Scout Team is a national team with backing from one of the most successful major league organizations in all of baseball. </p>
		</div>

		<div class="col-md-4">
			<div class="img-container center-block"><img class="img-responsive center-block" src="img/doforyou/train-og.png" alt="exposure"> </div>
			<h4> Training </h4>
			<p>With two organizations combining their knowledge and resources for the advanced development of their players, it will reinforce their already strong baseball backgrounds and baseball following with being able to provide the most competitive travel baseball teams covering the east coast.  </p>
		</div>

		<div class="col-md-4">
			<div class="img-container center-block"><img class="img-responsive center-block" src="img/doforyou/compete-og.png" alt="exposure"> </div>
			<h4> Competition </h4>
			<p> Spanning from upstate New York to the New York Metropolitan area along with our strong presence in Northeastern to Central Pennsylvania, the organization will be providing top-level baseball for players ages eight all the way through college preparation, college showcase teams and collegiate summer league teams.</p>
		</div>

	</section>

	<p class="text-center"><a class="btn btn-primary btn-lg" href="http://goo.gl/forms/JKS1M2K0De" target="_blank" role="button">Sign Up for Tryouts!</a></p>





</div>
@stop
