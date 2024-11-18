<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Enterprise;

class CrudPolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Enterprise $enterprise)
    {
        return $user->id === $enterprise->creator_user_id;
    }

    public function delete(User $user, Enterprise $enterprise)
    {
        return $user->id === $enterprise->creator_user_id;
    }
}
