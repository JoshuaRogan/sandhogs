<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coach extends Model {
	
	//Soft deleting 
	use SoftDeletes;
    protected $dates = ['deleted_at'];

    
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'coaches';

	protected $fillable = [
		'first', 'last', 'email', 'description'
	];


	/**
	 * Description
	 * 
	 * @return Team
	 */
    public function teams(){
    	return $this->belongsToMany('App\Team')->withPivot('number', 'role'); 
    }

    /**
     * Return the full name of this coach 
     * 
     * @return String full_name
     */
    public function getFullNameAttribute(){
    	return "$this->first $this->last"; 
    }

    
    /**
     * Return a list of links to the teams that this coach is coaching 
     * 
     * @return type
     */
    public function getTeamsCoachingLinksAttribute(){
    	$string = ""; 
    	foreach($this->teams as $team){
    		$string .= "<a href='" . route('team.show', $team->slug) . "'> $team->name </a>";  
    	}
    	return $string; 
    }

    /**
     * Make sure the slug attribute is unique whenever it is 
     * updated. CHECK IT AGAINST ITSELF!!
     * 
     * 
     * @param String $value 
     * 
     */
    public function setSlugAttribute($value){
    	$base_slug = str_slug(strtolower($value), "-"); 
    	$value = $base_slug; 
		
		$i = 1; //Generate a unique slug
		while(Coach::withTrashed()->where('slug', '=', $value)->count() > 0){
			$value = $base_slug . "-" . $i;
			$i++;
		}

		$this->attributes['slug'] = $value; 
    }

}
