@extends('layouts.auth')

@section('cssLink')
    <link rel="stylesheet" href="{{ asset('css/auth/emailOtp.css') }}">
@endsection

@section('formTitle')
    <h1 style="font-size: 45px;font-weight:900;">Forgot Password</h1>
@endsection

@section('main')
    <form class="loginForm" action="{{ url('/emailOtp') }}" method="POST">
        @csrf
        <div class="input_field">
            <label for="email">Email </label>
            <input type="email" id="email" name="email" required>
        </div>
        <p style="font-size:18px"><span>An email with an OTP will be sent to </span></p>
        <p style="font-size:18px;margin-top:-10px;"><span>the provided email address</span></p>
        <button type="submit">Submit</button>
        <span><a href="{{ url('/login') }}" id="back"><h6>back</h6></a></span>
    </form>
    
@endsection