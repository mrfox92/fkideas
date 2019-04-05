<?php

use Illuminate\Database\Seeder;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* factory(App\Info::class,1)->create(); */
        App\Info::create([
            'title'          =>   'Fkideas Diseño y Construccion S.P.A',
            'description'          =>   'Creamos experiencias únicas en tus ambientes. 
            Somos especialistas en proyectos mobiliarios, te ofrecemos la mejor opción 
            según tus necesidades.',
            'email'   =>   'contacto@fabrikideas.cl',
            'mobile_number' =>  '56232674940',
            'phone_number'  =>  '0224213146',
            'location'  =>  'El Roble 1142, Comuna Recoleta, Santiago de Chile.'

        ]);
    }
}
