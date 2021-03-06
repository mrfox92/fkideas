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
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        /* $this->call(RetailsTableSeeder::class);
        $this->call(AseosIndustrialesTableSeeder::class);
        $this->call(RemodelacionesConstruccionesTableSeeder::class); */
        $this->call(InfosTableSeeder::class);
        /* $this->call(RetailImagesTableSeeder::class);
        $this->call(RemodelacionConstruccionTableSeeder::class); */
    }
}
