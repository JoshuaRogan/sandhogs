@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Home')

@section('pageclass', 'page-home')

@section('styles')
	@parent
@endsection

@section('lazyscripts')
	@parent
@endsection



@section('content')


@include('skeleton.banner')

<div class="container">

	<div id="upcomingEvents" class="col-xs-12 col-md-5"> 
		<h2> Upcoming Events </h2>
		<ul  class="list-unstyled events">
			@foreach(App\Event::upcoming(4)->get() as $event)
				@include('events.homeEvent')
			@endforeach
		</ul>
		
		<div class="col-xs-12"> 
			<a class="btn btn-info btn-lg btn-block" href="{{route('event.index')}}" role="button" id="allEvents">All Events</a>
		</div>
	</div>

	<div id="capture" class="col-xs-12 col-md-7">

	  	<h2>About the East Coast Sandhogs</h2>
	  	<p class='lead'>@include('blurbs.about')</p>

		<p><a href="/files/press_release.pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> Press Release</a></p>	
	</div>

	<div id='social-media'> 
		<div class="col-xs-12 clearfix"> 
			<div class="col-md-6 "> 
				<h2 class='font-facebook-blue'> <i class="fa fa-facebook-official"></i> Feed </h2>
				<div class='text-center center-block col-xs-12'>
					<div class="fb-page  col-xs-12" data-width='500' data-height='500' data-href="https://www.facebook.com/sandhogs?fref=ts" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/sandhogs?fref=ts"><a href="https://www.facebook.com/sandhogs?fref=ts">East Coast Sandhogs</a></blockquote></div></div>
				</div>
			</div>

			<div class="col-md-6"> 
				<h2 class='font-twitter-blue'><i class='fa fa-twitter'></i> Feed</h2>
				<div class='text-center center-block'>

					<div class="">
						<a class="twitter-timeline text-center center-block embed-responsive embed-responsive-4by3" href="https://twitter.com/ECSandhogs" data-widget-id="604142773655191552"></a>
						<script>
						!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
						</script>

					</div>
				</div>

			</div>
		</div> 
	</div> 



	<section id="doforyou" class="col-xs-12"> 
		<h3 class="text-center"> What we can do for you. </h3>

		<div class="col-md-4">
			<div class="img-container center-block"><img class="img-responsive center-block" src="img/doforyou/expose-og.png" alt="exposure"> </div>
			<h4> Exposure </h4>
			<p>Our National Travel Teams compete in tournaments from coast to coast maximizing the team's exposure. Our invitation to top level tournaments draws the attention of college coaches and professional scouts. </p>
		</div>

		<div class="col-md-4">
			<div class="img-container center-block"><img class="img-responsive center-block" src="img/doforyou/train-og.png" alt="exposure"> </div>
			<h4> Training </h4>
			<p>We have an accomplished and highly successful coaching staff. Through our in-season practices and optional off-season training, we will continuously develop our players' skills and prepare them to play in competitive tournaments.  </p>
		</div>

		<div class="col-md-4">
			<div class="img-container center-block"><img class="img-responsive center-block" src="img/doforyou/compete-og.png" alt="exposure"> </div>
			<h4> Competition </h4>
			<p> Spanning from upstate New York to the New York Metropolitan area along with our strong presence in Northeastern to Central Pennsylvania, the organization will be providing top-level baseball for players ages eight all the way through college preparation, college showcase teams and collegiate summer league teams.  We have players on our rosters from all states on the East Coast.</p>
		</div>

	</section>

	<p class="text-center"><a class="btn btn-primary btn-lg" href="http://goo.gl/forms/JKS1M2K0De" target="_blank" role="button">Sign Up for Tryouts!</a></p>


</div>
@endsection
