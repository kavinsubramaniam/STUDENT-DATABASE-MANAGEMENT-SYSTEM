<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile extends Controller
{
    public function profileView(){
        return view('pages.dash.profile');
    }
}
