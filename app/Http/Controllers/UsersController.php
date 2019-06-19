<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function getUsers() {

        $users = [
            [
                "id" => 1,
                "name"=> "Maria"
            ],
            [
                "id" => 2,
                "name"=> "João"
            ],
            [
                "id" => 3,
                "name"=> "Cláudio"
            ]
        ];

        return $users;
    }

    function createUser() {
        echo "ok";
    }


}


