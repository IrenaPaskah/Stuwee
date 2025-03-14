<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function main(): string
    {
        return view('Pages/users/blog');
    }
}
