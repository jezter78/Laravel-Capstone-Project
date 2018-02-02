@extends('layouts.master')

@section('title', 'Login')

@section('content')
<!--Form Start-->
<form name="loginForm" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 form-base">
            <div class="page-header">
                <h2>Log In</h2>
            </div>
            <div class="errDisplay"></div>
            <div class="form-group">
                <label for="email">Email address:</label> 
                <input type="email" name="email" class="form-control" id="email" 
                       placeholder="e.g. abc@abc.com">
                <div class="errDisplay"></div>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label> 
                <input type="password" name="password" class="form-control" id="pwd">
                <div class="errDisplay"></div>
            </div>
            <div class="text-center">
                <Input type="submit" name="submit" value="Log In" class="btn btn-primary btn-login">
            </div>
            <div class="text-center">
                <a href="passwordForget.php">Forget Your Password? Click here.</a>
            </div>
            <div class="text-center">
                <a href="registration.php">Not a registered user? Click here.</a>
            </div>
        </div>
    </div>
</form>
@stop

