@section('footer')
<footer id="footer"> 
	<div class="container-fluid">


		<div class="row">
			<div class="col-md-3"> 
				<h3> Credits: </h3>
				<p> Website developed by <a href="http://joshuarogan.com" target="_blank">Josh Rogan</a> <br/>
				Icons &amp; Images <a href="http://www.freepik.com" target="_blank">Designed by Freepik</a> and <a href='http://www.flaticon.com/' target="_blank">FlatIcon</a> </p>

				<p> Copyright © <?php echo date("Y"); ?></p>
			</div>

			<div class="col-md-6"> 
				<h3> About Us </h3>
				<p>@include('blurbs.about')</p>


				<section> 
					<h4 class='hidden'>Contact</h4>
					
					<address class="col-md-12 col-xs-12 text-center"> 
						East Coast Sandhogs <br/>
						<i class="fa fa-envelope"></i> <a href="mailto:info@sandhogsbaseball.com">info@sandhogsbaseball.com</a> <br/>
						<i class="fa fa-envelope"></i> <a href="mailto:webmaster@sandhogsbaseball.com">webmaster@sandhogsbaseball.com</a> <br/>
					</address>

				</section>
			
			</div>

			<div class="col-md-3"> 
				<!-- <h3> Report a Problem </h3>
				<p> Found a problem? <a href="/report-problem">Report it here!</a> </p> -->
				<img class="img-responsive center-block logo" alt="footer-logo" src="/img/footer-logo.png"> 
			</div>

		</div>

		<div class="row"> 
			<ul class="list-unstyled list-inline text-center col-xs-12"> 
					<li> <a href="https://www.facebook.com/sandhogs?fref=ts" target="_blank"><i class="fa fa-facebook fa-lg" ></i></a> </li>
					<li> <a href="https://twitter.com/ecsandhogs" target="_blank"><i class="fa fa-twitter fa-lg" ></i></a> </li>
					{{-- <li> <a href="#" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a> </li> --}}
					{{-- <li> <a href="#" target="_blank"><i class="fa fa-youtube fa-lg"></i></a> </li> --}}
			</ul>

			<ul id="site-map" class="list-inline text-center col-xs-12">
				<li><a href="/home">Home</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="{{route('event.index')}}">Schedule</a></li>
				<li><a href="/coaches">Staff</a></li>
				{{-- <li><a href="/store">Store</a></li> --}}
				<li><a href="/contact">Contact</a></li>
			</ul>
		</div> 
	</div> 
</footer>
@endsection