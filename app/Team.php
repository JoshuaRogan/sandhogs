<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model {

	use SoftDeletes;
	protected $dates = ['deleted_at'];

	//Table name
	protected $table = 'teams';


	protected $fillable = ['name', 'description', 'year'];

	/**
	 * Sync all of the coaches to this team 
	 * 
	 * @param type $coachIds 
	 */
	public function addCoaches($coachIds){
		$syncArray = Array(); 
		
		foreach($coachIds as $coachId){
			$syncArray[$coachId] = (array("number" => 10));  
		}

		$this->coaches()->sync($syncArray); 
	}

	/**
	 * Sync all of the coaches to this team 
	 * 
	 * @param type $coachIds 
	 */
	public function addPlayers($playerIds){
		$syncArray = Array(); 
		
		foreach($coachIds as $coachId){
			$syncArray[$coachId] = (array("number" => 10));  
		}

		$this->coaches()->sync($syncArray); 
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
		while(Team::withTrashed()->whereSlug($value)->count() > 0){
			$value = $base_slug . "-" . $i;
			$i++;
		}
		$this->attributes['slug'] = $value; 
	}



    

	/**
	 *	Players of this team. 
	 *
	 */
	public function players()
	{
		return $this->belongsToMany('App\Player');
	}

	/**
	 *	Coaches of this team. 
	 *
	 */
	public function coaches()
	{
		return $this->belongsToMany('App\Coach');
	}

	/**
	 *	Events for this team. 
	 *
	 */
	public function events()
	{
		return $this->belongsToMany('App\Event');
	}




}
