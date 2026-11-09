<?php

namespace Config;

use CodeIgniter\Shield\Config\AuthGroups as ShieldAuthGroups;

class AuthGroups extends ShieldAuthGroups
{
    public array $groups = [
        'admin' => [
            'title'       => 'Administrador',
            'description' => 'Acesso administrativo',
        ],
        'user' => [
            'title'       => 'Usuário',
            'description' => 'Acesso padrão',
        ],
    ];

    public string $defaultGroup = 'user';

    public array $permissions = [
        'admin.access' => 'Acessar a área administrativa',
        'users.create' => 'Cadastrar usuários',
    ];

    public array $matrix = [
        'admin' => [
            'admin.*',
            'users.*',
        ],
        'user' => [],
    ];
}