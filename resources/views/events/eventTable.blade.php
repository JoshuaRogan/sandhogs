@unless (count($events) == 0)
<table class="table table-striped" data-sortable>
	<thead>
		<tr> 
			<th>Name</th>
			<th>Location</th>
			<th @if(isset($dashboard)) class="hidden-xs" @endif>Start Date</th>
			<th @if(isset($dashboard)) class="hidden-xs" @endif>End Date</th>
			<th>Team(s)</th>
			@if(isset($dashboard))
				<th> Actions </th>
			@endif

		</tr>
	</thead>
	<tbody>
	@foreach($events as $event)
		<tr>			
			
			{{-- Create event page  --}}
			{{-- <td><a href="{{ route('event.show', [$event->slug] )}} ">{{$event->name }}</a> </td> --}}
			<td> {{$event->name}} </td>

			<td><a href="https://www.google.com/maps/place/{!!str_replace(' ', '', $event->location)!!}" target="_blank"><i class="fa fa-map-marker"></i> {{ $event->location }}</a></td>
			<td @if(isset($dashboard)) class="hidden-xs" @endif>{{$event->start_date }}</td>
			<td @if(isset($dashboard)) class="hidden-xs" @endif>{{$event->end_date }}</td>
			<td>
				@foreach($event->teams as $team)
					{{$team->name}}
				@endforeach
			</td>

			@if(isset($dashboard))
				<td> 
					<div class="col-xs-12">
						<a href="{{ route('event.edit', [$event->slug] )}} "><i class="fa fa-pencil fa-lg"></i></a> 
					</div>
				</td>
			@endif


		</tr>
	@endforeach
	</tbody> 
</table>

@else
	<div class="alert alert-warning text-center row" role="alert">
		<div class="col-xs-4"><i class="fa fa-exclamation-circle fa-5x font-orange"></i></div>
		<div class="col-xs-8 simple-padding-3"> <strong>There are no events for this team! </strong></div>
	</div>
@endunless