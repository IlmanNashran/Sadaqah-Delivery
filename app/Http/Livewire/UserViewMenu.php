<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserViewMenu extends Component
{
    public function render()
    {
        $menus = Menu::where('category',$request->category)->get();
       
        return view('livewire.user-view-menu',compact('menus'));
    }
}
