<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Portal extends BaseController
{
    public function index($referrer = null)
    {
        //echo 'user is wroking..';
        if (!empty($referrer)) {
            setcookie("referral_user", $referrer, time() + (60 * 24 * 60 * 60), "/");
        }
        return view('welcome_message');
    }
}
