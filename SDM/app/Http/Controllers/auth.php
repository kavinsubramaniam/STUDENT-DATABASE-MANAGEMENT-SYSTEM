<?php

namespace App\Http\Controllers;

use App\Models\admin_details;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class auth extends Controller
{

    #login 

    public function loginView(){
        return view('pages.auth.login');
    }

    public function loginAuth(Request $request){
        // $validation = Validator::make($request->all(), [
        //     'username' => 'required|email',
        //     'pass'=> 'required',
        // ]);
        // if ($validation->fails()){
        //     return redirect()->back()->withErrors($validation)->withInput();
        // }
        $data = DB::table('admin_details')->where('admin_email', '=', $request->username)->first();
        if($data != Null && $data->admin_password == $request->input('pass')){
            session()->put('verified', 1);
            return redirect(route('studentView'));
        }else{
            return redirect()->back()->withErrors('Login Failed, Check credentials')->withInput();
        }
    }
    
    
    # Email for OTP Verification
    public function emailOtpView(){
        return view('pages.auth.emailOtp');
    }
    
    public function emailOtpAuth(Request $request){
        return redirect(route('OtpVerify'));
    }

    public function OtpVerifyView(Request $request){
        return view('pages.auth.otpVerify');
    }

    public function OtpVerifyAuth(Request $request){
        return redirect(route('ChangePassword'));
    }

    public function ChangePasswordView(Request $request){
        return view('pages.auth.changePass');
    }

    public function ChangePasswordAuth(Request $request){
        return redirect(route('studentView'));
    }
}
