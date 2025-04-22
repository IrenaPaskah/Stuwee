<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Admin extends BaseController
{
    protected $m_admin;
    function __construct()
    {
        $this->m_admin = new AdminModel();
        $validation = \Config\Services::validation();
    }
    public function login()
    {
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'isi username nya donkkk'
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'password juga harus diisi bosss'
                    ]
                ]
            ];
            if (!$this->validate($rules)) {
                session()->setFlashdata("warning", \Config\Services::validation()->getErrors());
                return redirect()->to("admin/login");
            } else {
                session()->setFlashdata("success", "Contoh Orang Sukses");
                return redirect()->to("admin/login");
            }
        }
        echo view("admin/v_login", $data);
    }
}
