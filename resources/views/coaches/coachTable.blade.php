@unless (count($coaches) == 0)
<table class='table table-striped' data-sortable>
  <thead>
    <tr>
      <th>First</th>
      <th>Last</th>
      <th>Team(s)</th>
      @if(isset($dashboard))
     	 <th>Number</th>
     	 <th>Role</th>
     	 <th>Actions</th>
      @endif

    </tr>
  </thead>
  <tbody>
  @foreach($coaches as $coach)
	<tr>
		<td> {{$coach->first}} </td>
		<td> {{$coach->last}} </td>
		<td>
			@foreach($coach->teams as $team)
				{{$team->name}}
			@endforeach
		</td>
		@if(isset($dashboard))
			<td> {{$coach->pivot->number or 'N/A'}} </td>
			<td> {{$coach->pivot->role or 'N/A'}} </td>
			<td> 
				<div class="col-xs-6">
					<a href="{{ route('staff.show', [$coach->slug] )}} "><i class="fa fa-eye fa-lg"></i></a> 
				</div>
				<div class="col-xs-6">
					<a href="{{ route('staff.edit', [$coach->slug] )}} "><i class="fa fa-pencil fa-lg"></i></a> 
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
		<div class="col-xs-8 simple-padding-3"> <strong>There are no coaches for this team! </strong></div>
	</div>
@endunless