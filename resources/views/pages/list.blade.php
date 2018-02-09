@extends('layouts.master')

@section('title', 'User Profiles')

@section('content')
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
                            <?php 
                                //if user is admin, show opertations
                                //if($isAdmin){
                                   // echo '<th>Status</th>';
                                    //echo '<th>Role</th>';
                                    ///echo '<th>Edit</th><th>Delete</th>';                                   
                                //}
                            ?>                            
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
                        </tr>                
                        @endforeach
                        
                        <?php
                            //if the user is admin, show the operation buttons
                            /*
                            if($isAdmin){
                                echo "<td>{$user->user_status}</td>";
                                echo "<td>{$user->user_role}</td>";
                                echo "<td><a class='btn btn-warning btn-op' href='edit.php?id={$user->user_id}'>Edit</a>";
                                echo "<td><a class='btn btn-danger btn-op' ";

                                //if result is ownself, disable the delete button
                                if($user->user_id == $_SESSION['id']){
                                    echo"disabled data-toggle='tooltip' title='Unable to delete ownself!'";
                                } else {
                                    echo "href='delete.php?id={$user->user_id}'";
                                }                                   
                                echo ">Delete</a></td>";
                            }*/                           
                        ?>
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