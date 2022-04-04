<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function editProfileUser(){
        return view('ManageProfile.userProfile');
    }
    
}
