<?php

namespace App\Policies;

use App\Models\User;
use App\Models\task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    /**
     * 指定されたユーザーのタスクの時削除可能
     * 
     * 
     */
    public function destroy(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }
}