<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class StudInsert extends Model
{
	protected $table = 'student_details';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'first_name', 'last_name','city_name', 'email',
	];
}