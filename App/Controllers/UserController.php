<?php

namespace App\Controllers;

use App\Models\User;

class UserController{

    public function getUserName()
    {
 
        $user = new User();
        $name = $user->getName();

        return "UserController: User name is - " . $name;
    }
}
