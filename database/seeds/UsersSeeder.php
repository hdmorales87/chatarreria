<?php

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
        DB::table('users')->insert([
			[
				'id_document_type' => 1,
				'document'         => 1113124878,
				'name'             => 'Hector Morales',
				'email'            => 'hector@gmail.com',
				'password'         => '123456'				 		
			],
			[			
				'id_document_type' => 1,
				'document'         => 1130661106,
				'name'             => 'Erika Fiscal',
				'email'            => 'erika@gmail.com',
				'password'         => '123456'	
			] 
		]);
    }
}
