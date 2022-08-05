<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * 
 * @property int $id
 * @property int $list_id
 * @property string $description
 * @property string|null $image
 * @property bool $finished
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property List $list
 * @property Collection|TasksTag[] $tasks_tags
 *
 * @package App\Models
 */
class Task extends Model
{
	protected $table = 'tasks';

	protected $casts = [
		'list_id' => 'int',
		'finished' => 'bool'
	];

	protected $fillable = [
		'list_id',
		'description',
		'image',
		'finished'
	];

	public function list()
	{
		return $this->belongsTo(List::class);
	}

	public function tasks_tags()
	{
		return $this->hasMany(TasksTag::class);
	}
}
