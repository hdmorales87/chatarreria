<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('document_types')->insert([
			[
        		'name'  => 'carton',
				'price' => 5000,
				
			],
			[			
        		'name'  => 'papel',
				'price' => 2000,
			] 
		]);
    }
}
