<?php

namespace src\Models;

class Songs
{
    public function findAll(): array
    {
        return [0 =>['style' => 'Techno',
            'author' => 'dj k',
            'title' => 'hit',
            'length' => '60:43'],
            1 => ['style' => 'DnB',
                'author' => 'dj h',
                'title' => 'hitiara',
                'length' => '77:33'],
            2 => ['style' => 'Trance',
                'author' => 'dj l',
                'title' => 'hitusia',
                'length' => '45:43']];
    }
}