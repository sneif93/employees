<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class City
 * 
 * @property int $id_city
 * @property string $name
 * @property int $fk_id_country
 * @property Carbon $created_at
 * @property Carbon|null $update_at
 * @property string|null $deleted_at
 * 
 * @property Country $country
 * @property Collection|Employee[] $employees
 *
 * @package App\Models
 */
class City extends Model
{
	use SoftDeletes, HasFactory;
	protected $table = 'city';
	protected $primaryKey = 'id_city';
	public $timestamps = false;

	protected $casts = [
		'fk_id_country' => 'int'
	];

	protected $dates = [
		'update_at'
	];

	protected $fillable = [
		'name',
		'fk_id_country',
		'update_at'
	];

	public function country()
	{
		return $this->belongsTo(Country::class, 'fk_id_country');
	}

	public function employees()
	{
		return $this->hasMany(Employee::class, 'city_id_city');
	}
}
