<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Pages/users/home');
    }
}
