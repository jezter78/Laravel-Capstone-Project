@extends('layouts.master')

@section('title', 'User Profiles')

@section('content')
<!--Display success on listing page if delete is successful on delete page-->
@if(Session::has('status'))
<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> {{ Session::get('status') }}
</div>
@endif
<!--Search Form-->
<form class="form-inline well search-style" method="get">
    <div class="row">
        <div class="col-md-12">
            <!--Form content-->
            <div class="form-group col-md-2">
                <input name="lastname" type="text" class="form-control col-md-2" id="lastname" placeholder="Last Name"
                       value="{{ Request::input('lastname') }}">
            </div>
            <div class="form-group col-md-2">
                <input name="firstname" type="text" class="form-control" id="firstname" placeholder="First Name"
                       value="{{ Request::input('firstname') }}">
            </div>            
            <div class="form-group col-md-2">
                <input name="company" type="text" class="form-control" id="company" placeholder="Company"
                       value="{{ Request::input('company') }}">
            </div>
            <div class="form-group col-md-2">
                <input name="country" type="text" class="form-control" id="country" placeholder="Country"
                       value="{{ Request::input('country') }}">
            </div>
            <div class="form-group col-md-2">
                <input name="city" type="text" class="form-control" id="City" placeholder="City"
                       value="{{ Request::input('city') }}">
            </div>
            <div class="text-center col-md-2">
                <button name="searched" type="submit" id="submit" class="btn btn-warning search-style-btn">
                    <span class="glyphicon glyphicon-search"></span> Search
                </button>
            </div>
        </div>
    </div>
</form>
<!--End of Search Form-->

<!--table to list all user-->
<div class="well table-wrapper table-responsive">
    <div class="row">
        <div class="col-sm-12">
            @if($users)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Gender</th>
                            <th>Company</th>
                            <th>Country</th>
                            <th>City</th>                           
                            <th>Date/Time Join</th>
                            <th>View</th>
                            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'super')
                                <th>Status</th>
                                <th>Role</th>
                                <th>Edit</th>
                                <th>Delete</th>                                  
                            @endif       
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->gender}}</td>
                            <td>{{ $user->company }}</td>
                            <td>{{ $user->country }}</td>
                            <td>{{ $user->city }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td><a href="{{ url('viewOthers/'.$user->id) }}"><span class='glyphicon glyphicon-eye-open'></span></a></td>                          
                        
                        @if(Auth::user()->role == 'admin' || Auth::user()->role == 'super')
                            <td>{{$user->status}}</td>
                            <td>{{$user->role}}</td>
                            <td><a class='btn btn-warning btn-op' href='{{ url("editOthers/".$user->id) }}'>Edit</a></td>
                            <td><a class='btn btn-warning btn-op' href='{{ url("delete/".$user->id) }}'>Delete</a></td>
                        @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>User Data not found!</p>
            @endif
        </div>
    </div>
    
</div>

<script>
$(document).ready(function(){
    //tooltip activation for delete disabled
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
<!--pagination-->
@stop