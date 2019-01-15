<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
			[
				'id_document_type' => 2,
				'document'         => 900568896,
				'commercial_name'  => 'Erika Fiscal',
				'business_name'    => 'Erika',
				'address'          => 'Cll 45 32-25',
				'phone_number'     => 4255689
			],
			[		
				'id_document_type' => 2,      					
				'document'         => 900765896,
				'commercial_name'  => 'Pepito Perez',
				'business_name'    => 'Pepe S.A',
				'address'          => 'Cll 85 64-44',
				'phone_number'     => 4478596
			] 
		]);
    }
}
