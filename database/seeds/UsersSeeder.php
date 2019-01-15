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
				'name'     => 'Hector Morales',
				'email'    => 'hector@gmail.com',
				'password' => '123456'				 		
			],
			[			
				'name'     => 'Erika Fiscal',
				'email'    => 'erika@gmail.com',
				'password' => '123456'	
			] 
		]);
    }
}
