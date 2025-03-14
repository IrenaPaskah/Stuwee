<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Pricing extends BaseController
{
    public function index(): string
    {
        return view('Pages/users/pricing');
    }
}
