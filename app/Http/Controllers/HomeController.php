<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function adminView()
    {
        $menus = Menu::paginate(5);
        return view('ManageMenu.adminMenu',compact('menus'));
    }

    public function userViewHome()
    {
        return view('userHome');
    }
    
}
