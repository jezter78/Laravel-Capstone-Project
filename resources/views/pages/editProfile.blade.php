@extends('layouts.master')

@section('title', 'Edit Profiles')

@section('content')
<!--Form Start-->
<form name="editForm" method="post">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 form-base">
            <h2 class="page-header">Edit Profile</h2>
            <!--warning section-->
            @if(Session::has('status'))
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> {{ Session::get('status') }}
                </div>
            @endif
            <!--end of warning-->
            
            <!--Common display items-->
            <p class="text-warning">
                <small>*All fields are required!</small>
            </p>
            <div class="form-group">
                <input type='hidden' name='_token' value="{{ csrf_token() }}">
                <input type='hidden' name='_method' value="PUT">
                <label for="lastname">Last Name:</label> 
                <input type="text" id="lastname" class="form-control" id="lastname" name="lastname" 
                       placeholder="e.g. Doe" value="{{ $user->lastname }}" maxlength="50"
                       pattern="^^[a-zA-Z][a-zA-Z0-9-_\.]{1,50}$"
                       title="Input cannot contain symbols & spaces and cannot be empty">
                <div id="errLastName" class="errDisplay"></div>
            </div>            
            <div class="form-group">
                <label for="firstname">First Name:</label> 
                <input type="text" id="firstname" class="form-control" id="firstname" name="firstname" 
                       placeholder="e.g. John" value="{{ $user->firstname }}" maxlength="50"
                       pattern="^^[a-zA-Z][a-zA-Z0-9-_\.]{1,50}$"
                       title="Input cannot contain symbols & spaces and cannot be empty">
                <div id="errFirstName" class="errDisplay"></div>
            </div>
            <div class="form-group">
                <label for="company">Company Name:</label> 
                <input type="text" class="form-control" id="company" name="company" 
                       placeholder="e.g. ABC Pte Ltd" value="{{ $user->company }}" maxlength="50">
                <div id="errCompany" class="errDisplay"></div>
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                    @include('includes/countryOptions')
                <script> 
                    //script to select the original value
                    $('option[value = "{{ $user->country }}').prop("selected",true);              
                </script>
                <div id="errCountry" class="errDisplay"></div>
            </div>
            <div class="form-group">
                <label for="city">City:</label> 
                <input type="text" class="form-control" id="city" name="city" 
                       placeholder="The city that you live in" value="{{ $user->city }}" maxlength="50"
                       pattern="^^[a-zA-Z][a-zA-Z0-9-_\.]{1,50}$"
                       title="Input cannot contain symbols & spaces and cannot be empty">
                <div id="errCity" class="errDisplay"></div>
            </div>
        <div class="form-group">
            <label for="email">Email address:</label> 
            <input type="email" name="email" class="form-control" id="email" 
                   placeholder="e.g. abc@abc.com" value="{{ $user->email }}" maxlength="50">
            <div id="errEmail" class="errDisplay"></div>
        </div>
        @if(Request::is('editOthers/*'))
            @if(Auth::user()->isAdmin())
            <div class="form-group">
                <label name="status" for="status">Status:</label>
                <select class="form-control" name="status" id="status">
                    <option {{ $user->status == 'active' ? "selected = 'selected'":""}} value="active">Active</option>
                    <option {{ $user->status == 'block' ? "selected = 'selected'":""}} value="block">Block</option>           
                </select>
            </div>
            @endif
            @if(Auth::user()->isSuper())
            <div class="form-group">
                <label name="role" for="role">Role:</label>
                <select class="form-control" name="role" id="role">
                    <option {{ $user->role == 'user' ? "selected = 'selected'":""}} value="user">User</option>
                    <option {{ $user->role == 'admin' ? "selected = 'selected'":""}} value="admin">Admin</option>
                    <option {{ $user->role == 'super' ? "selected = 'selected'":""}} value="super">Super</option>
                </select>
            </div>
            @endif
        @endif
        <!--End of Common display items-->
        <!--Update and cancel buttons-->
        <div class="row">
            <div class="col-sm-6 col-sm-push-6 text-center">
                <Input type="submit" name="submit" value="Update" class="btn btn-success btn-reg">
            </div>
            <div class="col-sm-6 col-sm-pull-6 text-center">
                    <Input type="submit" name="cancel" value="Cancel" class="btn btn-default btn-reg">
            </div>
        </div>
        </div>
    </div>
</form>
<!--End of form-->
@stop