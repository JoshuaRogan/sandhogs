<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model {

	//
	protected $table = 'players';

	/**
	 *	Profile for this player
	 *
	 */
	public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    /**
     *	Usually just belongs to one team by can be on more 
     *	than one. 
     */
    public function teams(){
    	return $this->belongsToMany('App\Team'); 
    }
}
