@unless (count($players) == 0)
<table class='table table-striped' data-sortable>
  <thead>
    <tr>
      <th>First</th>
      <th>Last</th>
      <th>Team(s)</th>
      <th>Number</th>
      @if(isset($dashboard))
     	 
     	 <th>Actions</th>
      @endif

    </tr>
  </thead>
  <tbody>
  @foreach($players as $player)
	<tr>
		<td> {{$player->first}} </td>
		<td> {{$player->last}} </td>
		<td>
			@foreach($player->teams as $team)
				{{$team->name}}
			@endforeach
		</td>

		<td> {{$player->pivot->number or 'N/A'}} </td>
		
		@if(isset($dashboard))
			
			<td> 
				<div class="col-xs-6">
					<a href="{{ route('player.show', [$player->slug] )}} "><i class="fa fa-eye fa-lg"></i></a> 
				</div>
				<div class="col-xs-6">
					<a href="{{ route('player.edit', [$player->slug] )}} "><i class="fa fa-pencil fa-lg"></i></a> 
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
		<div class="col-xs-8 simple-padding-3"> <strong>There are no players for this team! </strong></div>
	</div>
@endunless