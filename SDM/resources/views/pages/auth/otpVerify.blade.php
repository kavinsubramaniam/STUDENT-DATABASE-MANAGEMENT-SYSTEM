@extends('layouts.auth')

@section('cssLink')
<link rel="stylesheet" href="{{ asset('css/auth/otpVerify.css')}}">    
@endsection

@section('formTitle')
    <h1>OTP Verification</h1>
@endsection

@section('main')
    <form class="loginForm" action="{{ url('/OtpVerify')}}" method="POST">
        @csrf
        <div class="input_field">
            <label for="otp">OTP </label>
            <input type="text" id="otp" name="top" style="boder:none;outline:none;" required>
        </div>
        <div class="Resend">
        <span><p>if didn’t receive any email please click here </p><a href="#" id="Resend" style="font-size: 25px;"><h6>Resend</h6></a></span>
        </div>
        
        <button type="submit">Submit</button>
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