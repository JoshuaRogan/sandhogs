<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model {

	use SoftDeletes;
	protected $dates = ['deleted_at'];

	//Table name
	protected $table = 'teams';


	protected $fillable = ['name', 'description'];

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
