<li> 
	<section> 
		<div class="col-xs-3 fa-calstack"> 

			<span class="fa-stack fa-2x">
				<i class="fa fa-calendar-o fa-stack-2x"></i>
				<strong class="fa-stack-1x calendar-text">{{$event->start_date->day}}</strong>
			</span>
		</div>
		<div class="col-xs-9">
			<h4><a href="{{route('event.show', [$event->slug] )}}">{{$event->name}}</a><span class="pull-right event-type"></span></h4>
			<p> <span class="">{{$fullName or ''}}</span></p>
			<p> <strong>Start Date:</strong> <span class=""> {{$event->start_date->toFormattedDateString()}} </span></p>
			<p> <strong>End Date:</strong> <span class=""> {{$event->end_date->toFormattedDateString()}} </span></p>
			<p> <strong>Team(s):</strong> <span class=""> @foreach($event->teams as $team) {{$team->name}}  @endforeach</span></p>
			{{-- <p> <strong>Time:</strong> <span class=""> 7:05 PM </span></p> --}}
			<p> <strong>Where:</strong> <span class=""> <a href="https://www.google.com/maps/place/{{$event->google_maps_location}}" target="_blank"><i class="fa fa-map-marker"></i> {{$event->location}} </a><span></p>
			{{-- <p> <strong>Files:</strong> <span><a href="#"><strong><i class="fa fa-file-pdf-o"></i> Pamphlet</a></strong></span></p> --}}
		</div>
	</section>
</li>