<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Country
 * 
 * @property int $id_country
 * @property string|null $name
 * @property Carbon $created_at
 * @property Carbon|null $update_at
 * @property string|null $deleted_at
 * 
 * @property Collection|City[] $cities
 *
 * @package App\Models
 */
class Country extends Model
{
	use SoftDeletes;
	protected $table = 'country';
	protected $primaryKey = 'id_country';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_country' => 'int'
	];

	protected $dates = [
		'update_at'
	];

	protected $fillable = [
		'name',
		'update_at'
	];

	public function cities()
	{
		return $this->hasMany(City::class, 'fk_id_country');
	}
}
