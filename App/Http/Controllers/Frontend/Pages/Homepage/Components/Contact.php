<?php

namespace App\Http\Controllers\Frontend\Pages\Homepage\Components;

use App\Models\Setting;
use App\Models\User;
use Closure;
use Core\Session;
// use Core\View;
use Illuminate\Support\Facades\View;


use Illuminate\View\Component;

class Contact extends Component
{
    const BLADE_NAME = 'frontend.homepage.contact';

    /**
     * Get the view / contents that represent the component.
     */
    
    public function render()
    {

        return View::make('frontend.pages.homepage.components.contact');

    }
}
