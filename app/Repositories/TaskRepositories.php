<?php

namespace App\Repositories;

use \App\Models\User;

class TaskRepositories {

    /**
     *
     *
     * @param $User user
     */

     public function forUser(User $user){
        return $user->tasks()->orderBy('created_at','asc')->get();
     }
}
