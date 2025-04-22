<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    function index()
    {
        $data = [];
        echo view('admin/v_blog',);
    }
}
