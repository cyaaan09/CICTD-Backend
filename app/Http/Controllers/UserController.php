<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function createUser(Request $rq)
    {

        return $rq;
        $user = new User();
        $user->name = $rq->name;
        $user->email = $rq->email;
        // $user->password = $rq->password;
        $user->save();

        return response([
            'message' => 'Success na sir Jeff'
        ]);


    }

    public function getUsers()
    {
        return User::all();
    }


}

