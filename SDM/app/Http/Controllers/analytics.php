<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class analytics extends Controller
{
    public function analyticsView(){
        return view('pages.dash.analytics');
    }
}
