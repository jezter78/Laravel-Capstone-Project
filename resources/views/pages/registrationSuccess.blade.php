@extends('layouts.master')

@section('title', 'View Profile')

@section('content')
<div class="row">
    <h2 class="page-header">Registration Confirmed</h2>
    <p class="well">Thank you for registering with us!</p>
</div>
<div class="row">
    <div class="text-center login-prompt">
        <h2>Log in and Start Using the Portal!</h2>
        <button onclick="window.location.href='{{ url('auth/login') }}'" class="btn btn-primary btn-lg">Log in</button>
    </div>
</div>
@stop

