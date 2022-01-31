<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($userId)
    {
        $user = User::find($userId);
        return view('home', [
            'user' => $user
        ]);
    }
}
