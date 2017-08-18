<?php

namespace App\Repositories;

use App\Task;
use App\User;

class TaskRepository
{
  /**
   * ѕолучить все задачи заданного пользовател€.
   *
   * @param  User  $user
   * @return Collection
   */
  public function forUser(User $user)
  {
    return $user->tasks()
        ->orderBy('created_at', 'asc')
        ->get();
  }
  public function all()
  {
      $tasks=Task::all();
      return $tasks;
  }
}