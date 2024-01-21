<?php

namespace App\Http\Controllers\Frontend\Components\Navbars;

use App\Models\Setting;
use App\Models\User;
use Closure;
use Core\Session;
// use Core\View;
use Illuminate\Support\Facades\View;


use Illuminate\View\Component;

class GuestNavbar extends Component
{

    const BLADE_NAME = 'frontend.guest.navbar';
    /**
     * Get the view / contents that represent the component.
     */
    
    public function render()
    {

        return View::make('frontend.components.navbars.guest-navbar');

    }
}
