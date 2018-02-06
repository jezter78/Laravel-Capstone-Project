@extends('layouts.master')

@section('title', 'User Profiles')

@section('content')
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
                            <td>{{ $user->user_lastname }}</td>
                            <td>{{ $user->user_firstname }}</td>
                            <td>{{ $user->user_gender}}</td>
                            <td>{{ $user->user_company }}</td>
                            <td>{{ $user->user_country }}</td>
                            <td>{{ $user->user_city }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td><a href='viewProfile.php?id={{ $user->user_id }}'><span class='glyphicon glyphicon-eye-open'></span></a></td>                          
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