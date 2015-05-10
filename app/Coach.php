<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coach extends Model {
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
	 *	Profile for this coach
	 *
	 */
	public function profile()
    {
        return $this->hasOne('App\Profile');
    }

}
