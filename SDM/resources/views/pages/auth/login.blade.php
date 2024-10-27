@extends('layouts.auth')


@section('cssLink')
<link rel="stylesheet" href="{{ asset('css/auth/login.css')}}">    
@endsection

@section('formTitle')
    <h1>Login</h1>
@endsection

@section('main')
    <form class="loginForm" action="#" method="POST">
        @csrf
        <div class="input_field">
            <label for="username">Username </label>
            <input type="text" id="username" name="username" style="boder:none;outline:none;" required>
            <label for="pass">Password </label>
            <input type="password" id="pass" name="pass" required>
        </div>
        <div class="forget">
        <span><a href="{{ url('/emailOtp') }}" id="forgotPassLink"><h6>forget password?</h6></a></span>
        </div>
        
        <button type="submit">Submit</button>
 
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