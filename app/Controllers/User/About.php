<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        $artikelModel = new \App\Models\artikelModel();
        return view('Pages/users/about');
    }
}
