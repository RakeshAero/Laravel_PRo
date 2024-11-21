<?php

namespace App\Repositories;

use \App\Model\User;

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
