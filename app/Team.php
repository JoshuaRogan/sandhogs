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
	 * Return all of the visible teams sorted by a custom function 
	 * 
	 * @return Collection
	 */
	public static function sortedVisibleTeams(){
		return Team::visible()->get()->sortBy(function($item){
			$age_group = substr(preg_replace("/(^\d+)(.+$)/", "$1", $item->name), 0, 2);

			if(is_numeric($age_group)){
				if($age_group == 17){
					if($item->name == "17UE") return 18;
					else return 17; 
				}
				else{
					return intval($age_group);
				}
			}
			else{
				return 19;
			}
		}); 
	}

	/**
	 * Only get the teams that are currently visible. 
	 * 
	 * @param Builder $query 
	 * @return Builder
	 */
	public function scopeVisible($query)
    {
        return $query->where('visible', '=', true);
    }

    /**
	 * Only get the teams that are currently visible. 
	 * 
	 * @param Builder $query 
	 * @return Builder $query
	 */
	public function scopeNotVisible($query)
    {
        return $query->where('visible', '=', false);
    }


	/**
     * Make sure the slug is valid. 
     * 
     * @param String $value 
     */
    public function setSlugAttribute($value){
    	$base_slug = str_slug(strtolower(str_ireplace(" ", "-", $value)), '-'); 
    	$value = $base_slug; 
		
		$i = 1; //Generate a unique slug
		while(Team::withTrashed()->whereSlug($value)->count() > 0){
			$value = $base_slug . "-" . $i;
			$i++;
		}
		$this->attributes['slug'] = $value; 
	}

	/**
	 * Return an all upcase Name
	 * 
	 * @param String $value 
	 * @return String
	 */
	public function getNameAttribute($value){
		return strtoupper($value); 
	}



	/**
	 * Players of this team
	 * @return Collection
	 */
	public function players()
	{
		return $this->belongsToMany('App\Player')->withPivot('number')->orderBy('last');
	}


	/**
	 *	Coaches of this team. 
	 * 	@return Collection
	 */
	public function coaches()
	{
		return $this->belongsToMany('App\Coach')->withPivot('number', 'role')->orderBy('last');
	}

	/**
	 *	Events for this team. 
	 * 	@return Collection
	 */
	public function events()
	{
		return $this->belongsToMany('App\Event')->orderBy('start_date');;
	}

	/**
	 * Return all of the head coaches for this team
	 * @return Collection
	 */
	public function headCoaches()
	{
		return $this->belongsToMany('App\Coach')->withPivot('number', 'role')->wherePivot('role','Head Coach')->orderBy('last');
	}

	/**
	 * Return all of the non head coaches for this team
	 * @return Collection
	 */
	public function asstCoaches()
	{
		return $this->belongsToMany('App\Coach')->withPivot('number', 'role')->wherePivot('role','<>','Head Coach')->orderBy('last');
	}






}
