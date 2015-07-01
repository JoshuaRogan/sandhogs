<div class="panel panel-primary profile">
<div class="panel-heading" role="tab" id="heading-{{ $player->id }}">
  <h4 class="panel-title">
    <a data-toggle="collapse" href="#collapsed-{{ $player->id }}" aria-expanded="true" aria-controls="collapsed-{{ $player->id }}">
      {{ $player->full_name }} <span class="pull-right">#{{$player->pivot->number or ''}}</span>
    </a>
  </h4>
</div>

<div id="collapsed-{{ $player->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-{{ $player->id }}">
  <div class="panel-body">
  	<div class="col-md-4 profile-picture"> 
  		<img src="http://cdn.flaticon.com/png/256/16612.png" class="img-responsive center-block profile-image" alt="{{ $player->full_name }}">
  	</div>

  	<div class="col-md-8">
  		<h3> {{ $player->full_name }} <small><span class="pull-right">{{$team->name}}</span></small></h3>

  		{{-- <div> <strong>Team(s):</strong> <a href="#">13U</a>, <a href="#">14U</a> </div> --}}
  		<div> <strong>Position(s):</strong> <samp class="pull-right"> Coming Soon </samp> </div>
  		<div> <strong>Age:</strong> <samp class="pull-right"> Coming Soon </samp> </div>
  		<div> <strong>Bio:</strong> <samp class="pull-right"> Coming Soon </samp> </div>
  		

  		<div class="panel-group" id="profile-extra-{{ $player->id }}" role="tablist" aria-multiselectable="true">
	  		{{-- Stats  --}}
	  		<div> 
	  			<div class="panel panel-default">
	  				<div class="panel-heading" role="tab" id="heading-stats-{{ $player->id }}">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapsed-stats-{{ $player->id }}" aria-expanded="true" aria-controls="collapsed-stats-{{ $player->{'id'} }}"><i class="fa fa-line-chart"></i> Stats </a>
						</h4>
	  				</div>

	  				<div id="collapsed-stats-{{ $player->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-stats-{{ $player->{'id'} }}">
	  					<div class="simple-padding-3">  
	  						<h4> Batting Stats </h4>
		  					<ul class="list-unstyled"> 	
		  						<li> Average <samp><span class='pull-right'>Coming Soon</span></samp></li>
		  						<li> Hits <samp><span class='pull-right'>Coming Soon</span></samp></li>  				
		  					</ul>
		  				
		  					<h4> Pitching Stats </h4>
		  					<ul class="list-unstyled"> 	
		  						<li> Wins <samp><span class='pull-right'>Coming Soon</span></samp></li>
		  						<li> ERA <samp><span class='pull-right'>Coming Soon</span></samp></li>  				
		  					</ul>
		  				</div>
	  				</div>
	  			</div>
	  		</div>
	  		{{-- Stats  --}}



	  		{{-- Media  --}}
	  		<div> 
	  			<div class="panel panel-default">
	  				<div class="panel-heading" role="tab" id="heading-media-{{ $player->id }}">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapsed-media-{{ $player->id }}" aria-expanded="true" aria-controls="collapsed-media-{{ $player->id}}"><i class="fa fa-picture-o"></i> Media </a>
						</h4>
	  				</div>

	  				<div id="collapsed-media-{{ $player->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-media-{{ $player->id }}">
	  					<div class="simple-padding-3">  
	  						<samp class="font-red font-bold"> There are no videos, images or files for this player </samp>
	  						<div class="row"> 
	  					{{-- 		<div class="col-xs-3"> 
	  								<a href="#" class="gallery-image">
										<img class="img-responsive" src="http://placehold.it/400x300" alt="">
									</a>
	  							</div>

	  							<div class="col-xs-3"> 
	  								<a href="#" class="gallery-image">
										<img class="img-responsive" src="http://placehold.it/400x300" alt="">
									</a>
	  							</div>

	  							<div class="col-xs-3"> 
	  								<a href="#" class="gallery-image">
										<img class="img-responsive" src="http://placehold.it/400x300" alt="">
									</a>
	  							</div>

	  							<div class="col-xs-3"> 
	  								<a href="#" class="gallery-image">
										<img class="img-responsive" src="http://placehold.it/400x300" alt="">
									</a>
	  							</div>

	  							<div class="col-xs-3"> 
	  								<a href="#" class="gallery-image">
										<img class="img-responsive" src="http://placehold.it/400x300" alt="">
									</a>
	  							</div>

	  							<div class="col-xs-3"> 
	  								<a href="#" class="gallery-image">
										<img class="img-responsive" src="http://placehold.it/400x300" alt="">
									</a>
	  							</div>

	  							<div class="col-xs-3"> 
	  								<a href="#" class="gallery-image">
										<img class="img-responsive" src="http://placehold.it/400x300" alt="">
									</a>
	  							</div>

	  							<div class="col-xs-3"> 
	  								<a href="#" class="gallery-image">
										<img class="img-responsive" src="http://placehold.it/400x300" alt="">
									</a>
	  							</div> --}}





	  						</div>
		  				</div>
	  				</div>
	  			</div>
	  		</div>
	  		{{-- Media  --}}
	  	</div>



  	</div>




  </div>
</div>
</div>
