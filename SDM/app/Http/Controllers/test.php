<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_details;



class test extends Controller
{
    public function test1(){
        return view('test');
    }

    public function test(){
        // $data = new admin_details;
        // $data->admin_email = "kavin.cb22@bitsathy.ac.in";
        // $data->admin_password = "123";
        // $data->save();
        return view('pages.auth.login');
    }
}
