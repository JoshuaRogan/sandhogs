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

}
