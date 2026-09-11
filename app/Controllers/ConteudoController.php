<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ConteudoController extends BaseController
{
    public function index()
    {
    return view('home');
    }
}
