<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'full_name' => 'Scott Summers',
                'email' => 'scott.summers@example.com',
                'phone' => '555-0101',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'full_name' => 'Jean Grey',
                'email' => 'jean.grey@example.com',
                'phone' => '555-0202',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'full_name' => 'Logan Howlett',
                'email' => 'logan.howlett@example.com',
                'phone' => '555-0303',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'full_name' => 'Ororo Munroe',
                'email' => 'ororo.munroe@example.com',
                'phone' => '555-0404',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'full_name' => 'Hank McCoy',
                'email' => 'hank.mccoy@example.com',
                'phone' => '555-0505',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        DB::table('users')->insert([
            [
                'username' => 'professor_x',
                'full_name' => 'Charles Xavier',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'cyclops',
                'full_name' => 'Scott Summers',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'storm',
                'full_name' => 'Ororo Munroe',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'wolverine',
                'full_name' => 'Logan Howlett',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'nightcrawler',
                'full_name' => 'Kurt Wagner',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
