<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        // return response()->json([
        //     'id' => auth()->user()->id,
        //     'name' => auth()->user()->name,
        //     'email' => auth()->user()->email,
        // ]);
        // return view('user_profile');
        return view('user_profile', [
            'user' => auth()->user()
        ]);
    }
}
