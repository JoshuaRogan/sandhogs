@unless (count($teams) == 0)
<div class="table-responsive">
	<table class="table table-striped" data-sortable>
		<thead>
			<tr> 
				<th>Name</th>
				<th>Year</th>
				<th>Head Coach</th>
				<th>Assistant Coaches</th>
			</tr>
		</thead>
		<tbody>
		@foreach($teams as $team)
			<tr>			
				<td><a href="{{ route('team.show', [$team->slug] )}} ">{{$team->name }}</a> </td>
				<td> {{$team->year}} </td>

				<td>
					<ul class='list-unstyled list-inline'>
					@foreach($team->headCoaches as $coach)
						<li><a href="{{ route('staff.show', [$coach->slug] )}} ">{{$coach->full_name}}</a></li>
					@endforeach
					</ul>
				</td>
				<td>
					<ul class='list-unstyled list-inline'>
					@foreach($team->asstCoaches as $coach)
						<li><a href="{{ route('staff.show', [$coach->slug] )}} ">{{$coach->full_name}}</a></li>
					@endforeach
					</ul>
				</td>
			</tr>
		@endforeach
		</tbody> 
	</table>
</div>
@else
	<div class="alert alert-warning text-center row" role="alert">
		<div class="col-xs-4"><i class="fa fa-exclamation-circle fa-5x font-orange"></i></div>
		<div class="col-xs-8 simple-padding-3"> <strong>There are no teams! </strong></div>
	</div>
@endunless
