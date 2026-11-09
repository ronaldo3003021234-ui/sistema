<?php

namespace Config;

use CodeIgniter\Shield\Config\Auth as ShieldAuth;

class Auth extends ShieldAuth
{
    /**
     * --------------------------------------------------------------------------
     * Redirects
     * --------------------------------------------------------------------------
     * After login, registration, or logout, where should the user be redirected?
     */
    public array $redirects = [
        'register' => '/',
        'login'    => 'admin',
        'logout'   => 'login',
    ];

    // Mantenha o restante das configurações padrão do Shield abaixo...
}