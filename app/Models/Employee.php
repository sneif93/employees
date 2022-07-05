<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 * 
 * @property int $id_employee
 * @property string|null $name
 * @property string|null $last_name
 * @property string|null $document_number
 * @property string|null $address
 * @property string|null $phone_number
 * @property int $city_id_city
 * @property int $document_type_id_document_type
 * 
 * @property City $city
 * @property DocumentType $document_type
 * @property Collection|JobPosition[] $job_positions
 *
 * @package App\Models
 */
class Employee extends Model
{
	use HasFactory;
	protected $table = 'employee';
	protected $primaryKey = 'id_employee';
	public $timestamps = false;

	protected $casts = [
		'city_id_city' => 'int',
		'document_type_id_document_type' => 'int'
	];

	protected $fillable = [
		'name',
		'last_name',
		'document_number',
		'address',
		'phone_number',
		'city_id_city',
		'document_type_id_document_type'
	];

	public function city()
	{
		return $this->belongsTo(City::class, 'city_id_city');
	}

	public function document_type()
	{
		return $this->belongsTo(DocumentType::class, 'document_type_id_document_type');
	}

	public function job_positions()
	{
		return $this->belongsToMany(JobPosition::class, 'employee_job_position', 'fk_id_employee', 'fk_id_job_position')
					->withPivot('id_employee_job_position', 'id_direct_boss_employee_job_position', 'updated_at', 'deleted_at');
	}
}
