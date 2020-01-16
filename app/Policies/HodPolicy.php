<?php

namespace App\Policies;

use App\Hod;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HodPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any hods.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the hod.
     *
     * @param  \App\User  $user
     * @param  \App\Hod  $hod
     * @return mixed
     */
    public function view(User $user, Hod $hod)
    {
        //
    }

    /**
     * Determine whether the user can create hods.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the hod.
     *
     * @param  \App\User  $user
     * @param  \App\Hod  $hod
     * @return mixed
     */
    public function update(User $user, Hod $hod)
    {
        //
    }

    /**
     * Determine whether the user can delete the hod.
     *
     * @param  \App\User  $user
     * @param  \App\Hod  $hod
     * @return mixed
     */
    public function delete(User $user, Hod $hod)
    {
        //
    }

    /**
     * Determine whether the user can restore the hod.
     *
     * @param  \App\User  $user
     * @param  \App\Hod  $hod
     * @return mixed
     */
    public function restore(User $user, Hod $hod)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the hod.
     *
     * @param  \App\User  $user
     * @param  \App\Hod  $hod
     * @return mixed
     */
    public function forceDelete(User $user, Hod $hod)
    {
        //
    }
}
