<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon; 

class Event extends Model {

	//Soft deleting 
	use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'events';

    protected $fillable = [
		'name', 'slug', 'description', 'results', 'location', 'start_date', 'end_date' 
	];

    /**
     * Return the team(s) this event belongs to
     * 
     * @return array Team
     */
    public function teams(){
    	return $this->belongsToMany('App\Team'); 
    }


    /**
     * Return a formmated string that the View form can handle
     * 
     * @param String $date 
     * @return String
     */
    public function getStartDateAttribute($date)
    {

        return (new Carbon($date))->toDateString();
    } 

    /**
     * Return a formmated string that the View form can handle
     * 
     * @param String $date 
     * @return String
     */
    public function getEndDateAttribute($date)
    {
        return (new Carbon($date))->toDateString();
    } 



    /**
     * Make sure the slug is valid. 
     * 
     * @param type $value 
     * @return type
     */
    public function setSlugAttribute($value){
    	$base_slug = urlencode(strtolower(str_ireplace(" ", "-", $value))); 
    	$value = $base_slug; 
		
		$i = 1; //Generate a unique slug
		while(Event::withTrashed()->whereSlug($value)->count() > 0){
			$value = $base_slug . "-" . $i;
			$i++;
		}
		$this->attributes['slug'] = $value; 
    }

}
