<?php

namespace App\Http\Controllers\API\V1;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //

    public function users()
    {

        return User::latest()->get();
    }
}
