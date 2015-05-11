<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model {
	
	//Soft deleting 
	use SoftDeletes;
    protected $dates = ['deleted_at'];

	protected $table = 'players';

	/**
	 *	Mass assignment attributes 
	 *
	 */
	protected $fillable = [
		'first',
		'last',
		'position',
		'bio',
		'email'
	];

    /**
     *	Usually just belongs to one team by can be on more 
     *	than one. 
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
		while(Player::withTrashed()->where('slug', '=', $value)->count() > 0){
			$value = $base_slug . "-" . $i;
			$i++;
		}

		$this->attributes['slug'] = $value; 
    }
}
