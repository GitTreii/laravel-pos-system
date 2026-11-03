<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'username' => 'professor_x',
                'full_name' => 'Charles Xavier'
            ],
            [
                'username' => 'cyclops',
                'full_name' => 'Scott Summers'
            ],
            [
                'username' => 'storm',
                'full_name' => 'Ororo Munroe'
            ],
            [
                'username' => 'wolverine',
                'full_name' => 'Logan Howlett'
            ],
            [
                'username' => 'nightcrawler',
                'full_name' => 'Kurt Wagner'
            ]
        ];

        return view('users', compact('users'));
    }
}