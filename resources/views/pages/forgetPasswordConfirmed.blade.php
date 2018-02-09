@extends('layouts.master')

@section('title', 'Forget Password')

@section('content')

<div class="row">
    <h2 class="page-header">Password Reset Confirmed</h2>
    <p class="well">Your password has been reset. Please check your email for your new password!</p>
</div>
<div class="row">
    <div class="text-center login-prompt">
        <h2>Log in and Start Using the Portal!</h2>
        <button onclick="window.location.href='{{url('auth/login')}}'" class="btn btn-primary btn-lg">Log in</button>
    </div>
</div>

@stop