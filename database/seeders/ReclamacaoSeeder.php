<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReclamacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reclamacoes')->insert([
        	[
	        	'nome_reclamacao' => 'Reclamacao 1',
	        	'descricao' => 'Descrição da reclamação ',
	        	'referencia' => 70218,
	        	'numero_de_cell' => 'Reclamacao unica',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
	        	'nome_reclamacao' => 'Reclamacao 2',
	        	'descricao' => 'Descrição da reclamação ',
	        	'referencia' => 70213,
	        	'numero_de_cell' => 'Reclamacao unica',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	]
        ]);
    }
}
