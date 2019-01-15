<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purchases')->insert([
			[
                'date_purchase'    => date('Y-m-d'),
                'id_type_purchase' => 1,
                'id_reciclator'    => 1,                
                'weight'           => 20				
			],
			[			
                'date_purchase'    => date('Y-m-d'),
                'id_type_purchase' => 2,
                'id_reciclator'    => 1,
                'weight'           => 30	
			] 
		]);
    }
}
