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
            <!--Display success on listing page if delete is successful on delete page-->
            @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Error!</strong> {{ Session::get('error') }}
            </div>
            @endif
            <div class="errDisplay"></div>
            <div class="form-group">
                <label for="email">Email address:</label> 
                <input type="email" name="email" class="form-control" id="email" 
                       placeholder="e.g. abc@abc.com">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label> 
                <input type="password" name="password" class="form-control" id="pwd">
            </div>
            <div class="text-center">
                <Input type="submit" name="submit" value="Log In" class="btn btn-primary btn-login">
            </div>
            <div class="text-center">
                <a href="passwordForget.php">Forget Your Password? Click here.</a>
            </div>
            <div class="text-center">
                <a href="{{ url('registration') }}">Not a registered user? Click here.</a>
            </div>
        </div>
    </div>
</form>
@stop

