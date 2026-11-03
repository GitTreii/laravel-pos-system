<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Scott Summers',
                'email' => 'scott.summers@example.com',
                'phone' => '555-0101'
            ],
            [
                'full_name' => 'Jean Grey',
                'email' => 'jean.grey@example.com',
                'phone' => '555-0202'
            ],
            [
                'full_name' => 'Logan Howlett',
                'email' => 'logan.howlett@example.com',
                'phone' => '555-0303'
            ],
            [
                'full_name' => 'Ororo Munroe',
                'email' => 'ororo.munroe@example.com',
                'phone' => '555-0404'
            ],
            [
                'full_name' => 'Hank McCoy',
                'email' => 'hank.mccoy@example.com',
                'phone' => '555-0505'
            ]
        ];

        return view('customers', compact('customers'));
    }
}