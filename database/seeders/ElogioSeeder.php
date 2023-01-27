<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElogioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('elogios')->insert([
        	[
	        	'nome_elogio' => 'elogio 1',
	        	'descricao' => 'Descrição do elogio ',
	        	'referencia' => 70218,
	        	'sector' => 'elogio unica',
				'id_user'=> 1,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
	        	'nome_elogio' => 'elogio 2',
	        	'descricao' => 'Descrição do elogio ',
	        	'referencia' => 70213,
	        	'sector' => 'elogio unica',
				'id_user'=> 2,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	]
        ]);
    }
}
