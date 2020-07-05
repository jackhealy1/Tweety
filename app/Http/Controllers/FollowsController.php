<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {

        //follow or unfollow the given user
        auth()->user()->toggleFollow($user);

        return back();
    }
}
