@extends('layouts.master')

@section('title', 'Landing')

@section('content')
<div class="row">
    <div class="col-sm-5">
        <!--User name-->
        <h1 id="first">{{ $lastname }} {{ $firstname }}</h1>
        <!--Welcome Message-->
        <h1 id="second" class="text-center">Welcome to ABC Portal</h1>
    </div>
    <div class="col-sm-7">
        <!--Forum category to be link in future-->
        <ul class="home-side">
            <li class="home-side-item"> Project </li>
            <li class="home-side-item"> Job Opportunities </li>
            <li class="home-side-item"> Message Board </li>
        </ul>
        <!--<p class="accessdate text-right">Last Access: </p>-->
    </div>
</div>

<script>
    //on document load
    $(document).ready(function(){
        //user name fade in first
        $('#first').fadeIn(1000,function(){
            //welcome message fade in second
            $('#second').fadeIn(1000);
        });

        //fade in forum categories one by one
        $('.home-side-item').each(function(index){
              $(this).fadeIn(index*1000);
        });
    });
</script>
@stop
