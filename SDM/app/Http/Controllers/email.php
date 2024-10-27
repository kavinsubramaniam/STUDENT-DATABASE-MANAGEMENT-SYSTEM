<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class email extends Controller
{
    public function emailView(){
        return view('pages.dash.email');
    }
}
