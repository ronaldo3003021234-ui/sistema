<?php

namespace App\Controllers\Admin; // ou o namespace correspondente

use App\Controllers\BaseController;

class Painel extends BaseController
{
    public function index()
    {
        return view('admin/painel');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->to('login');
    }
}