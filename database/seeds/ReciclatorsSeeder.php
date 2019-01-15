<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReciclatorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reciclators')->insert([
			[
				'id_document_type' => 1,
				'document'         => 1113124878,
				'first_name'       => 'Carlos David',
				'last_name'        => 'Ortega Lopez',
				'address'          => 'Cra 32 44 52',
				'phone_number'     => 2567890,
				'mobile_number'    => 3148596344,
				'id_type_purchase' => 1        		
			],
			[			
				'id_document_type' => 1,
				'document'         => 1123124878,
				'first_name'       => 'Giovany Mauricio',
				'last_name'        => 'Muñoz Vergara',
				'address'          => 'Cra 44 23 34',
				'phone_number'     => 5567890,
				'mobile_number'    => 3208976789,
				'id_type_purchase' => 2
			] 
		]);
    }
}
