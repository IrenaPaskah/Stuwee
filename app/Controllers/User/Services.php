<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Services extends BaseController
{
    public function index()
    {
        return view('Pages/users/services');
        return view('Pages/users/service-details');
    }
}
