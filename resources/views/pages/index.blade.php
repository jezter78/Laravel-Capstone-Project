@extends('layouts.master')

@section('title', 'Home')

@section('content')
<!-- Content header -->
<div class="row">
    <div class="col-sm-6 content-header">
    <div class="spacing"></div>
            <h1 class="text-center">ABC<span> PORTAL</span></h1>
            <h2 class="text-center">A Programming Network</h2>
    </div>
    <!-- About Us -->
    <div class="col-sm-5">
        <div class="homebox-style well well-lg">
            <!--Short description-->	
            <h3 class="page-header">About Us</h3>
            <div class="text-muted about-text">
                <p> ABC portal is a site where all
                professional programmers can get together to collaborate on
                projects. In this portal, the users can also search, communicate
                and seek help from other registered programmers.</p>

                <p> Job postings in the site also opens up programming job opportunities for the users.</p>
            </div>
            <!--End of Short description-->
            <!--Join Us/Register button-->
            <p><button type="button" onclick="window.location.href = '{{ url('registration') }}'"
                    class="btn btn-success btn-lg homebox-btn">Join Us</button></p>

            <!--Log In button-->
            <p><button type="button" onclick="window.location.href = '{{ url('login') }}'"
                    class="btn btn-primary btn-lg homebox-btn">Log In</button></p>
        </div>
    </div>
</div>
@stop