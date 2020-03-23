<?php

namespace App\Policies;

use App\MuzaiEducation;
use App\User;

use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any muzai education.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the muzai education.
     *
     * @param  \App\User  $user
     * @param  \App\MuzaiEducation  $muzaiEducation
     * @return mixed
     */
    public function view(User $user, MuzaiEducation $muzaiEducation)
    {

        

    }

    /**
     * Determine whether the user can create muzai education.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the muzai education.
     *
     * @param  \App\User  $user
     * @param  \App\MuzaiEducation  $muzaiEducation
     * @return mixed
     */
    public function update(User $user, MuzaiEducation $muzaiEducation)
    {

        //return $muzaiEducation -> user_id === $user -> id;

        return $user -> id === $muzaiEducation -> user_id
                    ? Response::allow()
                    : Response::deny('You do not own this profile');

    }

    /**
     * Determine whether the user can delete the muzai education.
     *
     * @param  \App\User  $user
     * @param  \App\MuzaiEducation  $muzaiEducation
     * @return mixed
     */
    public function delete(User $user, MuzaiEducation $muzaiEducation)
    {
        //
    }

    /**
     * Determine whether the user can restore the muzai education.
     *
     * @param  \App\User  $user
     * @param  \App\MuzaiEducation  $muzaiEducation
     * @return mixed
     */
    public function restore(User $user, MuzaiEducation $muzaiEducation)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the muzai education.
     *
     * @param  \App\User  $user
     * @param  \App\MuzaiEducation  $muzaiEducation
     * @return mixed
     */
    public function forceDelete(User $user, MuzaiEducation $muzaiEducation)
    {
        //
    }
}
