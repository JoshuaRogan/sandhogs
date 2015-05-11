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
		while(Coach::withTrashed()->where('slug', '=', $value)->count() > 0){
			$value = $base_slug . "-" . $i;
			$i++;
		}

		$this->attributes['slug'] = $value; 
    }

}
