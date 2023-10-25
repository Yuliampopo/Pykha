<?php

namespace src\Models;

class Users
{
    public function findAll(): array
    {
        return [0 =>['first_name' => 'testik',
            'second_name' => 'testovich',
            'login' => 'log',
'email' => 'testik@gmaol.com'],
1 => ['first_name' => 'testik',
        'second_name' => 'testovich',
        'login' => 'log',
'email' => 'testik@gmaol.com'],
2 => ['first_name' => 'testik',
        'second_name' => 'testovich',
        'login' => 'log',
'email' => 'testik@gmaol.com']];
    }
}