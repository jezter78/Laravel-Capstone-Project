@extends('layouts.master')

@section('title', 'Forget Password')

@section('content')
<!--Form Start-->
<form name="passwordForgetForm" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 form-base">
            <div class="page-header">
                <h2>Reset Password</h2>
            </div>
            <!--Display error message -->
            @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Error!</strong> {{ Session::get('error') }}
            </div>
            @endif
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="text"name="email" class="form-control" id="email" placeholder="e.g. abc@abc.com">
            </div>
            <p>Upon password reset, a new password will be sent to the registered email above.</p>
            <Input type="submit" name="submit" value="Reset Password" class="btn btn-danger btn-passwordreset"><br>
            <p style="margin-top: 20px;">
                    <a href="{{ url('registration') }}">Not a registered user? Click here.</a>
            </p>
        </div>
    </div>
</form>
@stop

