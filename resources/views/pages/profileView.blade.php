@extends('layouts.master')

@section('title', 'View Profile')

@section('content')
<div class="well well-lg viewProfile-wrapper">
@if($user)
    <!--profile content-->
    <h2>Profile of <span class="viewProfile-header-name">{{ $user->lastname }} {{ $user->firstname }}</span></h2>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <table class="table table-bordered table-wrapper">
                <tbody>
                    <tr>
                        <td class="viewProfile-label"><span 
                                class="glyphicon glyphicon-briefcase"></span> Company</td>
                        <td>{{ $user->company }}</td>
                    </tr>
                    <tr>
                        <td class="viewProfile-label"><span 
                                class="glyphicon glyphicon-envelope"></span> Email</td>
                        <td>{{ $user->email }}</td>
                    </tr> 
                    <tr>
                        <td class="viewProfile-label"><span 
                                class="glyphicon glyphicon-user"></span> Gender</td>
                        <td>{{ $user->gender }}</td>
                    </tr>                    
                    <tr>
                        <td class="viewProfile-label"><span 
                                class="glyphicon glyphicon-plane"></span> Country</td>
                        <td>{{ $user->country }}</td>
                    </tr>
                    <tr>
                        <td class="viewProfile-label"><span 
                                class="glyphicon glyphicon-road"></span> City</td>
                        <td>{{ $user->city }}</td>
                    </tr>            
                <tbody>
            </table>
        </div>
    </div>
    <div class="text-right">
        <h6>Member since {{ $user->created_at }}</h6>
    </div>
<!--if user not found-->
@else
    <h1>Oops, User not Found!</h1>
@endif
</div>
@stop
