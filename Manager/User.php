<?php

namespace App\Manager;

use App\Entity\User;

class UserName {

    public function __construct() {

    }

    public function save(User $user): User {
         return $user;
    }
}