<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

	//Table name
	protected $table = 'teams';

	// protected $fillable = ['name', 'description'];

	/**
	 *	Players of this team. 
	 *
	 */
	public function players()
	{
		return $this->belongsToMany('App\Player');
	}


}
