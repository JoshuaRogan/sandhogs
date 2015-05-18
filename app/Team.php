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
	 * Only get the teams that are currently visible. 
	 * 
	 * @param type $query 
	 * @return type $query
	 */
	public function scopeVisible($query)
    {
        return $query->where('visible', '=', true);
    }

    /**
	 * Only get the teams that are currently visible. 
	 * 
	 * @param type $query 
	 * @return type $query
	 */
	public function scopeNotVisible($query)
    {
        return $query->where('visible', '=', false);
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
		return $this->belongsToMany('App\Player')->withPivot('number');
	}

	/**
	 *	Coaches of this team. 
	 *
	 */
	public function coaches()
	{
		return $this->belongsToMany('App\Coach')->withPivot('number', 'role');
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
