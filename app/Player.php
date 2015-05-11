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
}
