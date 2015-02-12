<?php 

class schedule{

	public static $events = array();


	/**
	 *	All are just strings except: 
	 *	show_start and show_stop are dates that indicate if this event should still be shown
	 *
	 *	Detailed location is a 
	 *
	 */
	public static function addEvent($name, $type, $description, $location, $dates, $times, $show_start, $show_stop, $file, $file_type, $detailed_loc = false){
		//Convert type to an icon ?

		//Files
		if($file_type == "pamphlet") $file_out = "<a href='$file' target='_blank'><strong><i class='fa fa-file-pdf-o'></i>Pamphlet</a>";
		else if($file_type == "link") $file_out = "<a href='$file' target='_blank'><strong><i class='fa fa-link'></i>Link</a>";
		else if($file_type == "form") $file_out = "<a href='$file' target='_blank'><strong><i class='fa fa-pencil-square-o'></i>Sign Up</a>";
		else  $file_out = "";

		//Detailed location 
		if($detailed_loc) $detailed_out = "<a class='detailed-loc' href='$detailed_loc' target='_blank'><i class='fa fa-map-marker'></i> Google Maps</a>";
		else $detailed_out = "";
		

		self::$events[] = <<<HTML
			<section> 
				<h4><i class="fa fa-calendar-o"></i> $name <span class="pull-right event-type">$type</span></h4>
				<p> <span>$description</span></p>
				<p> <strong>Date:</strong> <span> $dates </span></p>
				<p> <strong>Time:</strong> <span> $times </span></p>
				<p> <strong>Where:</strong> <span> $location $detailed_out</span></p>
				<p> <strong>Files:</strong> <span> $file_out </span></p>
	 		</section>
HTML;
	}

	public static function addFakeEvent(){
		self::$events[] = <<<HTML
			<section> 
				<h4><i class="fa fa-calendar-o"></i> Event Name <span class="pull-right event-type">Event Type</span></h4>
				<p> <span class="blokk">Quinoa narwhal you probably haven't heard of them banjo Austin, swag ugh. Butcher cronut ennui messenger bag readymade, Wes Anderson narwhal tofu biodiesel. </span></p>
				<p> <strong>Date:</strong> <span class="blokk"> Ennui cold-pressed plaid ugh </span></p>
				<p> <strong>Time:</strong> <span class="blokk"> Wes Anderson narwhal tofu biodiesel </span></p>
				<p> <strong>Where:</strong> <span class="blokk"> before they sold out paleo <span></p>
				<p> <strong>Files:</strong> <span><a href="#"><strong><i class="fa fa-file-pdf-o"></i> Pamphlet</a></strong></span></p>
	 		</section>
HTML;
	}


	public static function generateList(){
		foreach(self::$events as $events){ 
			echo $events;
		}
	}
}



schedule::addEvent("Tryouts", "Tryout", "2015 East Coast Sandhogs Tryout", "Riverfront Sports Complex", "February 22, 2015", " 9AM-12PM", 0, 0, "https://docs.google.com/forms/d/1_15LVLuBuGWutdo1SMQZrVTaRJVviqtho-XnuABLWDA/viewform?c=0&w=1", "form", "http://goo.gl/vgjNWZ");
schedule::addFakeEvent(); 
schedule::addFakeEvent(); 
schedule::addFakeEvent(); 
schedule::addFakeEvent(); 
schedule::addFakeEvent(); 
schedule::addFakeEvent(); 












?>

 <div class="container"> 
 	<section id="schedule"> 
 		<h2> <i class="fa fa-calendar"></i> Schedule</h2>

 		<!-- <section class="col-md-3 col-xs-12"> 
 			<h3> Upcoming Events </h3>
 		</section> -->

 		<section id="all-events" class="col-md-12 col-xs-12"> 
 			<h3> All Events </h3>

 			<?php schedule::generateList(); ?>





 		</section>


 		<!-- <p class="text-center"><a class="btn btn-primary btn-lg " href="http://goo.gl/forms/JKS1M2K0De" target="_blank" role="button">Sign Up for Tryouts!</a></p> -->

 	</section>
 </div>