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
 * Class DocumentType
 * 
 * @property int $id_document_type
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon|null $update_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Employee[] $employees
 *
 * @package App\Models
 */
class DocumentType extends Model
{
	use SoftDeletes, HasFactory;
	protected $table = 'document_type';
	protected $primaryKey = 'id_document_type';
	public $timestamps = false;

	protected $dates = [
		'update_at'
	];

	protected $fillable = [
		'name',
		'update_at'
	];

	public function employees()
	{
		return $this->hasMany(Employee::class, 'document_type_id_document_type');
	}
}
