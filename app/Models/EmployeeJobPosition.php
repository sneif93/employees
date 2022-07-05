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
 * Class EmployeeJobPosition
 * 
 * @property int $id_employee_job_position
 * @property int $fk_id_employee
 * @property int $fk_id_job_position
 * @property int|null $id_direct_boss_employee_job_position
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Employee $employee
 * @property JobPosition $job_position
 * @property EmployeeJobPosition|null $employee_job_position
 * @property Collection|EmployeeJobPosition[] $employee_job_positions
 *
 * @package App\Models
 */
class EmployeeJobPosition extends Model
{
	use SoftDeletes;
	protected $table = 'employee_job_position';
	protected $primaryKey = 'id_employee_job_position';
	public $timestamps = false;

	protected $casts = [
		'fk_id_employee' => 'int',
		'fk_id_job_position' => 'int',
		'id_direct_boss_employee_job_position' => 'int'
	];

	protected $dates = [
		'updated_at'
	];

	protected $fillable = [
		'fk_id_employee',
		'fk_id_job_position',
		'id_direct_boss_employee_job_position',
		'updated_at'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'fk_id_employee');
	}

	public function job_position()
	{
		return $this->belongsTo(JobPosition::class, 'fk_id_job_position');
	}

	public function employee_job_position()
	{
		return $this->belongsTo(EmployeeJobPosition::class, 'id_direct_boss_employee_job_position');
	}

	public function employee_job_positions()
	{
		return $this->hasMany(EmployeeJobPosition::class, 'id_direct_boss_employee_job_position');
	}
}
