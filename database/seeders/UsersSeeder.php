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
                'numero' => '78747894',
                'nivelacesso' => 'utente',
                'password' => '1234567890',
        	],
        	[
	        	'name' => 'Marelo ',
                'email' => 'mareloa@gmail.com',
                'numero' => '78747894',
                'nivelacesso' => 'admin',
                'password' => '1234567890',
        	],
        	[
	        	'name' => 'Afonso',
                'email' => 'afonso@gmail.com',
                'numero' => '78747894',
                'nivelacesso' => 'utente',
                'password' => '1234567890',
        	],
        	[
	        	'name' => 'Manuela de Marelo',
                'email' => 'ma@gmail.com',
                'numero' => '78747894',
                'nivelacesso' => 'utente',
                'password' => '1234567890',
        	]
        ]);
    }
}
