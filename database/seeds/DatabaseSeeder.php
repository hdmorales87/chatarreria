<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	PurchaseTypesSeeder::class,
        	CustomersSeeder::class,
        	PurchasesSeeder::class
    	]);         
        //UsersTableSeeder::class,
    }
}
