<?php 

class storeItems{

	public static $items = array();

	public static function addItem($name, $price, $description){
		
		//Format the price if needed 

		self::$items[] = <<<HTML
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail item">
					<img class="img-responsive" src="http://placehold.it/800x800" alt="itemthumb">
					<div class="caption">
						<h3 class="">$name <span class="pull-right">$$price</span></h3>
						<p class="blokk">$description</p>
						<p ><a href="#" class="btn btn-primary center-block" role="button">Buy</a></p>
					</div>
				</div>
			</div>
HTML;
	}

	public static function generateItems(){
		foreach(self::$items as $item){ 
			echo $item;
		}
	}
}


//Adding items for the store 
storeItems::addItem("Item Name", "5.00", "Raw denim gluten-free Schlitz, jo kitsch hella flexitarian. Flexitarian Schlitz Echo Park, iPhone vinyl ethical fixie wolf fap skateboard cliche Truffaut fingerstache four dollar toast dreamcatcher.");
storeItems::addItem("Item Name", "20.00", "Raw denim gluten-free Schlitz, Portland squid beard typewriter twee fanny pack asymmetrical banjo kitsch hella flexitarian. Flexitarian Schlitz Echo Park, iPhone vinyl ethical fixie wolf fap skateboard cliche Truffaut fingerstache four dollar toast dreamcatcher.");
storeItems::addItem("Item Name", "30.00", "Raw denim gluten-free Schlitz, Portland squid beard typewriter twee fanny pack asymmetrical banjo kitsch hella flexitarian. Flexitarian Schlitz Echo Park, iPhone vinyl ethical fixie wolf fap skateboard cliche Truffaut fingerstache four dollar toast dreamcatcher.");
storeItems::addItem("Item Name", "25.00", "Raw denim gluten-free Schlitz, Portland squid beard typewriter twee fanny pack asymmetrical banjo kitsch hella flexitarian. Flexitarian Schlitz Echo Park, iPhone vinyl ethical fixie wolf fap skateboard cliche Truffaut fingerstache four dollar toast dreamcatcher.");
storeItems::addItem("Item Name", "10.00", "Raw denim gluten-free Schlitz, Portland squid beard typewriter twee fanny pack asymmetrical banjo kitsch hella flexitarian. Flexitarian Schlitz Echo Park, iPhone vinyl ethical fixie wolf fap skateboard cliche Truffaut fingerstache four dollar toast dreamcatcher.");
storeItems::addItem("Item Name", "56.00", "Raw denim gluten-free Schlitz, Portland squid beard typewriter twee fanny pack asymmetrical banjo kitsch hella flexitarian. Flexitarian Schlitz Echo Park, iPhone vinyl ethical fixie wolf fap skateboard cliche Truffaut fingerstache four dollar toast dreamcatcher.");
storeItems::addItem("Item Name", "99.00", "Raw denim gluten-free Schlitz, Portland squid beard typewriter twee fanny pack asymmetrical banjo kitsch hella flexitarian. Flexitarian Schlitz Echo Park, iPhone vinyl ethical fixie wolf fap skateboard cliche Truffaut fingerstache four dollar toast dreamcatcher.");
storeItems::addItem("Item Name", "125.00", "Raw denim gluten-free Schlitz, Portland squid beard typewriter twee fanny pack asymmetrical banjo kitsch hella flexitarian. Flexitarian Schlitz Echo Park, iPhone vinyl ethical fixie wolf fap skateboard cliche Truffaut fingerstache four dollar toast dreamcatcher.");
storeItems::addItem("Item Name", "125.00", "Raw denim gluten-free Schlitz, Portland squid beard typewriter twee fanny pack asymmetrical banjo kitsch hella flexitarian. Flexitarian Schlitz Echo Park, iPhone vinyl ethical fixie wolf fap skateboard cliche Truffaut fingerstache four dollar toast dreamcatcher.");


?>

 <div class="container"> 
 	<section id="store"> 
 		<h2> <i class="fa fa-shopping-cart"></i> East Coast Sandhogs Store <small> Coming Soon </small></h2>

 		<section id="items"> 

 			<div class="row">
 			<?php  storeItems::generateItems(); ?>
			</div>


 		</section>




 	</section>
 </div>