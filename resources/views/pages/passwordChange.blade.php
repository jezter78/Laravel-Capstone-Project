@extends('layouts.master')

@section('title', 'Password Change')

@section('content')
<!--Form Start-->
<form name="passwordResetForm" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 form-base">
            <div class="page-header">
                <h2>Change Password</h2>
            </div>
            <!--warning section-->
            @if(Session::has('status'))
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> {{ Session::get('status') }}
                </div>
            @endif
            <!--end of warning-->
            <div class="form-group">
                <label for="password">New Password:</label>
                <input type="password" name="password" class="form-control" maxlength="20" placeholder="Password must be at least 8 characters"
                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                       title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                <small>* Must contain at least one number and one uppercase and lowercase letter</small>
            </div>
            <div class="form-group">
                <label for="retypePwd">Retype Password:</label>
                <input type="password" name="retypePwd" class="form-control" maxlength="20">                
            </div>
            <div class="errDisplay"></div>
            <Input type="submit" name="submit" value="Reset Password" class="btn btn-danger btn-passwordreset">
        </div>
    </div>
</form>
@stop
