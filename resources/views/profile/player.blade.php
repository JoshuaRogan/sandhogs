<?php 
	//Placeholder content
	$positions = array("P", "C", "IF", "OF", "3B", "SS", "1B");
	$randomPosition = $positions[rand(0,count($positions)-1)];
	$randomPosition2 = $positions[rand(0,count($positions)-1)];
	if($randomPosition2 == $randomPosition) unset($randomPosition2); 

?>


<div class="panel panel-primary profile">
<div class="panel-heading" role="tab" id="heading-{{ $player->{'#'} }}">
  <h4 class="panel-title">
    <a data-toggle="collapse" href="#collapsed-{{ $player->{'#'} }}" aria-expanded="true" aria-controls="collapsed-{{ $player->{'#'} }}">
      {{ $player->{'Player'} }} <span class="pull-right">#{{ $player->{'#'} }} </span>
    </a>
  </h4>
</div>

<div id="collapsed-{{ $player->{'#'} }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-{{ $player->{'#'} }}">
  <div class="panel-body">
  	<div class="col-md-4 profile-picture"> 
  		<img src="http://cdn.flaticon.com/png/256/16612.png" class="img-responsive center-block profile-image" alt="{{ $player->{'Player'} }}">
  	</div>

  	<div class="col-md-8">
  		<h3> {{ $player->{'Player'} }} <small><span class="pull-right">{{ $player->{'Team'} }}</span></small> </h3>
  		<div> <strong>Team(s):</strong> <a href="#">13U</a>, <a href="#">14U</a> </div>
  		<div> <strong>Position(s):</strong> {{ $randomPosition }} {{$randomPosition2 or ''}} </div>
  		<div> <strong>Age:</strong> 15 </div>
  		<div> <strong>Bio:</strong> {{ $player->{'Player'} }} shows great potential on and off the field as a member of the East Coast Sandhogs {{ $player->{'Team'} }} team. </div>
  		

  		<div class="panel-group" id="profile-extra-{{ $player->{'#'} }}" role="tablist" aria-multiselectable="true">
	  		{{-- Stats  --}}
	  		<div> 
	  			<div class="panel panel-default">
	  				<div class="panel-heading" role="tab" id="heading-stats-{{ $player->{'#'} }}">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapsed-stats-{{ $player->{'#'} }}" aria-expanded="true" aria-controls="collapsed-stats-{{ $player->{'#'} }}"><i class="fa fa-line-chart"></i> Stats </a>
						</h4>
	  				</div>

	  				<div id="collapsed-stats-{{ $player->{'#'} }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-stats-{{ $player->{'#'} }}">
	  					<div class="simple-padding-3">  
	  						<h4> Batting Stats </h4>
		  					<ul class="list-unstyled"> 	
		  						<li> Average <span class='pull-right'>.500</span></li>
		  						<li> Hits <span class='pull-right'>15</span></li>  				
		  					</ul>
		  				
		  					<h4> Pitching Stats </h4>
		  					<ul class="list-unstyled"> 	
		  						<li> Wins <span class='pull-right'>4</span></li>
		  						<li> ERA <span class='pull-right'>2.25</span></li>  				
		  					</ul>
		  				</div>
	  				</div>
	  			</div>
	  		</div>
	  		{{-- Stats  --}}



	  		{{-- Media  --}}
	  		<div> 
	  			<div class="panel panel-default">
	  				<div class="panel-heading" role="tab" id="heading-media-{{ $player->{'#'} }}">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapsed-media-{{ $player->{'#'} }}" aria-expanded="true" aria-controls="collapsed-media-{{ $player->{'#'} }}"><i class="fa fa-picture-o"></i> Media </a>
						</h4>
	  				</div>

	  				<div id="collapsed-media-{{ $player->{'#'} }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-media-{{ $player->{'#'} }}">
	  					<div class="simple-padding-3">  
	  						{{-- <samp class="font-red font-bold"> There are no videos, images or files for this player </samp> --}}
	  						<div class="row"> 
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
	  							</div>

	  							<div class="col-xs-3"> 
	  								<a href="#" class="gallery-image">
										<img class="img-responsive" src="http://placehold.it/400x300" alt="">
									</a>
	  							</div>





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
