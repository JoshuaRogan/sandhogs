<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'coaches';

	/**
	 *	Profile for this coach
	 *
	 */
	public function profile()
    {
        return $this->hasOne('App\Profile');
    }

}
