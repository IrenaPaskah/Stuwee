<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index(): string
    {
        return view('Pages/users/blog');
    }

    public function details(): string
    {
        return view('Pages/users/blog-details');
    }
}
