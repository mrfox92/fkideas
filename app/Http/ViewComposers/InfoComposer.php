<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

use App\Info;
class InfoComposer
{
    public $info = [];

    public function __construct(){
        $this->info = $info = Info::orderBy('id', 'ASC')->first();
    }
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $this->info->meta_description = "fkideas es una empresa de fabricación de muebles para retail en santiago, servicios de aseo industrial, remodelación y construcciones menores.";

        $view->with('info', $this->info);
    }
}