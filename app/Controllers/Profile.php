<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Profile extends BaseController
{
    public function index()
    {
        //
        if(!session('user_id')) return redirect()->route('loginForm');

		return view('profile');
    }
}
