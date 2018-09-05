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
        		'name'  => 'C.C',		
			],
			[			
        		'name'  => 'NIT',
			] 
		]);
    }
}
