<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TasksTag
 * 
 * @property int $id
 * @property int $task_id
 * @property string $tag
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Task $task
 *
 * @package App\Models
 */
class TasksTag extends Model
{
	protected $table = 'tasks_tags';

	protected $casts = [
		'task_id' => 'int'
	];

	protected $fillable = [
		'task_id',
		'tag'
	];

	public function task()
	{
		return $this->belongsTo(Task::class);
	}
}
