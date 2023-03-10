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
	        	'caso' => 'rua desagradada',
	        	'mensagem' => ' mensagem Descrição da reclamação ',
	        
	        	'contacto' => '841801900',
				'rua' => 'av.bagamoyo',
				'bairro' => 'bairro',
				'file' => '841801900',
				'senha' => '841801900',
				'posto' => '',
				'id_user'=> 4,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
	        	'caso' => 'rua desagradada',
	        	'mensagem' => ' mensagem Descrição da reclamação ',
	     
	        	'contacto' => '841801900',
				'rua' => 'av.bagamoyo',
				'bairro' => 'bairro',
				'file' => '841801900',
				'senha' => '841801900',
				'posto' => '',
				'id_user'=> 4,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	]
        ]);
    }
}
