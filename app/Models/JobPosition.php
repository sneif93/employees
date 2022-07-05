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
 * Class JobPosition
 * 
 * @property int $id_job_position
 * @property string $name
 * @property int $parent_id_job_position
 * @property Carbon $created_at
 * @property Carbon|null $update_at
 * @property string|null $deleted_at
 * 
 * @property JobPosition $job_position
 * @property Collection|Employee[] $employees
 * @property Collection|JobPosition[] $job_positions
 *
 * @package App\Models
 */
class JobPosition extends Model
{
	use SoftDeletes, HasFactory;
	protected $table = 'job_position';
	protected $primaryKey = 'id_job_position';
	public $timestamps = false;

	protected $casts = [
		'parent_id_job_position' => 'int'
	];

	protected $dates = [
		'update_at'
	];

	protected $fillable = [
		'name',
		'parent_id_job_position',
		'update_at'
	];

	public function job_position()
	{
		return $this->belongsTo(JobPosition::class, 'parent_id_job_position');
	}

	public function employees()
	{
		return $this->belongsToMany(Employee::class, 'employee_job_position', 'fk_id_job_position', 'fk_id_employee')
					->withPivot('id_employee_job_position', 'id_direct_boss_employee_job_position', 'update_at', 'deleted_at');
	}

	public function job_positions()
	{
		return $this->hasMany(JobPosition::class, 'parent_id_job_position');
	}
}
