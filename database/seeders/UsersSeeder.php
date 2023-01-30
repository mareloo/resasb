<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	[
                'name' => 'Marelo Afonso',
                'email' => 'marelo@gmail.com',
                'numero' => '841801901',
                'nivelacesso' => 'utente',
                'password' => bcrypt('1234567890'),
        	],
        	[
	        'name' => 'Marelo ',
                'email' => 'mareloa@gmail.com',
                'numero' => '851801901',
                'nivelacesso' => 'admin',
                'password' => bcrypt('1234567890'),
        	],
        	[
	        'name' => 'Afonso',
                'email' => 'afonso@gmail.com',
                'numero' => '861801901',
                'nivelacesso' => 'utente',
                'password' => bcrypt('1234567890'),
        	],
        	[
	        	'name' => 'Manuela de Marelo',
                'email' => 'ma@gmail.com',
                'numero' => '7874894',
                'nivelacesso' => 'utente',
                'password' => bcrypt('1234567890'),
        	]
        ]);
    }
}
