<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TasksUser
 * 
 * @property int $id
 * @property int $user_id
 * @property int $list_id
 * @property string $access
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property List $list
 * @property User $user
 *
 * @package App\Models
 */
class TasksUser extends Model
{
	protected $table = 'tasks_users';

	protected $casts = [
		'user_id' => 'int',
		'list_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'list_id',
		'access'
	];

	public function list()
	{
		return $this->belongsTo(TaskList::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
