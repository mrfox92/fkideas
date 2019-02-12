<?php

use Illuminate\Database\Seeder;

class RetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Retail::class, 20)->create();
    }
}
