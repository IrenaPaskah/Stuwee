<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Portofolio extends BaseController
{
    public function index(): string
    {
        return view('Pages/users/portofolio');
    }
}
