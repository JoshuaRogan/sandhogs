@unless (count($teams) == 0)
<table class="table table-striped" data-sortable>
	<thead>
		<tr> 
			<th>Name</th>
			<th>Year</th>
			<th>Staff</th>
		</tr>
	</thead>
	<tbody>
	@foreach($teams as $team)
		<tr>			
			<td><a href="{{ route('team.show', [$team->slug] )}} ">{{$team->name }}</a> </td>
			<td> {{$team->year}} </td>
			<td>
				@foreach($team->coaches as $coach)
					<a href="{{ route('staff.show', [$coach->slug] )}} ">{{$coach->full_name}}</a>
				@endforeach
			</td>
		</tr>
	@endforeach
	</tbody> 
</table>
@else
	<div class="alert alert-warning text-center row" role="alert">
		<div class="col-xs-4"><i class="fa fa-exclamation-circle fa-5x font-orange"></i></div>
		<div class="col-xs-8 simple-padding-3"> <strong>There are no teams! </strong></div>
	</div>
@endunless