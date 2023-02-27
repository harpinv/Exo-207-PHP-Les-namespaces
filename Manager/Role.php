<?php

namespace App\Manager;

use App\Entity\Role;

class RoleName {

    public function __construct() {

    }

    public function save(Role $user): Role {
        return $user;
    }
}