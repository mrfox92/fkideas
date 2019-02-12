<?php

use Illuminate\Database\Seeder;

class RemodelacionesConstruccionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\RemodelacionConstruccion::class, 20)->create();
    }
}
