<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        return view('Pages/users/contact');
    }
}
