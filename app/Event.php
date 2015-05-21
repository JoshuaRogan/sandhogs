<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon; 

class Event extends Model {

	//Soft deleting 
	use SoftDeletes;
    protected $dates = ['deleted_at', 'start_date', 'end_date'];

    protected $table = 'events';

    protected $fillable = [
		'name', 'slug', 'description', 'results', 'location', 'start_date', 'end_date', 'detailed_location'
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
     * Return the five upcoming events
     * 
     * @param type $query 
     * @return Query
     */
    public function scopeUpcoming($query, $limit = 5){
        return $query->where('start_date', '>=', new Carbon('today'))->orderBy('start_date', 'asc')->take($limit);
    }


    /**
     * Return a formmated string that the View form can handle
     * 
     * @param String $date 
     * @return String
     */
    public function getStartDateStringAttribute()
    {
        if($this->start_date) return $this->start_date->toDateString();
        
    } 

    /**
     * Return a formmated string that the View form can handle
     * 
     * @param String $date 
     * @return String
     */
    public function getEndDateStringAttribute()
    {
        if($this->end_date) return $this->end_date->toDateString();
    } 

    /**
     * Return the location properly formatted for a google maps URL
     * 
     * @return String
     */
    public function getGoogleMapsLocationAttribute(){
        return str_replace(' ', '+', $this->location);
    }


    /**
     * Make sure the slug is valid. 
     * 
     * @param type $value 
     * @return type
     */
    public function setSlugAttribute($value){
    	$base_slug = str_slug(strtolower(str_ireplace(" ", "-", $value)), "-"); 
    	$value = $base_slug; 
		
		$i = 1; //Generate a unique slug
		while(Event::withTrashed()->whereSlug($value)->count() > 0){
			$value = $base_slug . "-" . $i;
			$i++;
		}
		$this->attributes['slug'] = $value; 
    }

}
