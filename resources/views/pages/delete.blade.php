@extends('layouts.master')

@section('title', 'Delete User')

@section('content')
<div class="row">
    <h2 class="page-header">Profile Delete Confirmation</h2>
    <!--delete Form-->
    <form name="deleteForm" class="form" method="post">
        <input type='hidden' name='_token' value="{{ csrf_token() }}">
        <input type='hidden' name='_method' value="DELETE">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 well form-base logout-style">                        
            <div class="text-center">
                <h3>Do you want to delete the following account?</h3>
                <p>User Name:{{ $user->lastname }} {{ $user->firstname}}</p>
                <p>Email: {{ $user->email }}</p>
                <div class="errDisplay">{{ Session::has('error')?Session::get('error'):"" }}</div>
                <input class="btn btn-toolbar" type ="submit" name="canceled" value="CANCEL">
                <input class="btn btn-danger" type ="submit" name="confirmed" value="CONFIRM">
            </div>
            </div>
        </div>
    </form>
    <!--End of delete Form-->
</div>
@stop

