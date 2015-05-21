@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Dashboard - Players')
@section('description', 'Make changes to any player of the East Coast Sandhogs.')
@section('pageclass', 'page-dashboard page-db-players')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop


@section('content')

@foreach($players as $player)
<div class="modal fade" id="{{$player->slug}}" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete Player</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete {{$player->first}} {{$player->last}}? </p>
      </div>
      <div class="modal-footer">
        {!! Form::open(['method' => 'DELETE', 'route' => ['player.destroy', $player->slug]])!!}
			{!! Form::submit("Delete Player", ['class'=>'btn btn-danger pull-left']) !!}
		{!! Form::close()!!}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endforeach


<div class="jumbotron">
  <div class="container">
    	
  		<div class="row"> 
  			<div class="col-sm-2 hidden-xs">
  				<div class="center-block"><i class="fa fa-user fa-5x font-primary"></i></div>
  			</div>
	  		<div class="col-sm-10"> 
	    		<h2> East Coast Sandhogs Players Editing </h2>
				<p> Use this page to update any player in the Sandhogs Organization</p>
			</div>
		</div> 
  </div>
</div>


<div class="container">
	<div id="team"> 
		<!-- Show all of the teams -->
		<h3> East Coast Sandhogs Players</h3>


		<h3><i class="fa fa-pencil"></i> Edit Current All Players </h3>
		<p class="lead"> Click any player to view their profile. Click the <i class="fa fa-pencil"></i> icon to edit or click the <i class="fa fa-trash"></i> to delete the player from the Sandhogs organization. </p>
		<div id="current-roster" class='scroll-section'> 
			<table class='roster table table-striped'>
			  <thead>
			    <tr>
			      <th>Player</th>
			      {{-- <th>Teams</th> --}}
			      <th><span class="pull-rigt">Actions</span></th>
			    </tr>
			  </thead>
			  <tbody>
			  @foreach($players->sortBy('last') as $player)
				<tr>
					<td> <a href="{{ route('player.show', [$player->slug] )}} ">{{$player->first}} {{$player->last}}</a> </td>
					{{-- <td> 9U (Head Coach), 10U (Assitant Coach), 13U (Assitant Coach) </td> --}}
					<td> 
						<div class="col-xs-6">
							<a href="{{ route('player.edit', [$player->slug] )}} "><i class="fa fa-pencil fa-lg"></i></a> 
						</div>

						<div class="col-xs-6">
							<a href="#" data-toggle="modal" data-target="#{{$player->slug}}"><i class="fa fa-trash fa-lg"></i></a> 
						</div>
					</td>


					


				</tr>
				@endforeach

			  </tbody>
			</table>
		</div>



	</div>

	<h3><i class="fa fa-user-plus"></i> Create Players</h3>
	<p class="lead"> Use this form to create a <strong>new player</strong> for the East Coast Sandhogs</p>

	<div class="row"> 

		<div class="col-xs-12"> 
			<div class="panel panel-primary">
				<div id="create-new-player" class="panel-heading"><strong>Add New Player</strong></div>
				<div class="panel-body">
				{!! Form::model($player = new App\Player, ['route' => ['player.store'], 'class' => 'form-horizontal']) !!}
					@include('players.form')
					{!! Form::submit("Create Player", ['class'=>'btn btn-primary pull-right']) !!}
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>


</div>
@stop
