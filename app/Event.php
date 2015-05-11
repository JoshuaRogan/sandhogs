<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model {

	//Soft deleting 
	use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'events';

    protected $fillable = [
		'name', 'slug', 'description', 'location', 'start_date', 'end_date' 
	];

	/**
     *	All of the teams this event is including (usually 1)
     *	
     */
    public function teams(){
    	return $this->belongsToMany('App\Team'); 
    }



   /**
     *	Loop until there is a valid slug
     *
     */
    public function setSlugAttribute($value){
    	$base_slug = urlencode(strtolower($value)); 
    	$value = $base_slug; 
		
		$i = 1; //Generate a unique slug
		while(Event::withTrashed()->where('slug', '=', $value)->count() > 0){
			$value = $base_slug . "-" . $i;
			$i++;
		}
		$this->attributes['slug'] = $value; 
    }

}
