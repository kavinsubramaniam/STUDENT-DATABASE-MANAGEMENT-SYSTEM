@extends('layouts.auth')

@section('cssLink')
<link rel="stylesheet" href="{{ asset('css/auth/changePass.css')}}">    
@endsection

@section('formTitle')
    <h1>Change Password</h1>
@endsection

@section('main')
    <form class="loginForm" action="#" method="POST">
        @csrf
        <div class="input_field">
            <label for="pass">New Password</label>
            <input type="password" id="pass" name="pass" style="boder:none;outline:none;" required>
            <label for="repass">Repeat Password</label>
            <input type="password" id="repass" name="repass" required>
        </div>
        
        <button type="submit">Change</button>
        <span><a href="{{ url('/emailOtp') }}" id="back"><h6>back</h6></a></span>
 
    </form>

    
@endsection

@if ($errors->any())
    <div class="alert alert-danger mu-2">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif