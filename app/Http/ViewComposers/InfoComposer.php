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
        $view->with('info', $this->info);
    }
}