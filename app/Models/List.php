<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class List
 * 
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Collection|Task[] $tasks
 * @property Collection|TasksUser[] $tasks_users
 *
 * @package App\Models
 */
class List extends Model
{
	protected $table = 'lists';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'name'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function tasks()
	{
		return $this->hasMany(Task::class);
	}

	public function tasks_users()
	{
		return $this->hasMany(TasksUser::class);
	}
}
